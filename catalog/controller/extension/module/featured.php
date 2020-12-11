<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['productsTop'] = array();
		$data['productsBottom'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 5;
		}
		
		$firstProduct;

		if (!empty($setting['product'])) {
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);

			$indexProduct = 0;
			$data["ids"] = '';
			foreach ($products as $product_id) {
				
				
				$product_info = $this->model_catalog_product->getProduct($product_id);
				
				if ($product_info) {
					
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], 700, 700);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', 700, 700);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}

					$productCategory = $this->model_catalog_product->getActiveCategory($product_info['product_id']);

					if($productCategory == null) {

						$productCategory = [
							'category_id' => -1,
							'name' => ''
						];

					}

					if($indexProduct == 0){
						
						$data['firstProduct'] = array(
							'product_id'  => $product_info['product_id'],
							'thumb'       => $image,
							'name'        => $product_info['name'],
							'video'        => $product_info['video'],
							'category_name' => $productCategory["name"],
							'category_link' => $this->url->link('product/category', 'path=' . $productCategory['category_id'] ),
							'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
							'price'       => $price,
							'special'     => $special,
							'tax'         => $tax,
							'rating'      => $rating,
							'minimum'     => $product_info['minimum'] > 0 ? $product_info['minimum'] : 1,
							'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
						);
					} else {
						
						if($indexProduct < 3){
							$data['productsTop'][] = array(
								'product_id'  => $product_info['product_id'],
								'thumb'       => $image,
								'name'        => $product_info['name'],
								'video'        => $product_info['video'],
								'category_name' => $productCategory["name"],
								'category_link' => $this->url->link('product/category', 'path=' . $productCategory['category_id'] ),
								'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
								'price'       => $price,
								'special'     => $special,
								'tax'         => $tax,
								'rating'      => $rating,
								'minimum'     => $product_info['minimum'] > 0 ? $product_info['minimum'] : 1,
								'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
							);
						} else {
							$data['productsBottom'][] = array(
								'product_id'  => $product_info['product_id'],
								'thumb'       => $image,
								'name'        => $product_info['name'],
								'video'        => $product_info['video'],
								'category_name' => $productCategory["name"],
								'category_link' => $this->url->link('product/category', 'path=' . $productCategory['category_id'] ),
								'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
								'price'       => $price,
								'special'     => $special,
								'tax'         => $tax,
								'rating'      => $rating,
								'minimum'     => $product_info['minimum'] > 0 ? $product_info['minimum'] : 1,
								'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
							);
						}
						
					}
					


					$indexProduct++;
				}


			}
		}




		$homepage = "/CLEANOPENCART/UPLOAD/";
		$currentpage = $_SERVER['REQUEST_URI'];
		$homed = false;
		if($homepage==$currentpage) { 
			$homed = true;
		} else {

		}






		$this->load->model('rcf/rcf');	
		$blocks = $this->model_rcf_rcf->getFields(1);
		$data["spend_title"] = $blocks[2]["fields"][14]["value"];








		
		
		if ($data['productsTop']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}