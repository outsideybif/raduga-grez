<?php
class ControllerExtensionShippingRussianPost extends Controller {
	private $error = array();
	
	public function index() {   
		$this->load->language('extension/shipping/russian_post');
		
		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');
				
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('shipping_russian_post', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');
			
			if ((int)$this->request->post['apply']) {
				$this->response->redirect($this->url->link('extension/shipping/russian_post', 'user_token=' . $this->session->data['user_token'], true));
			}

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true));
		}
		
		$data['shipping_language'] = array();
		
		for ($i = 0; $i <= 32; $i++) {
			$data['lang'][$i] = $this->language->get('text_' . $i);
		}

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->session->data['success'])) {
			$data['error_success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['error_success'] = '';
		}
		
		if (isset($this->error['key'])) {
			$data['error_key'] = $this->error['key'];
		} else {
			$data['error_key'] = '';
		}
		
		if (isset($this->error['postcode'])) {
			$data['error_postcode'] = $this->error['postcode'];
		} else {
			$data['error_postcode'] = '';
		}
		
		if (isset($this->error['city'])) {
			$data['error_city'] = $this->error['city'];
		} else {
			$data['error_city'] = '';
		}

  		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/shipping/russian_post', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/shipping/russian_post', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=shipping', true);
		
		if (isset($this->request->post['shipping_russian_post'])) {
			$data['shipping_russian_post'] = $this->request->post['shipping_russian_post'];
		} elseif($this->config->get('shipping_russian_post')){
			$data['shipping_russian_post'] = $this->config->get('shipping_russian_post');
		} else {
			$data['shipping_russian_post'] = array();
		}
		
		$this->load->model('tool/image');
		
		if ($data['shipping_russian_post']) {
			foreach ($data['shipping_russian_post'] as $key => $value) {
				
				if (isset($value['image']) && is_file(DIR_IMAGE . $value['image'])) {
					$thumb = $value['image'];
				} else {
					$thumb = 'no_image.png';
				}

				$data['shipping_russian_post'][$key]['thumb'] = $this->model_tool_image->resize($thumb, 100, 100);
			}
		}
		
		if (isset($this->request->post['shipping_russian_post_show_image'])) {
			$data['shipping_russian_post_show_image'] = $this->request->post['shipping_russian_post_show_image'];
		} else {
			$data['shipping_russian_post_show_image'] = $this->config->get('shipping_russian_post_show_image');
		}
		
		if (isset($this->request->post['shipping_russian_post_image_width'])) {
			$data['shipping_russian_post_image_width'] = $this->request->post['shipping_russian_post_image_width'];
		} elseif ($this->config->get('shipping_russian_post_image_width')) {
			$data['shipping_russian_post_image_width'] = $this->config->get('shipping_russian_post_image_width');
		} else {
			$data['shipping_russian_post_image_width'] = 32;
		}
		
		if (isset($this->request->post['shipping_russian_post_image_height'])) {
			$data['shipping_russian_post_image_height'] = $this->request->post['shipping_russian_post_image_height'];
		} elseif ($this->config->get('shipping_russian_post_image_height')) {
			$data['shipping_russian_post_image_height'] = $this->config->get('shipping_russian_post_image_height');
		} else {
			$data['shipping_russian_post_image_height'] = 32;
		}
		
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		
		if (isset($this->request->post['shipping_russian_post_status'])) {
			$data['shipping_russian_post_status'] = $this->request->post['shipping_russian_post_status'];
		} else {
			$data['shipping_russian_post_status'] = $this->config->get('shipping_russian_post_status');
		}
		
		if (isset($this->request->post['shipping_russian_post_key'])) {
			$data['shipping_russian_post_key'] = $this->request->post['shipping_russian_post_key'];
		} else {
			$data['shipping_russian_post_key'] = $this->config->get('shipping_russian_post_key');
		}
		
		if (isset($this->request->post['shipping_russian_post_type_query'])) {
			$data['shipping_russian_post_type_query'] = $this->request->post['shipping_russian_post_type_query'];
		} else {
			$data['shipping_russian_post_type_query'] = $this->config->get('shipping_russian_post_type_query');
		}
		
		if (isset($this->request->post['shipping_russian_post_server'])) {
			$data['shipping_russian_post_server'] = $this->request->post['shipping_russian_post_server'];
		} else {
			$data['shipping_russian_post_server'] = $this->config->get('shipping_russian_post_server');
		}
		
		if (isset($this->request->post['shipping_russian_post_sort_order'])) {
			$data['shipping_russian_post_sort_order'] = $this->request->post['shipping_russian_post_sort_order'];
		} else {
			$data['shipping_russian_post_sort_order'] = $this->config->get('shipping_russian_post_sort_order');
		}
		
		if (isset($this->request->post['shipping_russian_post_debug'])) {
			$data['shipping_russian_post_debug'] = $this->request->post['shipping_russian_post_debug'];
		} else {
			$data['shipping_russian_post_debug'] = $this->config->get('shipping_russian_post_debug');
		}
		
		$this->load->model('localisation/weight_class');

		$data['weight_classes'] = $this->model_localisation_weight_class->getWeightClasses();
		
		if (isset($this->request->post['shipping_russian_post_weight_class_id'])) {
			$data['shipping_russian_post_weight_class_id'] = $this->request->post['shipping_russian_post_weight_class_id'];
		} elseif ($this->config->get('shipping_russian_post_weight_class_id')) {
			$data['shipping_russian_post_weight_class_id'] = $this->config->get('shipping_russian_post_weight_class_id');
		} else {
			$data['shipping_russian_post_weight_class_id'] = 2;
		}
                
		if (isset($this->request->post['shipping_russian_post_weight'])) {
			$data['shipping_russian_post_weight'] = $this->request->post['shipping_russian_post_weight'];
		} elseif ($this->config->get('shipping_russian_post_weight')) {
			$data['shipping_russian_post_weight'] = $this->config->get('shipping_russian_post_weight');
		} else {
			$data['shipping_russian_post_weight'] = 1000;
		}
		
		if (isset($this->request->post['shipping_russian_post_package'])) {
			$data['shipping_russian_post_package'] = $this->request->post['shipping_russian_post_package'];
		} else {
			$data['shipping_russian_post_package'] = $this->config->get('shipping_russian_post_package');
		}
		
		if (isset($this->request->post['shipping_russian_post_declare'])) {
			$data['shipping_russian_post_declare'] = $this->request->post['shipping_russian_post_declare'];
		} else {
			$data['shipping_russian_post_declare'] = $this->config->get('shipping_russian_post_declare');
		}
		
		if (isset($this->request->post['shipping_russian_post_postcode_default'])) {
			$data['shipping_russian_post_postcode_default'] = $this->request->post['shipping_russian_post_postcode_default'];
		} else {
			$data['shipping_russian_post_postcode_default'] = $this->config->get('shipping_russian_post_postcode_default');
		}
		
		if (isset($this->request->post['shipping_russian_post_postcode'])) {
			$data['shipping_russian_post_postcode'] = $this->request->post['shipping_russian_post_postcode'];
		} else {
			$data['shipping_russian_post_postcode'] = $this->config->get('shipping_russian_post_postcode');
		}
		
		if (isset($this->request->post['shipping_russian_post_city'])) {
			$data['shipping_russian_post_city'] = $this->request->post['shipping_russian_post_city'];
		} else {
			$data['shipping_russian_post_city'] = $this->config->get('shipping_russian_post_city');
		}
                
		if (isset($this->request->post['shipping_russian_post_show_shipping_time'])) {
			$data['shipping_russian_post_show_shipping_time'] = $this->request->post['shipping_russian_post_show_shipping_time'];
		} else {
			$data['shipping_russian_post_show_shipping_time'] = $this->config->get('shipping_russian_post_show_shipping_time');
		}
		
		if (isset($this->request->post['shipping_russian_post_split'])) {
			$data['shipping_russian_post_split'] = $this->request->post['shipping_russian_post_split'];
		} else {
			$data['shipping_russian_post_split'] = $this->config->get('shipping_russian_post_split');
		}
		
		if (isset($this->request->post['shipping_russian_post_hide'])) {
			$data['shipping_russian_post_hide'] = $this->request->post['shipping_russian_post_hide'];
		} else {
			$data['shipping_russian_post_hide'] = $this->config->get('shipping_russian_post_hide');
		}
        
        $this->load->model('localisation/tax_class');
		
		$data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();
		
		$this->load->model('localisation/geo_zone');
		
		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/shipping/russian_post', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/shipping/russian_post')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (empty($this->request->post['shipping_russian_post_key'])) {
			$this->error['key'] = $this->language->get('error_key');
		}
		
		if (empty($this->request->post['shipping_russian_post_postcode'])) {
			$this->error['postcode'] = $this->language->get('error_postcode');
		}
		
		if (empty($this->request->post['shipping_russian_post_city'])) {
			$this->error['city'] = $this->language->get('error_city');
		}
		
		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		return !$this->error;
	}
}