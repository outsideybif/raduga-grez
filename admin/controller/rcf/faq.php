<?php
class ControllerRcfFaq extends Model {
    
    public function index() {
        $this->load->model('rcf/rcf');	
        $this->getForm();
    }
    
    public function save() {
        $this->load->model('rcf/rcf');
        //print_r($this->request->post );
        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            foreach ($this->request->post["block"] as $key => $block) {
                foreach ($block as $buffer) {
                    foreach ($buffer as $keyField => $valueField) {
                        $blocks = $this->model_rcf_rcf->editField($keyField, $valueField);
                    }
                }
            }
        }
        $this->getForm();
    }

    public function getForm() {
        $data = [];
        
		$blocks = $this->model_rcf_rcf->getFields(4);
		$data["blocks"] = $blocks;
        $data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        $data['action'] = $this->url->link('rcf/faq/save', 'user_token=' . $this->session->data['user_token'], true);
        $this->response->setOutput($this->load->view('rcf/faq', $data));
    }
}
