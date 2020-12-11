<?php
class ControllerInformationAbout extends Model {
    
    public function index(){
        $this->load->model('rcf/rcf');	
		$blocks = $this->model_rcf_rcf->getFields(2);
        $data = [];

		//$data["about_small_title"] 		= $blocks[1]["fields"][1]["value"];
		

        $data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');
        


        $data["about_first_block_title"]            = $blocks[5]["fields"][23]["value"];
        $data["about_first_block_text"]             = $blocks[5]["fields"][24]["value"];
        $data["about_first_block_big_image"]        = $blocks[5]["fields"][25]["value"];
        $data["about_first_block_image"]            = $blocks[5]["fields"][26]["value"];

        $data["about_second_block_title"]               = $blocks[6]["fields"][27]["value"];
        $data["about_second_block_text"]                = $blocks[6]["fields"][28]["value"];
        $data["about_second_block_big_image"]           = $blocks[6]["fields"][29]["value"];
        $data["about_second_block_image"]               = $blocks[6]["fields"][30]["value"];
        $data["about_second_block_decorative_image"]    = $blocks[6]["fields"][31]["value"];

        $data["about_thrid_block_title"]               = $blocks[7]["fields"][32]["value"];
        $data["about_thrid_block_left_text"]           = $blocks[7]["fields"][33]["value"];
        $data["about_thrid_block_right_text"]          = $blocks[7]["fields"][34]["value"];
        $data["about_thrid_block_decorative_image"]    = $blocks[7]["fields"][35]["value"];




		$this->response->setOutput($this->load->view('information/about', $data));
    }
}
