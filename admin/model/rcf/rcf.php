<?php
class ModelRcfRcf extends Model {
    
    public function getFields($page_id) {

        $queryBlocks = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_page_block WHERE page_id = " . $page_id . " ORDER BY priority desc");
        $blocks = $queryBlocks->rows;

        $result = [];

        

        foreach ($blocks as $block) {
            $queryFields = $this->db->query("SELECT * FROM " . DB_PREFIX . "custom_page_field WHERE custom_page_block_id = " . $block["custom_block_id"] . " ORDER BY priority desc");

            $fields = $queryFields->rows;

            $fieldsBlocks = [];
            foreach ($fields as $field) {
                $fieldsBlocks[$field["custom_page_field_id"]] = $field;
            }

            $result[$block["custom_block_id"]] = [
                'custom_block_id' => $block["custom_block_id"],
                'page_id' => $block["page_id"],
                'name' => $block["name"],
                'fields' => $fieldsBlocks
            ];
        }

        return $result;
        
        
    }
    
    public function editField($field_id, $value){
        $sql = "UPDATE " . DB_PREFIX . "custom_page_field SET `value` = '" . $value . "' WHERE (`custom_page_field_id` = '" . $field_id . "');";
        $queryBlocks = $this->db->query($sql);

    }
}
