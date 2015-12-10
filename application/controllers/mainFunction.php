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
	//---------------------------------------------------- ˹���á
	 	public function index()
	{
		
	        $data['last_update'] = $this->j3databox->get_Last_Update();
	        $data['unit'] =  $this->j3databox->get_unit();
			$data['search'] = $this->j3databox->get_search();
		    $this->load->view('home',$data);
	}
    //---------------------------------------------------- ��áԨ
   
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
	//---------------------------------------------------˹�� �Ѿ���

	   public function page_upload()
     {          
	
            
		        $data['division'] = $this->j3databox->get_division();
				$data['data_type'] = $this->j3databox->get_data_type_up();
                $data['data_group_up'] = $this->j3databox->get_data_group_up();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // �Դ˹�� upload ���ͷ�� ���ҧ˹����� ��Ǥ���
              
     }
  
	   public function box_detail()
     {
		   $data['box_detail'] = $this->j3databox->get_data_box_detail();
		   $this->load->view('box_detail',$data); 
	 }
	//-------------------------------------------------------- �ʴ������Ũҡ���� Ẻ����������
		public function data_detail()
	{
				//$data['menu'] = $this->j3databox->get_menu();	
				$this->load->view('data_detail');
	}
	//--------------------------------------------------------- �ʴ������Ũҡ���� Ẻ���¢�����
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
		        $this->load->view('select',$data);
	}
    
		public function save_upload1()
	{			
			    
		$config['upload_path'] = 'application/uploads/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf';
		$config['max_size']	= '1000';
		$config['max_width']  = '102400';
		$config['max_height']  = '76800';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			//$data['menu_classified_sub'] = $this->j3databox->get_classified_sub();
		//	$data['upload_menu_sub'] = $this->j3databox->get_menu_sub();
		//	$data['upload_menu_type'] = $this->j3databox->get_upload_menu_type();
	//		$data['upload_menu'] = $this->j3databox->get_upload_menu();
			$data['upload'] = $this->j3databox->get_upload();
            $this->load->view('page_upload',$data);  // �Դ˹�� upload ���ͷ�� ���ҧ˹����� ��Ǥ���
             
			
		}
		else
		{
		//	$data = array('upload_data' => $this->upload->data());
            //	$data['menu_classified_sub'] = $this->j3databox->get_classified_sub();
			 //   $data['upload_menu_sub'] = $this->j3databox->get_menu_sub();
		//		$data['upload_menu_type'] = $this->j3databox->get_upload_menu_type();
	//			$data['upload_menu'] = $this->j3databox->get_upload_menu();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // �Դ˹�� upload ���ͷ�� ���ҧ˹����� ��Ǥ���
			
		}
	            $add_classified=array(
			    "subject"=>$this->input->post("subject"),
                "group_Id"=>$this->input->post("group_Id"),
				);
			    $this->db->insert('databox_upload',$add_classified);

				   $data['division'] = $this->j3databox->get_division();
				$data['data_type'] = $this->j3databox->get_data_type_up();
                $data['data_group_up'] = $this->j3databox->get_data_group_up();
				$data['upload'] = $this->j3databox->get_upload();
                $this->load->view('page_upload',$data);  // �Դ˹�� upload ���ͷ�� ���ҧ˹����� ��Ǥ���
	}

	function save_upload() {
		$name_array = array();
		$count = count($_FILES['userfile1']['size']);
		foreach($_FILES as $key=>$value)
		for($s=0; $s<=$count-1; $s++) {
		$_FILES['userfile']['name']=$value['name'][$s];
		$_FILES['userfile']['type']    = $value['type'][$s];
		$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
		$_FILES['userfile']['error']       = $value['error'][$s];
		$_FILES['userfile']['size']    = $value['size'][$s];   
		    $config['upload_path'] = 'application/uploads/';
				$config['allowed_types'] = 'jpg|jpeg|png|pdf';
				$config['max_size']	= '1000';
		$config['max_width']  = '102400';
		$config['max_height']  = '76800';
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$data = $this->upload->data();
		$name_array[] = $data['file_name'];
			}

			$names= implode(',', $name_array);
/*			$this->load->database();
			$db_data = array('id'=> NULL,
							 'name'=> $names);
		$this->db->insert('testtable',$db_data);
*/			print_r($names);


	$name_array1 = array();
		$count1 = count($_FILES['userfile2']['size']);
		foreach($_FILES as $key=>$value1)
		for($s=0; $s<=$count1-1; $s++) {
		$_FILES['userfile']['name']=$value1['name'][$s];
		$_FILES['userfile']['type']    = $value1['type'][$s];
		$_FILES['userfile']['tmp_name'] = $value1['tmp_name'][$s];
		$_FILES['userfile']['error']       = $value1['error'][$s];
		$_FILES['userfile']['size']    = $value1['size'][$s];   
		    $config1['upload_path'] = 'application/uploads/';
				$config1['allowed_types'] = 'jpg|jpeg|png|pdf';
				$config1['max_size']	= '1000';
		$config1['max_width']  = '102400';
		$config1['max_height']  = '76800';
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$data = $this->upload->data();
		$name_array[] = $data['file_name'];
			}

			$names= implode(',', $name_array);
/*			$this->load->database();
			$db_data = array('id'=> NULL,
							 'name'=> $names);
		$this->db->insert('testtable',$db_data);
*/			print_r($names);

	}
		

    


	 



	



	 				




}
