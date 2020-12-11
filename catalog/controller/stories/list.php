<?php
class ControllerStoriesList extends Controller {
	public function index() {
		

		$data = [];
		$url = "";
		$this->load->model('stories/story');
		$this->load->model('tool/image');

		if( isset($this->request->get['page']) ){
			$page = $this->request->get['page'];
		}else {
			$page = 1;
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		} 

		$results = $this->model_stories_story->getStories([ "page" => $page - 1, "limit" => 12 ]);
		$countOfStories = $this->model_stories_story->getStoriesCount();




		foreach ($results as $result) {
			$image = "";
			$data["stories"][] = [
				"title" => $result["title"],
				"video" => $result["video"],
				"date" => $result["added_date"],
				"thumb" => "image/" . $result['image'],
				'href'  => $this->url->link('stories/list/story', '&story_id=' . $result['story_id'] )

			];
		}
		

		$countOfPages = ceil($countOfStories / 12);
		$data["paginations"] = [];
		for ($i=0; $i < $countOfPages; $i++) { 
			$data["paginations"][] = [
				"link" => $this->url->link('stories/list', '&page=' . ($i + 1)),
				"page" => $i + 1,
				"active" => $i + 1 == $page ? true : false
			];
		}

		$data["isFirst"] = $data["paginations"][0]["active"] == true;
		$data["isLast"] = $data["paginations"][count($data["paginations"]) - 1]["active"] == true;

		$data["nextLink"] = $this->url->link('stories/list', '&page=' . ($page+1));
		$data["prevLink"] = $this->url->link('stories/list', '&page=' . ($page-1));


		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');



		$this->response->setOutput($this->load->view('stories/list', $data));
	}



	public function story() {
		

		$data = [];

		$this->load->model('stories/story');
		$this->load->model('tool/image');

		$resultBlocks = [];

		$story_id = $this->request->get['story_id'];

		

		
		$data["story"] = $this->model_stories_story->getStory($story_id);
		$data["content"] = $this->model_stories_story->loadStoryContent($story_id);
		





		$results = $this->model_stories_story->getStories();
		$data["nextStory"] = null;
		$isSearched = false;

		foreach ($results as $result) {
			$image = "";
			if($isSearched){
				$data["nextStory"] = [
					"title" => $result["title"],
					"date" => $result["added_date"],
					"thumb" => "image/" . $result['image'],
					'href'  => $this->url->link('stories/list/story', '&story_id=' . $result['story_id'] ),
					'thumb_video' => $result["video"],

				];
				break;
			}
			if($story_id == $result["story_id"]){
				$isSearched = true;
			}
			
		}
		if($data["nextStory"] == null){
			$result = $results[count($results) - 1];
			$data["nextStory"] = [
				"title" => $result["title"],
				"date" => $result["added_date"],
				"thumb" => "image/" . $result['image'],
				'href'  => $this->url->link('stories/list/story', '&story_id=' . $result['story_id'] ),
				'thumb_video' => $result["video"],

			]; 
		}











		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');



		$this->response->setOutput($this->load->view('stories/story', $data));
	}
}
