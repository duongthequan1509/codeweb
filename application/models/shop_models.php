<?php
    class Shop_models extends CI_Model{
        protected $table='product';
		function __construct(){
            $this->load->database(); 
		}
		function check($u,$p){
        $this->db->where("name",$u);
        $this->db->where("password",$p);
        $result=$this->db->get('user');
        $checkdata=$result->row_array();
        return $checkdata;  
   		}
		function insert_data($data1){
			$this->db->insert($this->table,$data1);   
        } 
	}
?>