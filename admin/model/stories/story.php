<?php
class ModelStoriesStory extends Model {

	
	public function addStory($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "stories (`category_id`, `title`, `image`, `link`) VALUES ('" . (int)$data['category_id'] . "', '" . $data['title'] . "', '" . $data['image'] . "', '" . $data['link'] . "');");
		
		$story_id = $this->db->getLastId();

		$this->cache->delete('stories');

		return $story_id;
	}

	public function editStory($story_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "stories SET category_id = '" . (int)$data['category_id'] . "', title = '" . $data['title']  . 
		"', author_photo = '" . $data['author_photo']  .
		"', author_style = '" . $data['author_style']  .
		"', author_video = '" . $data['author_video']  .
		"', image = '" . $data['image']  . "', title_color = '" . $data['title_color']  . "', link = '" . $data['link'] ."' WHERE story_id = " . $story_id);

		$this->cache->delete('information');
	}

	public function deleteStory($story_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "stories` WHERE story_id = '" . (int)$story_id . "'");

		$this->cache->delete('information');
	}

	public function getStory($story_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "stories WHERE story_id = '" . (int)$story_id . "'");

		return $query->row;
	}

	public function getStories($data = array()) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "stories" . " order by story_id desc ");

		return $query->rows;
	}

	public function getTotalStories() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "stories");

		return $query->row['total'];
	}

	public function loadCustomBlocks(){
		$query = $this->db->query("SELECT * FROM oc_custom_block_template");
		return $query->rows;
	}

	public function addBlockToStory($story_id, $block_id){
		$query = $this->db->query("INSERT INTO `raduga-grez`.`oc_custom_block` (`custom_block_template_id`, `story_id`) VALUES ('".$block_id."', '".$story_id."');");
		$added_block_id = $this->db->getLastId();
		
		$query = $this->db->query("SELECT * FROM oc_custom_block_template_variables WHERE custom_block_template_id = " . $block_id);
		$templateVariables = $query->rows;

		foreach ($templateVariables as $variables) {
			$query = $this->db->query("INSERT INTO `raduga-grez`.`oc_custom_variable_value` (`value`, `custom_block_template_variables_id`, `custom_block_id`) VALUES ('', '".$variables["custom_block_template_variables_id"]."', '".$added_block_id."');");
		}

		return $this->loadStoryVariable($added_block_id);


	}
	public function removeBlockToStory($block_id){
		$query = $this->db->query("DELETE FROM `raduga-grez`.`oc_custom_block` WHERE (`custom_block_id` = '".$block_id."')");
		
		

	}


	public function loadStoryContent($story_id){
		

		
		$resultBlocks = [];

		$query = $this->db->query("SELECT custom_block_id, template, cbt.custom_block_template_id FROM oc_custom_block cb INNER JOIN oc_custom_block_template cbt ON cb.custom_block_template_id = cbt.custom_block_template_id WHERE cb.story_id = " . $story_id);
		$blocks = $query->rows;
		//return $blocks;

		foreach ($blocks as $block) {
			$query = $this->db->query("SELECT cbtv.key, cvc.value, cbtv.custom_variable_type_id FROM `raduga-grez`.oc_custom_variable_value cvc INNER JOIN oc_custom_block_template_variables cbtv on cvc.custom_block_template_variables_id = cbtv.custom_block_template_variables_id WHERE cbtv.custom_block_template_id = " . $block["custom_block_template_id"] . " AND cvc.custom_block_id = " . $block["custom_block_id"] );

			$variables = $query->rows;
			$content = $block["template"];
			

			$resultBlocks[] = [
				"content" => $content
			];
		}


		return $resultBlocks;
	}
	public function loadStoryVariables($story_id){
		$resultBlocks = [];

		$query = $this->db->query("SELECT cbt.name, custom_block_id, cbt.custom_block_template_id FROM oc_custom_block cb INNER JOIN oc_custom_block_template cbt ON cb.custom_block_template_id = cbt.custom_block_template_id WHERE cb.story_id = " . $story_id);
		$blocks = $query->rows;
		//return $blocks;

		foreach ($blocks as &$block) {
			$query = $this->db->query("SELECT cvc.custom_variable_value_id, cbtv.key, cvc.value, cbtv.custom_variable_type_id, cbtv.name FROM `raduga-grez`.oc_custom_variable_value cvc INNER JOIN oc_custom_block_template_variables cbtv on cvc.custom_block_template_variables_id = cbtv.custom_block_template_variables_id WHERE cbtv.custom_block_template_id = " . $block["custom_block_template_id"] . " AND cvc.custom_block_id = " . $block["custom_block_id"] );
			$variables = $query->rows;
			
			$block["variables"] = $variables;
		}
		return $blocks;
	}

	public function loadStoryVariable($block_id){
		$resultBlocks = [];

		$query = $this->db->query("SELECT cbt.name, custom_block_id, cbt.custom_block_template_id FROM oc_custom_block cb INNER JOIN oc_custom_block_template cbt ON cb.custom_block_template_id = cbt.custom_block_template_id WHERE cb.custom_block_id = " . $block_id);
		$block = $query->row;
		//return $blocks;

		
		$query = $this->db->query("SELECT cvc.custom_variable_value_id, cbtv.key, cvc.value, cbtv.custom_variable_type_id, cbtv.name FROM `raduga-grez`.oc_custom_variable_value cvc INNER JOIN oc_custom_block_template_variables cbtv on cvc.custom_block_template_variables_id = cbtv.custom_block_template_variables_id WHERE cbtv.custom_block_template_id = " . $block["custom_block_template_id"] . " AND cvc.custom_block_id = " . $block["custom_block_id"] );
		$variables = $query->rows;
		
		$block["variables"] = $variables;
		return $block;
	}


	public function EditCustomVariables($data){

		

		foreach ($data as $keyVariable => $variable) {
			$query = $this->db->query("UPDATE `raduga-grez`.`oc_custom_variable_value` SET `value` = '" . $variable . "' WHERE (`custom_variable_value_id` = '".$keyVariable."');");
		}
	}

}