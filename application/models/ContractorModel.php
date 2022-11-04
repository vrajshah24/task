<?php
class ContractorModel extends CI_Model
{
    function contractor_insert($data){
        $this->db->insert("contractor",$data);
        $Id = $this->db->insert_id();
        return $Id;
    }
    function fetch_contractor(){
        $query = $this->db
                ->get('contractor')->result();
        return $query;
    }
}