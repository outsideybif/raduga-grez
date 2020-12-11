<?php
class ControllerInformationFaq extends Model {
    
    public function index(){
        $this->load->model('rcf/rcf');	
		$blocks = $this->model_rcf_rcf->getFields(4);
        $data = [];

		//$data["about_small_title"] 		= $blocks[1]["fields"][1]["value"];
		

        $data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');
        


        $data["faq_title"]            = $blocks[10]["fields"][41]["value"];
        $data["faq_image"]            = $blocks[10]["fields"][43]["value"];
        

        $data["faq_decorative_image"]               = $blocks[11]["fields"][44]["value"];
        




		$this->response->setOutput($this->load->view('information/faq', $data));
    }
}
