<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

            $data['yandex_metrika_html_code'] = $this->config->get('yandex_money_metrika_active') && $this->config->get('yandex_money_metrika_code')
                ? html_entity_decode($this->config->get('yandex_money_metrika_code'), ENT_QUOTES, 'UTF-8')
                : '';
            $data['yandex_money_kassa_show_in_footer'] = $this->config->get('yandex_money_kassa_enabled') && $this->config->get('yandex_money_kassa_show_in_footer');
            

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');

		$date = new DateTime();
		$data['version'] = $date->getTimestamp();


		$data["checkoutLink"] = $this->url->link('checkout/checkout');



		$this->load->model('rcf/rcf');	
		$blocks = $this->model_rcf_rcf->getFields(5);
		$blocksSettings = $this->model_rcf_rcf->getFields(6);

		
		$data["contact_information_instagram"]       = $blocksSettings[14]["fields"][58]["value"];
		$data["contact_information_facebook"]        = $blocksSettings[14]["fields"][59]["value"];
		$data["contact_information_pinterest"]       = $blocksSettings[14]["fields"][60]["value"];

		
		
		return $this->load->view('common/footer', $data);
	}
}
