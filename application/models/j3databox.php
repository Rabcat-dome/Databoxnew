<?php
Class j3databox extends CI_Model
{
  function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }
//------ที่เพิ่มใหม่    นับจำนวนเอกสารแต่ละกอง
     function get_num_box($groupID){
                $this->db->select('*')->from('databox_upload')
                ->where('group_id',$groupID);
                return $this->db->count_all_results();}
     function get_num_box_week($groupID){
                $this->db->select('*')->from('databox_upload')
                ->where('group_id',$groupID)
                ->where('date_upload >',mdate("%Y-%m-%d",strtotime("-8 days")));
                return $this->db->count_all_results();}
//------------------------------------------ ค้นหาข้อมูล
      function get_search()
     {
     		$this->db->select('*')->select('databox_upload.group_Id')->from('databox_upload')
                ->join('data_group', 'data_group.group_Id = databox_upload.group_Id', 'LEFT')
				->join('division', 'division.group_Id = data_group.group_Id', 'LEFT')
			    ->limit(15, 0);
			   $query = $this->db->get();
		       return $query->result_array();	
     }
//---------------------------------------- หน้าแรก
	 function get_Last_Update()  
     {
		  $this->db->select('*')->select('databox_upload.group_Id')->from('databox_upload')
          ->join('data_group', 'data_group.group_Id = databox_upload.group_Id', 'LEFT')
		  ->join('division', 'division.group_Id = data_group.group_Id', 'LEFT');
	      $query = $this->db->get();
		  return $query->result_array();	
     }
	 function get_unit()
     {
     	 $sql = "SELECT  * FROM `division` GROUP by  `short_division`";
         $query = $this->db->query($sql);
         return $query->result_array();	
     }

//---------------------------------------- จบหน้าแรก


//---------------------------------------- หน้าภารกิจ

        function get_data_group()
     {  
          $this->db->select('*')->from('data_group');
          $query = $this->db->get();
		  return $query->result_array();
     }
	  function get_data_type() 
    {
	    $sql = "SELECT  * FROM data_type";
        $query = $this->db->query($sql);
        return $query->result_array();	
    }
	    function get_division_group()
     {
		$sql = "SELECT  * FROM  `division_group`";
		$query = $this->db->query($sql);
        return $query->result_array();	
     }
    
	  function get_division_group_division()
     {
	 	$this->db->select('*')->select('')->from('division_group')
             ->join('division', 'division.group_Id = division_group.group_Id', 'LEFT');
			 //->group_by('division_group.group_Id');
		     $query = $this->db->get();
		     return $query->result_array();
	 }
	   function get_division_by()
     {
	  $sql = "SELECT * FROM `division_group` LEFT JOIN `division` ON `division`.`group_Id` = `division_group`.`group_Id` GROUP BY `division_group`.`group_Id`";
	   $query = $this->db->query($sql);
        return $query->result_array();	
	 }
      function get_data_group_box()
     {
		$select_disvisid= $this->input->post("select_disvisid");
        $select_disvisid_ex = explode("-",$select_disvisid);
		$data_group= $this->input->post("data_group");
        $this->db->select('*')->select('databox_upload.division_id')->from('databox_upload')
			    ->join('data_group', 'data_group.group_Id = databox_upload.group_Id', 'LEFT')
                ->join('division', 'data_group.divisId = division.divisId', 'LEFT')
				->join('division_group', 'division_group.group_Id = division.group_Id', 'LEFT');
			$this->db->like('division_group.group_Id',  $select_disvisid_ex[0], 'none'); 
			$this->db->like('division.divisId',$select_disvisid_ex[1]);
			$query = $this->db->get();
		    return $query->result_array();
	 }
	  function get_data_group_table()
     {
		$data_group= $this->input->post("data_group");
		$divis_id= $this->input->post("divis_id");
		$data_group= $this->input->post("data_group");
		$data_group= $this->input->post("data_group");
        $this->db->select('*')->select('databox_upload.division_id')->from('databox_upload')
			    ->join('data_group', 'data_group.group_Id = databox_upload.group_Id', 'LEFT')
                ->join('division', 'data_group.divisId = division.divisId', 'LEFT')
				->join('division_group', 'division_group.group_Id = division.group_Id', 'LEFT');
			$this->db->like('division_group.group_Id',  $data_group, 'none'); 
			$this->db->like('databox_upload.division_id',$divis_id);
			$this->db->like('databox_upload.group_Id',$data_group);
			$query = $this->db->get();
		    return $query->result_array();
	 }


 function get_Databox_if()
     {
		 $group_Id= $this->input->post("group_Id");
		 $select_id = $this->input->post("select_id");
	 	 $select_id_type = $this->input->post("select_id_type");
		 $select_disvisid= $this->input->post("select_disvisid");
         $select_disvisid_ex = explode("-",$select_disvisid);
      	if( $select_id_type=="")
		 {
			$this->db->select('*')->select('databox_upload.division_id')->from('databox_upload')
                ->join('division', 'division.divisId = databox_upload.division_id', 'LEFT')
				->join('division_group', 'division_group.group_Id = division.group_Id', 'LEFT');
			$this->db->like('division_group.group_Id',  $select_disvisid_ex[0], 'none'); 
			//$this->db->like('division.divisId',  $select_disvisid_ex[1],'none'); 
			$this->db->like('division.divisId',$select_disvisid_ex[1]);
		 }
	   	if( $select_id_type!="")
		 {
			$this->db->select('*')->select('databox_upload.group_Id')->from('databox_upload')
                ->join('data_group', 'data_group.group_Id = databox_upload.group_Id', 'LEFT')
				->join('data_type', 'data_type.type_id = data_group.dataId', 'LEFT');
			$this->db->where('data_type.type_id ',  $select_id_type);
		  }
			$query = $this->db->get();
		    return $query->result_array();
     }


	  function get_Databox()
     {
	            $this->db->select('*')->select('databox_upload.group_Id')->from('databox_upload')
                ->join('data_group', 'data_group.group_Id = databox_upload.group_Id', 'LEFT')
				->join('division', 'division.group_Id = data_group.group_Id', 'LEFT');
			   $query = $this->db->get();
		       return $query->result_array();
     }
	  function get_data_box_detail()
     {     
		   $data1= $this->input->post("data1");
		   $this->db->select('*')->select('databox_upload.group_Id')->from('databox_upload')
          ->join('data_group', 'data_group.group_Id = databox_upload.group_Id', 'LEFT')
		  ->join('division', 'division.group_Id = data_group.group_Id', 'LEFT');
		   $this->db->where('databox_upload.databox_id ',  $data1);
	      $query = $this->db->get();
		  return $query->result_array();	
     }




//----------------------------------------จบหน้าภารกิจ

//-----------------------------------------หน้าอัพโหด

	    function get_division_group_re()
     {
		$sql = "SELECT  * FROM  `division_group`";
		$query = $this->db->query($sql);
        return $query->result_array();	
     }
	    function get_upload()
     {
     	$sql = "SELECT  * FROM `databox_upload`   order  by `databox_id` ASC LIMIT 10 , 13 ";
        $query = $this->db->query($sql);
        return $query->result_array();	
     }

//----------------------------------------- หน้าแสดงข้อมูลหลังจากค้นหา
//----------------------------------------จบหน้าภารกิจ

//-----------------------------------------หน้าอัพโหด


        function get_data_group_up()
     {
		$sql = "SELECT  * FROM  data_group";
		$query = $this->db->query($sql);
        return $query->result_array();	
     }

	    function get_division_group_up()
     {
		$sql = "SELECT  * FROM  division_group";
		$query = $this->db->query($sql);
        return $query->result_array();	
     }
	   function get_division()
     {
		$sql = "SELECT * FROM division";
		$query = $this->db->query($sql);
        return $query->result_array();	
     }
	    function get_upload()
     {
     	$sql = "SELECT  * FROM databox_upload   order  by databox_id ASC LIMIT 10 , 13 ";
        $query = $this->db->query($sql);
        return $query->result_array();	
     }
	 	  function get_data_type_up() 
    {
	    $sql = "SELECT  * FROM data_type";
        $query = $this->db->query($sql);
        return $query->result_array();	
    }

//----------------------------------------- หน้าแสดงข้อมูลหลังจากค้นหา





    

}
	 
?>
