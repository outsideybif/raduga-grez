<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$query = $this->db->query("SELECT * FROM oc_stories ORDER BY story_id DESC LIMIT 1");

		$result = $query->row;

		$data["story"] = [
			"title" => $result["title"],
			"date" => $result["added_date"],
			"thumb" => "image/" . $result['image'],
			"thumb_video" => $result['video'],
			'href'  => $this->url->link('stories/list/story', '&story_id=' . $result['story_id'] )
		];


		$this->load->model('tool/image');	

		$data['categoriesAll'] = array();

		$results = $this->model_catalog_category->getCategories(80);
		foreach ($results as $result) {


			$description = html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8');

			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], 540, 540);
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			$data['categoriesAll'][] = array(
				'category_id'=>$result['category_id'],
				'description' => $description,
				'name' => $result['name'],
				'thumb' => $image,
				'href' => $this->url->link('product/category', "path=".$result['category_id'] )
			);
		}



		$this->load->model('catalog/review');	


		$resultsReviews = $this->model_catalog_review->getReviews(0, 3);
		foreach ($resultsReviews as $result) {


			$description = html_entity_decode($result['text'], ENT_QUOTES, 'UTF-8');
			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], 540, 540);
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			$data['reviews'][] = array(
				'review_id'=>$result['review_id'],
				'description'=>$description,
				'author'=>$result['author'],
				'avatar'=>$image,
				'country'=>$result['country'],
				
			);


		}




		$this->load->model('rcf/rcf');	
		$blocks = $this->model_rcf_rcf->getFields(1);


		//print_r();

		//print_r();



		$data["about_small_title"] 		= $blocks[1]["fields"][1]["value"];
		$data["about_title"] 			= $blocks[1]["fields"][2]["value"];
		$data["about_first_text"] 		= $blocks[1]["fields"][3]["value"];
		$data["about_second_text"] 		= $blocks[1]["fields"][4]["value"];
		$data["about_button_text"] 		= $blocks[1]["fields"][5]["value"];
		$data["about_center_image"] 	= $blocks[1]["fields"][6]["value"];
		$data["about_left_image"] 		= $blocks[1]["fields"][7]["value"];
		$data["about_right_image"] 		= $blocks[1]["fields"][8]["value"];
		$data["about_button_link"] 		= $blocks[1]["fields"][9]["value"];


		$data["main_title"] 			= $blocks[4]["fields"][10]["value"];
		$data["main_video"] 			= $blocks[4]["fields"][11]["value"];

		$data["main_button_text"] 		= $blocks[4]["fields"][12]["value"];
		$data["main_button_link"] 		= $blocks[4]["fields"][13]["value"];


		$data["spend_title"] 			= $blocks[2]["fields"][14]["value"];
		$data["review_title"] 			= $blocks[3]["fields"][15]["value"];
		






		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
