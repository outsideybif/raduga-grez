<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();



		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
		$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
		$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');


		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		$data['count'] =$this->cart->countProducts();
		$date = new DateTime();
		$data['version'] = $date->getTimestamp();


		$data['categoriesLink'] = $this->url->link('product/category&path=79');
		$data['aboutLink'] = $this->url->link('about');
		
		$data['stockistLink'] = $this->url->link('stockist');

		$data['storiesLink'] = $this->url->link('stories');

		$data["checkoutLink"] = $this->url->link('checkout/checkout');
		$data["contectLink"] = $this->url->link('contacts');





		

		$queryRecomended = $this->db->query("SELECT * FROM `raduga-grez`.oc_module where name = 'Suggested' AND code ='featured'");
		$productsJson = json_decode($queryRecomended->row['setting']);



	


		


		$data["recomended"] = [];

		foreach ($productsJson->product as $result) {


			$this->load->model('catalog/product');

			$recomendedProduct = $this->model_catalog_product->getProduct($result);
			
			$data["recomended"][] = [
				"name" => $recomendedProduct['name'],
				'href' => $this->url->link('product/product', 'product_id=' . $recomendedProduct['product_id'])
			];
		}
		

		$data["isLoadingShowed"] = isset($_COOKIE["loading-screen"]);








		$data['categoriesAll'] = array();

		$results = $this->model_catalog_category->getCategories(80);
		foreach ($results as $result) {
			$data['categoriesAll'][] = array(
				'category_id'=>$result['category_id'],
				'name' => $result['name'],
				'href' => $this->url->link('product/category', "path=".$result['category_id'] )
			);
		}


		$data['categoriesCollection'] = array();

		$results = $this->model_catalog_category->getCategories(81);
		foreach ($results as $result) {
			$data['categoriesCollection'][] = array(
				'category_id'=>$result['category_id'],
				'name' => $result['name'],
				'href' => $this->url->link('product/category', "path=".$result['category_id'] )
			);
		}

		$data['categoriesShop'] = $this->url->link('product/category&path=79');















		return $this->load->view('common/header', $data);
	}
}
