<?php
	class Blogmodel extends CI_Model {
	 
	    function __construct()
	    {
	        parent::__construct();
	        $this->load->database();
	    }
		function get_blog($a)
		{
			$query = $this->db->get('addlinkc', 10);
			$query1 = $this->db->query('select * from addlinkc limit 0,'.$a.'');
			return $query->result();
		}
		function get_blog1()
		{
			$a="Pham Van At";
			return $a;
		}
	}
?>