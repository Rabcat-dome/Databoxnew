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
			 	//-------pagination
 				$this->load->library('pagination');
 				$config['base_url']=base_url()."index.php/mainFunction/executive";
 				$config['per_page']=20;
 				$test=$config['per_page'];
 				$config['total_rows']=count($this->j3databox->get_Databox_num($test));

 				$config["full_tag_open"]="<div class='pagination'>";
 				$config["full_tag_close"]="</div>";
 				$this->pagination->initialize($config);

		 	//-------End  pagination

		        $data['not45'] = ""; 
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
				
 				
				$data['box'] = $this->j3databox->get_Databox($test);

				$data['not2'] = $this->input->post("select_disvisid");
				$data['not'] = $this->input->post("select_id_type");
				}

                if($select_to3!=""){ if($data_group==""){
			    $data['data_group_select'] = $this->j3databox->get_data_group_box();
				//$data['box'] = $this->j3databox->get_Databox_if();
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
				//$data['box'] = $this->j3databox->get_data_group_table();
                $data['not'] = $this->input->post("select_id_type");
			    $data1=$this->input->post("data_group");
				$data2 =$this->input->post("divis_id");
				$data['not2'] =  $data1."-".$data2;
				$data['data_group'] = $this->input->post("data_group");
				
				}
				
				$this->load->view('box',$data); 
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
			    $data_group = $this->input->post("data_group");
		        $select_id_type = $this->input->post("select_id_type");
				$select_id = $this->input->post("select_id");
				$select_disvisid = $this->input->post("select_disvisid");
				$group_Id =$this->input->post("group_Id");
			    $data['search'] = $this->j3databox->get_search();
		        $data['not'] = ""; 
				$data['not2'] = ""; 
				$data['divis_id_f'] = ""; 
				$data['group_Id_f'] = ""; 
				$data['id_box'] = $this->input->post("id_box");
			    $data['data_type'] = $this->j3databox->get_data_type();
			    $data['division_group'] = $this->j3databox->get_division_group();
				$data['last_update'] = $this->j3databox->get_last_update();
		        $this->load->view('databox_search',$data);
	}
		//---------------------------------------------------หน้า อัพโหล

	   public function page_upload()
     {          
			    $data['search'] = $this->j3databox->get_search();
		        $data['division'] = $this->j3databox->get_division();
				$data['data_type'] = $this->j3databox->get_data_type_up();
                $data['data_group_up'] = $this->j3databox->get_data_group_up();
                $data['data_type_up'] = $this->j3databox->get_data_type_up();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
              
     }
    	public function select()
	{           
			    $data['data_division'] = $this->j3databox->get_data_division();
			    $data['data_type_up'] = $this->j3databox->get_data_type_up();
				$data['division'] = $this->j3databox->get_division();
				$data['data_type'] = $this->j3databox->get_data_type_up();
                $data['data_group_up'] = $this->j3databox->get_data_group_up();
		        $this->load->view('select',$data);
	}
	 	public function test()
	{           //$data['Main_Nav_Query']  = mysql_query("SELECT  * FROM  databox_upload");
			    //$data['q'] = mysql_query("SELECT * FROM `databox_upload` ORDER BY `subject` ASC");
                $data['q'] = $this->j3databox->get_data_box_detail1();
			
		        $this->load->view('test',$data);
	}

	 public function save()
     {          
			    $check = $this->input->post("check");
				$databox_id = $this->input->post("databox_save");
			    $databox_data=array(
				"subject"=> $this->input->post("subject_save"),
				"databox_search"=>$this->input->post("databox_search_text_save"),
				);
				
				 
				if($check!="save"){
				$this->db->where('databox_id', $databox_id);
				$this->db->delete('databox_upload'); 
			
				}
					
				if($check=="save"){
			    $this->db->where('databox_id', $databox_id);
			    $this->db->update('databox_upload', $databox_data); 
		
				 }
			    $data['division'] = $this->j3databox->get_division();
				$data['data_type'] = $this->j3databox->get_data_type_up();
                $data['data_group_up'] = $this->j3databox->get_data_group_up();
                $data['data_type_up'] = $this->j3databox->get_data_type_up();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว

     }
    
	function save_upload() {
	   
		$subject = $this->input->post("subject");
		$re_name =    date("Y-m-d")."-".$subject+"-ผธก";
		$name_array = array();
		$count = count($_FILES['userfile']['size']);
		foreach($_FILES as $key=>$value)
		for($s=0; $s<=$count-1; $s++) {
		$_FILES['userfile']['name']=$value['name'][$s];
		$_FILES['userfile']['type']    = $value['type'][$s];
		$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
		$_FILES['userfile']['error']       = $value['error'][$s];
		$_FILES['userfile']['size']    = $value['size'][$s];   
		$config['file_name'] = $re_name;
		$config['upload_path'] = 'application/uploads/';
	    $config['allowed_types'] = 'pdf|jpeg|jpg|png|doc|docx|avi|mp4';
		$config['max_size']	= '1000';
		$config['max_width']  = '102400';
		$config['max_height']  = '76800';
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$data = $this->upload->data();
		$name_array[] = $data['file_name'];
			}
	     $names= implode(',', $name_array);
         
    	 $pdf=   $name_array[0];
		 $word=   $name_array[1];
			$menu_second = $this->input->post("menu_second");
				if($menu_second==""){
					 $now =  date("Y-m-d"); 
                   
         $add_classified=array(
			    "subject"=>$this->input->post("subject"),
			    "databox_search"=>$this->input->post("search"),
                "databox_detail"=>$this->input->post("databox_detail"),
			    "date_upload"=> $now,
		        "upload_urlpdf"=> $pdf,	  
		        "uploaded_url"=> $word,
			    "group_Id"=> $this->input->post("group_Id"),
				);
			    $this->db->insert('databox_upload',$add_classified);
			}
			if($menu_second!=""){
				$data_group_id = $this->input->post("data_group_id");
				$data_group_id_ex = explode("-", $data_group_id);
				
               if($data_group_id_ex[1]=="data_type"){ $data_group=array(    "groupname"=>$this->input->post("menu_second"), "dataId"=>$data_group_id_ex[2],);
			     $this->db->insert('data_group',$data_group);};
			   if($data_group_id_ex[1]=="division"){ $data_group=array(      "groupname"=>$this->input->post("menu_second"), "divisId"=>$data_group_id_ex[0],);
			       $this->db->insert('data_group',$data_group);};
			}
			    $data['search'] = $this->j3databox->get_search();
		        $data['division'] = $this->j3databox->get_division();
				$data['data_type'] = $this->j3databox->get_data_type_up();
                $data['data_group_up'] = $this->j3databox->get_data_group_up();
                $data['data_type_up'] = $this->j3databox->get_data_type_up();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
	}

	
	
		

}
