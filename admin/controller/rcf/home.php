<?php
class ControllerRcfHome extends Model {
    
    public function index() {
        $this->load->model('rcf/rcf');	
        $this->getForm();
    }
    
    public function save() {
        $this->load->model('rcf/rcf');	
        if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
            
            
            foreach ($this->request->post["block"] as $key => $block) {
                // print_r($block);
                // print_r('<br>');
                // print_r($key);
                // print_r('<br>');
                // print_r('-=-=-=-=-=-=-=-=');
                // print_r('<br>');
                // print_r('<br>');

                foreach ($block as $buffer) {
                    foreach ($buffer as $keyField => $valueField) {
                        $blocks = $this->model_rcf_rcf->editField($keyField, $valueField);
                    }
                }
            }
			//$this->model_stories_story->EditCustomVariables($this->request->post["block_variable"]);
            //$this->model_stories_story->editStory($this->request->get['story_id'], $this->request->post);
            
        }
        $this->getForm();
        
    }

    public function getForm() {
        $data = [];
        
		$blocks = $this->model_rcf_rcf->getFields(1);
		$data["blocks"] = $blocks;
        $data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
        $data['action'] = $this->url->link('rcf/home/save', 'user_token=' . $this->session->data['user_token'], true);
        $this->response->setOutput($this->load->view('rcf/home', $data));
    }
}
