<?php
class ModelStoriesStory extends Model {
	public function getStory($story_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "stories WHERE story_id = " . $story_id);
		
		return $query->row;
	}
	public function getStories($data = null) {
		if($data == null){
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "stories order by story_id desc ");
		} else {
			$query = $this->db->query("SELECT * FROM oc_stories  order by story_id desc LIMIT " . $data["limit"] . " OFFSET " . $data["limit"] * $data["page"]);
		}
		
		return $query->rows;
	}

	public function getStoriesCount() {
		$query = $this->db->query("SELECT COUNT(*) as count FROM " . DB_PREFIX . "stories");
		return $query->row["count"];
	}


	public function removeStory($story_id) {
		$query = $this->db->query("DELETE FROM oc_stories WHERE (`story_id` = '" . $story_id . "');");
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
			foreach ($variables as $variable) {
				
				foreach ($variables as $variable) {
					$regExValue = '/{{'. $variable["key"] .'}}/';
					if( $variable["custom_variable_type_id"] == 1 ){
						$content = preg_replace($regExValue, $variable["value"], $content);
					}
					if( $variable["custom_variable_type_id"] == 2 ){
						$content = preg_replace($regExValue, "./image/" . $variable["value"], $content);
					}
					
				}
				
			}

			$resultBlocks[] = [
				"content" => $content
			];
		}


		return $resultBlocks;
	}
    
}