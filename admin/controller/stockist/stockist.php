<?php
class ControllerStockistStockist extends Controller {
	private $error = array();

	public function index() {
		

		$this->document->setTitle("Stockist list");

		$this->load->model('stockist/stockist');

		$this->getList();
	}

	public function add() {
		$this->load->language('catalog/information');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/information');

		$this->load->model('stockist/stockist');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

			
			$this->model_stockist_stockist->addStockist($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('stockist/stockist', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function edit() {
		

		$this->document->setTitle("Stories");

		$this->load->model('stockist/stockist');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			


			
			$this->model_stockist_stockist->editStockist($this->request->get['stockist_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}


			$this->response->redirect($this->url->link('stories/stories', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getForm();
	}

	public function delete() {
		$this->load->language('catalog/information');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('stockist/stockist');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $information_id) {
				$this->model_stockist_stockist->removeStockist($information_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('stockist/stockist', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}

		$this->getList();
	}

	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'id';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
			$page = $this->request->get['page'];

		} else {
			$page = 1;
		}
		$page--;

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('stockist/stockist', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('stockist/stockist/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('stockist/stockist/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['stockists'] = array();
		
		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin'),
			'page'  => $page
		);

		$information_total = $this->model_stockist_stockist->getStockistsCount();

		$results = $this->model_stockist_stockist->getStockists($filter_data);

		foreach ($results as $result) {
			$data['stockists'][] = array(
				'stockis_item_id' => $result['stockis_item_id'],
				'stockis_country_id'          => $result['stockis_country_id'],
				'name'     => $result['name'],
				'link'     => $result['link'],

				'edit'           => $this->url->link('stockist/stockist/edit', 'user_token=' . $this->session->data['user_token'] . '&stockist_id=' . $result['stockis_item_id'] . $url, true)
			);
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_title'] = $this->url->link('catalog/information', 'user_token=' . $this->session->data['user_token'] . '&sort=id.title' . $url, true);
		$data['sort_sort_order'] = $this->url->link('catalog/information', 'user_token=' . $this->session->data['user_token'] . '&sort=i.sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $information_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('stockist/stockist', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		//$data['results'] = sprintf($this->language->get('text_pagination'), ($information_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($information_total - $this->config->get('config_limit_admin'))) ? $information_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $information_total, ceil($information_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('stockist/stockist_list', $data));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['stockist_id']) ? "Add story" : "Edit story";

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['title'])) {
			$data['error_title'] = $this->error['title'];
		} else {
			$data['error_title'] = array();
		}

		if (isset($this->error['description'])) {
			$data['error_description'] = $this->error['description'];
		} else {
			$data['error_description'] = array();
		}

		if (isset($this->error['meta_title'])) {
			$data['error_meta_title'] = $this->error['meta_title'];
		} else {
			$data['error_meta_title'] = array();
		}

		if (isset($this->error['keyword'])) {
			$data['error_keyword'] = $this->error['keyword'];
		} else {
			$data['error_keyword'] = '';
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => "Stories",
			'href' => $this->url->link('stockist/stockist', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		if (!isset($this->request->get['story_id'])) {
			$data['action'] = $this->url->link('stockist/stockist/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('stockist/stockist/edit', 'user_token=' . $this->session->data['user_token'] . '&stockist_id=' . $this->request->get['stockist_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('stockist/stockist', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['stockist_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$information_info = $this->model_stockist_stockist->getStockist($this->request->get['stockist_id']);
			$data["stockist"] = $information_info;
		}

		$data["stockist_countries"] = $this->model_stockist_stockist->getStockistCountries();
		
		

		$data['user_token'] = $this->session->data['user_token'];

		





		$this->load->model('setting/store');

		$data['stockists'] = array();
		
		// $data['stockists'][] = array(
		// 	'store_id' => 0,
		// 	'name'     => $this->language->get('text_default')
		// );
		
		$stores = $this->model_setting_store->getStores();

		foreach ($stores as $store) {
			$data['stores'][] = array(
				'store_id' => $store['store_id'],
				'name'     => $store['name']
			);
		}

		

		// if (isset($this->request->post['status'])) {
		// 	$data['status'] = $this->request->post['status'];
		// } elseif (!empty($information_info)) {
		// 	$data['status'] = $information_info['status'];
		// } else {
		// 	$data['status'] = true;
		// }

		// if (isset($this->request->post['sort_order'])) {
		// 	$data['sort_order'] = $this->request->post['sort_order'];
		// } elseif (!empty($information_info)) {
		// 	$data['sort_order'] = $information_info['sort_order'];
		// } else {
		// 	$data['sort_order'] = '';
		// }
		
		
		

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		

		$this->response->setOutput($this->load->view('stockist/stockist_form', $data));
	}


	
	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/information')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		// foreach ($this->request->post['information_description'] as $language_id => $value) {
		// 	if ((utf8_strlen($value['title']) < 1) || (utf8_strlen($value['title']) > 64)) {
		// 		$this->error['title'][$language_id] = $this->language->get('error_title');
		// 	}

		// 	if (utf8_strlen($value['description']) < 3) {
		// 		$this->error['description'][$language_id] = $this->language->get('error_description');
		// 	}

		// 	if ((utf8_strlen($value['meta_title']) < 1) || (utf8_strlen($value['meta_title']) > 255)) {
		// 		$this->error['meta_title'][$language_id] = $this->language->get('error_meta_title');
		// 	}
		// }

		// if ($this->request->post['information_seo_url']) {
		// 	$this->load->model('design/seo_url');
			
		// 	foreach ($this->request->post['information_seo_url'] as $store_id => $language) {
		// 		foreach ($language as $language_id => $keyword) {
		// 			if (!empty($keyword)) {
		// 				if (count(array_keys($language, $keyword)) > 1) {
		// 					$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_unique');
		// 				}						
						
		// 				$seo_urls = $this->model_design_seo_url->getSeoUrlsByKeyword($keyword);
						
		// 				foreach ($seo_urls as $seo_url) {
		// 					if (($seo_url['store_id'] == $store_id) && (!isset($this->request->get['information_id']) || ($seo_url['query'] != 'information_id=' . $this->request->get['information_id']))) {
		// 						$this->error['keyword'][$store_id][$language_id] = $this->language->get('error_keyword');
		// 					}
		// 				}
		// 			}
		// 		}
		// 	}
		// }

		// if ($this->error && !isset($this->error['warning'])) {
		// 	$this->error['warning'] = $this->language->get('error_warning');
		// }

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/information')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		// $this->load->model('setting/store');

		// foreach ($this->request->post['selected'] as $information_id) {
		// 	if ($this->config->get('config_account_id') == $information_id) {
		// 		$this->error['warning'] = $this->language->get('error_account');
		// 	}

		// 	if ($this->config->get('config_checkout_id') == $information_id) {
		// 		$this->error['warning'] = $this->language->get('error_checkout');
		// 	}

		// 	if ($this->config->get('config_affiliate_id') == $information_id) {
		// 		$this->error['warning'] = $this->language->get('error_affiliate');
		// 	}

		// 	if ($this->config->get('config_return_id') == $information_id) {
		// 		$this->error['warning'] = $this->language->get('error_return');
		// 	}

		// 	$store_total = $this->model_setting_store->getTotalStoresByInformationId($information_id);

		// 	if ($store_total) {
		// 		$this->error['warning'] = sprintf($this->language->get('error_store'), $store_total);
		// 	}
		// }

		return !$this->error;
	}


	

	
}