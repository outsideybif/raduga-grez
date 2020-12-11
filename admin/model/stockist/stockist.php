<?php
class ModelStockistStockist extends Model {
	public function getStockist($stockis_id) {
		$query = $this->db->query("SELECT * FROM oc_stockis_item WHERE stockis_item_id = " . $stockis_id);
		
		return $query->row;
	}
	public function getStockists($data = null) {
		if($data == null){
			$query = $this->db->query("SELECT * FROM oc_stockis_item order by stockis_item_id desc");
		} else {
			$query = $this->db->query("SELECT * FROM oc_stockis_item order by stockis_item_id desc LIMIT " . $data["limit"] . " OFFSET " . $data["limit"] * $data["page"] );
		}
		
		return $query->rows;
	}

	public function getStockistCountries() {
		$query = $this->db->query("SELECT * FROM oc_stockist_country");
		return $query->rows;
	}

	public function getStockistsCount() {
		$query = $this->db->query("SELECT COUNT(*) as count FROM oc_stockis_item");
		return $query->row["count"];
	}

	public function removeStockist($stockis_id) {
		$query = $this->db->query("DELETE FROM oc_stockis_item WHERE (`stockis_item_id` = '" . $stockis_id . "');");
	}


	public function addStockist($data) {
		$query = $this->db->query("INSERT INTO oc_stockis_item (`stockis_country_id`, `name`, `link`) VALUES ('" . $data["stockis_country_id"] . "', '" . $data["name"] . "', '" . $this->removeProtocol($data["link"]) . "');");
	}

	public function editStockist($stockis_id, $data) {
		$query = $this->db->query("UPDATE oc_stockis_item SET `stockis_country_id` = '" . $data["stockis_country_id"] . "', `name` = '" . $data["name"] . "', `link` = '" . $this->removeProtocol($data["link"]) . "' WHERE (`stockis_item_id` = '" . $stockis_id . "');");
	}


	public function removeProtocol($url){
		$remove = array("http://","https://");
		return str_replace($remove,"",$url);
	}


	
    
}