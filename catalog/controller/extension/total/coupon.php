<?php
class ControllerExtensionTotalCoupon extends Controller {
	public function index() {
		if ($this->config->get('total_coupon_status')) {
			$this->load->language('extension/total/coupon');

			if (isset($this->session->data['coupon'])) {
				$data['coupon'] = $this->session->data['coupon'];
			} else {
				$data['coupon'] = '';
			}

			return $this->load->view('extension/total/coupon', $data);
		}
	}

	public function coupon() {
		$this->load->language('extension/total/coupon');

		$json = array();


		$this->load->model('extension/total/coupon');

		if (isset($this->request->post['coupon'])) {
			$coupon = $this->request->post['coupon'];
		} else {
			$coupon = '';
		}

		$coupon_info = $this->model_extension_total_coupon->getCoupon($coupon);

		if (empty($this->request->post['coupon'])) {
			$json['error'] = $this->language->get('error_empty');

			unset($this->session->data['coupon']);
		} elseif ($coupon_info) {
			$this->session->data['coupon'] = $this->request->post['coupon'];

			$this->session->data['success'] = $this->language->get('text_success');

			$json['redirect'] = $this->url->link('checkout/cart');



			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);
			$this->load->model('setting/extension');
			$results = $this->model_setting_extension->getExtensions('total');
			foreach ($results as $result) {
				if ($this->config->get('total_' . $result['code'] . '_status')) {
					$this->load->model('extension/total/' . $result['code']);
					$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
				}
			}

			
			foreach ($total_data["totals"] as $value) {
				if($value["code"] == "shipping"){
					$json["shippingTotal"] = $this->currency->format($value["value"], $this->session->data['currency']);
				}
				if($value["code"] == "sub_total"){
					$json["subtotal"] = $this->currency->format($value["value"], $this->session->data['currency']);
				}
			}

			
			$json["totalPrice"] = $this->currency->format($total_data["total"], $this->session->data['currency']);


			$coupon_info = $this->model_extension_total_coupon->getCoupon($this->request->post['coupon']);
			$json["coupon_label"] = $coupon_info["name"];

			if($coupon_info["type"] == "P"){
				$json["coupon_value"] = "-" . round($coupon_info["discount"]) . "%";
			}
			if($coupon_info["type"] == "F"){
				$json["coupon_value"] = "-$" . round($coupon_info["discount"]);
			}
			
			
			





		} else {
			$json['error'] = $this->language->get('error_coupon');
		}


		$json["test"] = "test";

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function unsetcoupon() {
		unset($this->session->data['coupon']);

		$json["test"] = "test";

		$total_data = array(
			'totals' => &$totals,
			'taxes'  => &$taxes,
			'total'  => &$total
		);
		$this->load->model('setting/extension');
		$results = $this->model_setting_extension->getExtensions('total');
		foreach ($results as $result) {
			if ($this->config->get('total_' . $result['code'] . '_status')) {
				$this->load->model('extension/total/' . $result['code']);
				$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
			}
		}

		
		foreach ($total_data["totals"] as $value) {
			if($value["code"] == "shipping"){
				$json["shippingTotal"] = $this->currency->format($value["value"], $this->session->data['currency']);
			}
			if($value["code"] == "sub_total"){
				$json["subtotal"] = $this->currency->format($value["value"], $this->session->data['currency']);
			}
		}

		
		$json["totalPrice"] = $this->currency->format($total_data["total"], $this->session->data['currency']);


		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
