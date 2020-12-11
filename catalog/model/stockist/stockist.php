<?php
class ModelStockistStockist extends Model {
	public function getStockist($stockis_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oc_stockis_item WHERE stockis_item_id = " . $stockis_id);
		
		return $query->row;
	}
	public function getStockists($data = null) {
		if($data == null){
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "oc_stockis_item");
		} else {
			$query = $this->db->query("SELECT * FROM oc_stockis_item LIMIT " . $data["limit"] . " OFFSET " . $data["limit"] * $data["page"]);
		}
		
		return $query->rows;
	}

	public function getStockistsCount() {
		$query = $this->db->query("SELECT COUNT(*) as count FROM " . DB_PREFIX . "oc_stockis_item");
		return $query->row["count"];
	}


	
    
}