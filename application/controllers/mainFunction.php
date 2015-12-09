<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class mainFunction extends CI_Controller {

    	public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('date');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
		  $this->load->model('j3databox');
     

     }
	  	public function post_receiver()
	{
           
		    $this->load->view('post_receiver');
	}
	//---------------------------------------------------- หน้าแรก
	 	public function index()
	{
		
	        $data['last_update'] = $this->j3databox->get_Last_Update();
	        $data['unit'] =  $this->j3databox->get_unit();
			$data['search'] = $this->j3databox->get_search();
		    $this->load->view('home',$data);
	}
    //---------------------------------------------------- ภารกิจ
   
		public function executive()
	{    
			
		        $data['not'] = ""; 
				$data['not2'] = ""; 
				$data['divis_id_f'] = ""; 
				$data['group_Id_f'] = ""; 
				$data_group = $this->input->post("data_group");
		        $select_id_type = $this->input->post("select_id_type");
				$select_id = $this->input->post("select_id");
				$select_disvisid = $this->input->post("select_disvisid");
				$group_Id =$this->input->post("group_Id");
				$select_to1 = $select_disvisid+$select_id_type;
				$select_to2 = $select_to1 + $select_id;
				$select_to3 = $select_to2 + $group_Id;
                $data['data_group'] = $this->j3databox->get_data_group();
				 $data['division_by'] = $this->j3databox->get_division_by();
			    $data['data_type'] = $this->j3databox->get_data_type();
			    $data['division_group'] = $this->j3databox->get_division_group_division();
				if($select_to3==""){
				
				$data['box'] = $this->j3databox->get_Databox();
				$data['not2'] = $this->input->post("select_disvisid");
				$data['not'] = $this->input->post("select_id_type");
				}

                if($select_to3!=""){ if($data_group==""){
			    $data['data_group_select'] = $this->j3databox->get_data_group_box();
				$data['box'] = $this->j3databox->get_Databox_if();
                $data['not'] = $this->input->post("select_id_type");
				$data['not2'] = $this->input->post("select_disvisid");
				$data_ck= $this->input->post("select_id_type");
			
				$coll = $this->input->post("select_disvisid");
				$coll = explode("-", $coll); 
                $data['group_Id_f'] =$coll[0];
				$data['divis_id_f'] =$coll[1];
				}
	            }

				if($data_group!=""){ 
				$data['box'] = $this->j3databox->get_data_group_table();
                $data['not'] = $this->input->post("select_id_type");
			    $data1=$this->input->post("data_group");
				$data2 =$this->input->post("divis_id");
				$data['not2'] =  $data1."-".$data2;
				$data['data_group'] = $this->input->post("data_group");
				
				}
				
				$this->load->view('box',$data); 
	}
	//---------------------------------------------------หน้า อัพโหล

	   public function page_upload()
     {          
	
            
		        $data['division'] = $this->j3databox->get_division();
				$data['data_type'] = $this->j3databox->get_data_type_up();
                $data['data_group_up'] = $this->j3databox->get_data_group_up();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
              
     }
  
	   public function box_detail()
     {
		   $data['box_detail'] = $this->j3databox->get_data_box_detail();
		   $this->load->view('box_detail',$data); 
	 }
	//-------------------------------------------------------- แสดงข้อมูลจากค้นหา แบบข้อมูลเดียว
		public function data_detail()
	{

				//$data['menu'] = $this->j3databox->get_menu();
							
				$this->load->view('data_detail');
	}
	//--------------------------------------------------------- แสดงข้อมูลจากค้นหา แบบหลายข้อมูล
	 	public function databox_search()
	{
			    $data['data_type'] = $this->j3databox->get_data_type();
			    $data['division_group'] = $this->j3databox->get_division_group();
				$data['last_update'] = $this->j3databox->get_Last_Update();
		        $this->load->view('databox_search',$data);
	}
    
	 	public function select()
	{
				$data['division'] = $this->j3databox->get_division();
				$data['data_type'] = $this->j3databox->get_data_type_up();
                $data['data_group_up'] = $this->j3databox->get_data_group_up();
				$data['upload'] = $this->j3databox->get_upload();
		        $this->load->view('select',$data);
	}

    


	 



	



	 				




}
