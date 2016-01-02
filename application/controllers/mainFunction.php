<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mainFunction extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('j3databox');
        $this->load->library('Auth_AD');
    }

    public function post_receiver() {

        $this->load->view('post_receiver');
    }

  public function index() {

        $username = strtolower($this->input->post('txt_username'));
        $password = $this->input->post('txt_password');
        
        // check the login
        if($this->auth_ad->login($username, $password))
        { 


            if ($this->auth_ad->in_group($username, "j3databox-secret"))
            {
            $sessiondata = array('secret' => 2);    //ผู้บังคับบัญชา  เข้าถึงชั้นความลับได้
            $this->session->set_userdata($sessiondata);
            redirect('mainFunction/executive');

            }
            else if ($this->auth_ad->in_group($username, "j3databox-upload"))
            {
            $sessiondata = array('secret' => 1);   //เสมียนอัพโหดล
            $this->session->set_userdata($sessiondata);
            redirect('mainFunction/executive');
            }
            else 
            {
            $sessiondata = array('secret' => 0);  //คนทั่วไป
            $this->session->set_userdata($sessiondata);
            redirect('mainFunction/executive');

            }


        /*$sessiondata = array(
                              'id' => $usr_row->id,
                              'username' => $usr_row->username,
                              'password' => $usr_row->password,
                              'access' => $usr_row->access,
                              'name' => $usr_row->name,
                              'acroname' => $usr_row->acroname,
                              'nameID' => $usr_row->nameID,
                              'section' => $usr_row->section
                         );*/          
            // the login was succesful, do your thing here
            // upon a succesful login the session will automagically contain some handy user data:
            // $this->session->userdata('cn') contains the common name from the AD
            // $this->session->userdata('username') contains the username as processed
            // $this->session->userdata('dn') contains the distinguished name from the AD
            // $this->session->userdata('logged_in') contains a boolean (true)
        }
        else
        {
            $this->load->view('login');
        }
            

        //$this->load->view('login', $data);
    }

    //---------------------------------------------------- หน้าแรก
    /*public function index() {
        //-------pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "index.php/mainFunction/executive";
        $config['per_page'] = 20;
        $test = $config['per_page'];
        $config['total_rows'] = count($this->j3databox->get_Databox_num($test));
        $data['search'] = $this->j3databox->get_search();
        $config["full_tag_open"] = "<div class='pagination'>";
        $config["full_tag_close"] = "</div>";
        $this->pagination->initialize($config);

        //-------End  pagination
        $data['unit'] = $this->j3databox->get_unit();
        $data['not45'] = "";
        $data['not2'] = "";
        $data['divis_id_f'] = "";
        $data['group_Id_f'] = "";
        $data_group = $this->input->post("data_group");
        $select_id_type = $this->input->post("select_id_type");
        $select_id = $this->input->post("select_id");
        $select_disvisid = $this->input->post("select_disvisid");
        $group_Id = $this->input->post("group_Id");
        $select_to1 = $select_disvisid + $select_id_type;
        $select_to2 = $select_to1 + $select_id;
        $select_to3 = $select_to2 + $group_Id;
        $data['data_group'] = $this->j3databox->get_data_group();
        $data['division_by'] = $this->j3databox->get_division_by();
        $data['data_type'] = $this->j3databox->get_data_type();
        $data['data_type_ms'] = $this->j3databox->get_data_type_ms();
        $data['division_group'] = $this->j3databox->get_division_group_division();
        if ($select_to3 == "") {
            $data['box'] = $this->j3databox->get_Databox($test);
            $data['not2'] = $this->input->post("select_disvisid");
            $data['not'] = $this->input->post("select_id_type");
        }
        if ($select_to3 != "") {
            if ($data_group == "") {
                $data['data_group_select'] = $this->j3databox->get_data_group_box();
                $data['box'] = $this->j3databox->get_Databox_if();
                $data['not'] = $this->input->post("select_id_type");
                $data['not2'] = $this->input->post("select_disvisid");
                $data_ck = $this->input->post("select_id_type");
                $coll = $this->input->post("select_disvisid");
                $coll = explode("-", $coll);
                $data['group_Id_f'] = $coll[0];
                $data['divis_id_f'] = $coll[1];
            }
        }
        if ($data_group != "") {
            $data['box'] = $this->j3databox->get_data_group_table();
            $data['not'] = $this->input->post("select_id_type");
            $data1 = $this->input->post("data_group");
            $data2 = $this->input->post("divis_id");
            $data3 = $this->input->post("divis_id");
            $data['not2'] = $data1 . "-" . $data2;
            $data['data_group'] = $this->input->post("data_group");
        }
        $this->load->view('box', $data);
    }*/

    //---------------------------------------------------- ภารกิจ

    public function executive() {

      //  if ($this->auth_ad->is_authenticated()) {

            //-------pagination
            $this->load->library('pagination');
            $config['base_url'] = base_url() . "index.php/mainFunction/executive";
            $config['per_page'] = 20;
            $test = $config['per_page'];
            $config['total_rows'] = count($this->j3databox->get_Databox_num($test));
            $config["full_tag_open"] = "<div class='pagination'>";
            $config["full_tag_close"] = "</div>";
            $this->pagination->initialize($config);

            //-------End  pagination
            $data['unit'] = $this->j3databox->get_unit();
            $data['not45'] = "";
            $data['not2'] = "";
            $data['divis_id_f'] = "";
            $data['group_Id_f'] = "";
            $data_group = $this->input->post("data_group");
            $select_id_type = $this->input->post("select_id_type");
            $select_id = $this->input->post("select_id");
            $select_disvisid = $this->input->post("select_disvisid");
            $group_Id = $this->input->post("group_Id");
            $data['search'] = $this->j3databox->get_search();
            $select_to1 = $select_disvisid + $select_id_type;
            $select_to2 = $select_to1 + $select_id;
            $select_to3 = $select_to2 + $group_Id;
            $data['data_group'] = $this->j3databox->get_data_group();
            $data['division_by'] = $this->j3databox->get_division_by();
            $data['data_type'] = $this->j3databox->get_data_type();
            $data['data_type_ms'] = $this->j3databox->get_data_type_ms();
            $data['division_group'] = $this->j3databox->get_division_group_division();
            if ($select_to3 == "") {
                $data['box'] = $this->j3databox->get_Databox($test);
                $data['not2'] = $this->input->post("select_disvisid");
                $data['not'] = $this->input->post("select_id_type");
            }
            if ($select_to3 != "") {
                if ($data_group == "") {
                    $data['data_group_select'] = $this->j3databox->get_data_group_box();
                    $data['box'] = $this->j3databox->get_Databox_if();
                    $data['not'] = $this->input->post("select_id_type");
                    $data['not2'] = $this->input->post("select_disvisid");
                    $data_ck = $this->input->post("select_id_type");
                    $coll = $this->input->post("select_disvisid");
                    $coll = explode("-", $coll);
                    $data['group_Id_f'] = $coll[0];
                    $data['divis_id_f'] = $coll[1];
                }
            }
            if ($data_group != "") {
                $data['box'] = $this->j3databox->get_data_group_table();
                $data['not'] = $this->input->post("select_id_type");
                $data1 = $this->input->post("data_group");
                $data2 = $this->input->post("divis_id");
                $data3 = $this->input->post("divis_id");
                $data['not2'] = $data1 . "-" . $data2;
                $data['data_group'] = $this->input->post("data_group");
            }
             $data['databox_upload'] = $this->j3databox->get_databox_upload();
            $data['data_group_main'] = $this->j3databox->get_data_group_main();
            $this->load->view('executive', $data);
      //  } else {
        //    redirect('mainFunction/index');
       // }
        }
        public function box() {
        //-------pagination
            $this->load->library('pagination');
            $config['base_url'] = base_url() . "index.php/mainFunction/executive";
            $config['per_page'] = 20;
            $test = $config['per_page'];
            $config['total_rows'] = count($this->j3databox->get_Databox_num($test));
            $config["full_tag_open"] = "<div class='pagination'>";
            $config["full_tag_close"] = "</div>";
            $this->pagination->initialize($config);

            //-------End  pagination
            $data['unit'] = $this->j3databox->get_unit();
            $data['not45'] = "";
            $data['not2'] = "";
            $data['divis_id_f'] = "";
            $data['group_Id_f'] = "";
            $data_group = $this->input->post("data_group");
            $select_id_type = $this->input->post("select_id_type");
            $select_id = $this->input->post("select_id");
            $select_disvisid = $this->input->post("select_disvisid");
            $group_Id = $this->input->post("group_Id");
            $data['search'] = $this->j3databox->get_search();
            $select_to1 = $select_disvisid + $select_id_type;
            $select_to2 = $select_to1 + $select_id;
            $select_to3 = $select_to2 + $group_Id;
            $data['data_group'] = $this->j3databox->get_data_group();
            $data['division_by'] = $this->j3databox->get_division_by();
            $data['data_type'] = $this->j3databox->get_data_type();
            $data['data_type_ms'] = $this->j3databox->get_data_type_ms();
            $data['division_group'] = $this->j3databox->get_division_group_division();
             $data['division'] = $this->j3databox->get_division();
             $data['databox_upload'] = $this->j3databox->get_databox_upload();
             
            
            if ($select_to3 == "") {
                $data['box'] = $this->j3databox->get_Databox($test);
                $data['not2'] = $this->input->post("select_disvisid");
                $data['not'] = $this->input->post("select_id_type");
            }
            if ($select_to3 != "") {
                if ($data_group == "") {
                    $data['data_group_select'] = $this->j3databox->get_data_group_box();
                    $data['box'] = $this->j3databox->get_Databox_if();
                    $data['not'] = $this->input->post("select_id_type");
                    $data['not2'] = $this->input->post("select_disvisid");
                    $data_ck = $this->input->post("select_id_type");
                    $coll = $this->input->post("select_disvisid");
                    $coll = explode("-", $coll);
                    $data['group_Id_f'] = $coll[0];
                    $data['divis_id_f'] = $coll[1];
                }
            }
            if ($data_group != "") {
                $data['box'] = $this->j3databox->get_data_group_table();
                $data['not'] = $this->input->post("select_id_type");
                $data1 = $this->input->post("data_group");
                $data2 = $this->input->post("divis_id");
                $data3 = $this->input->post("divis_id");
                $data['not2'] = $data1 . "-" . $data2;
                $data['data_group'] = $this->input->post("data_group");
            }
            $data['data_group_main'] = $this->j3databox->get_data_group_main();
        $this->load->view('box', $data);
    }

    //-------------------------------------------------------- แสดงข้อมูลจากค้นหา แบบข้อมูลเดียว
    public function data_detail() {
        //$data['menu'] = $this->j3databox->get_menu();	
        $this->load->view('data_detail');
    }

    //--------------------------------------------------------- แสดงข้อมูลจากค้นหา แบบหลายข้อมูล

    public function databox_search() {
if($this->auth_ad->is_authenticated()&&$this->session->userdata('cn')>0)
        {

        //-------pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "index.php/mainFunction/databox_search";
        $config['per_page'] = 20;
        $test = $config['per_page'];
        $config['total_rows'] = count($this->j3databox->get_Databox_search_num($test));
        $config["full_tag_open"] = "<div class='pagination'>";
        $config["full_tag_close"] = "</div>";
        $this->pagination->initialize($config);

        //-------End  pagination

        $data_group = $this->input->post("data_group");
        $select_id_type = $this->input->post("select_id_type");
        $select_id = $this->input->post("select_id");
        $select_disvisid = $this->input->post("select_disvisid");
        $group_Id = $this->input->post("group_Id");
        $data['search'] = $this->j3databox->get_search();
        $data['not'] = "";
        $data['not2'] = "";
        $data['divis_id_f'] = "";
        $data['group_Id_f'] = "";
        $data['id_box'] = $this->input->post("id_box");
        $data['data_type'] = $this->j3databox->get_data_type();
        $data['division_group'] = $this->j3databox->get_division_group();
        $data['last_update'] = $this->j3databox->get_Databox_search($test);
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_type_search'] = $this->j3databox->get_data_type_search();
        $data['division'] = $this->j3databox->get_division_group_search();
        $this->load->view('databox_search', $data);

                    }
        else 
        {
            redirect('mainFunction/index');
        }
    }

    public function box_detail() {
        
        $data['box_detail'] = $this->j3databox->get_data_box_detail();
        $this->load->view('box_detail', $data);
    }

    //---------------------------------------------------หน้า อัพโหล

    public function page_upload() {
//if($this->auth_ad->is_authenticated())
       // {

        //-------pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "index.php/mainFunction/page_upload";
        $config['per_page'] = 15;
        $test = $config['per_page'];
        $config['total_rows'] = count($this->j3databox->get_upload_num($test));

        $config["full_tag_open"] = "<div class='pagination'>";
        $config["full_tag_close"] = "</div>";
        $this->pagination->initialize($config);
        //----End Pagination



        $data['division_group_up'] = $this->j3databox->get_division_group_up();
        $data['search'] = $this->j3databox->get_search();
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
        $data['data_group_main'] = $this->j3databox->get_data_group_main();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['upload'] = $this->j3databox->get_upload($test);
        $this->load->view('page_upload', $data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว

                  //  }
        //else 
        //{
          //  redirect('mainFunction/index');
        //}
    }

 public function select_main() {
        $data['data_group_main'] = $this->j3databox->get_data_group_main();
        $data['data_division'] = $this->j3databox->get_data_division();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
        $this->load->view('select_main', $data);
    }
    public function select() {
        $data['data_division'] = $this->j3databox->get_data_division();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
        $this->load->view('select', $data);
    }
    public function input_menu() {
        $data['data_division'] = $this->j3databox->get_data_division();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
        $this->load->view('input_menu', $data);
    }
    public function input_menu_2() {
       $data['data_group_main'] = $this->j3databox->get_data_group_main();
        $data['data_division'] = $this->j3databox->get_data_division();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
      
        $this->load->view('input_menu_2', $data);
    }
     public function input_menu_main() {
         $data['data_group_main'] = $this->j3databox->get_data_group_main();
        $data['data_division'] = $this->j3databox->get_data_division();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
        $this->load->view('input_menu_main', $data);
    }
    
    

    public function test() {
        $data['division'] = $this->j3databox->get_division();
        $this->load->view('test',$data);
    }
	public function get_state() {
      
        $data['data_group_main'] = $this->j3databox->get_data_group_main();
        $this->load->view('get_state',$data);
    }
	public function get_city() {
        $data['get_division_group'] = $this->j3databox->get_division_group_up();
        $data['data_group_main'] = $this->j3databox->get_data_group_main();
        $this->load->view('get_city',$data);
    }

    public function save() {
     
        $type_id_p = $this->input->post("type_id_save");
        $type_id_ex = explode("-", $type_id_p);

        $check = $this->input->post("check");
        $databox_id = $this->input->post("databox_save");
        $databox_data = array(
            "subject" => $this->input->post("subject_save"),
            "databox_search" => $this->input->post("databox_search_text_save"),
            "group_Id" => $type_id_ex[0],
            "secrets_id" => $this->input->post("secrets_save"),
        );
        if ($check != "save") {
            $this->db->where('databox_id', $databox_id);
            $this->db->delete('databox_upload');
        }
        if ($check == "save") {
            $this->db->where('databox_id', $databox_id);
            $this->db->update('databox_upload', $databox_data);
        }
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['upload'] = $this->j3databox->get_upload();
        
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "index.php/mainFunction/page_upload";
        $config['per_page'] = 15;
        $test = $config['per_page'];
        $config['total_rows'] = count($this->j3databox->get_Databox_num($test));
        $data['search'] = $this->j3databox->get_search();
        $config["full_tag_open"] = "<div class='pagination'>";
        $config["full_tag_close"] = "</div>";
        $this->pagination->initialize($config);
        //----End Pagination
       
        $data['division_group_up'] = $this->j3databox->get_division_group_up();
        $data['search'] = $this->j3databox->get_search();
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['upload'] = $this->j3databox->get_upload($test);
        $this->load->view('page_upload', $data); 
    }

    function save_upload() {
     $pdf_no = $this->input->post("pdf_no");
        if($pdf_no==""){
        $subject = $this->input->post("subject");
        $userfile2 = $this->input->post("userfile2");
        $re_name = date("Y-m-d") . "-" . $subject . "-ผธก";
        
        $tis620 = iconv("utf-8", "tis-620", $re_name);
        $utf8 = iconv("tis-620", "utf-8", $tis620);
  
        $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach ($_FILES as $key => $value)
            for ($s = 0; $s <= $count - 1; $s++) {
                $_FILES['userfile']['name'] = $value['name'][$s];
                $_FILES['userfile']['type'] = $value['type'][$s];
                $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
                $_FILES['userfile']['error'] = $value['error'][$s];
                $_FILES['userfile']['size'] = $value['size'][$s];
                $config['file_name'] = $tis620;
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'pdf|jpeg|jpg|png|doc|docx|avi|mp4';
                $config['max_size'] = '1000';
                $config['max_width'] = '102400';
                $config['max_height'] = '76800';
                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $data = $this->upload->data();
                $name_array[] = $data['file_name'];
            }

        function viewMinutesFile() {
            $file = $this->minutes_model->getFile($id);
            $this->output
                    ->set_content_type('application/pdf')
                    ->set_output(file_get_contents($your_pdf_file));
        }
      
        $names = implode(',', $name_array);

        $pdf = date("Y-m-d") . "-" . $subject . "-ผธก.pdf";
         $doc = $this->input->post("doc");
       $word = date("Y-m-d") . "-" . $subject . "-ผธก.".$doc."";
        $menu_second = $this->input->post("menu_second");
        if ($menu_second == "") {
            $now = date("Y-m-d");
           $subject_no =  $this->input->post("subject");
           $sradio_no =     $this->input->post("s-radio");
           $search_m_no =    $this->input->post("search_m");
           $databox_detail_no =  $this->input->post("databox_detail");
           $group_Id_no =  $this->input->post("group_Id");
      $secrets_id = $this->input->post("s-radio");
            $add_classified = array(
                "subject" => $this->input->post("subject"),
                "secrets_id" => $this->input->post("s-radio"),
                "databox_search" => $this->input->post("search_m"),
                "databox_detail" => $this->input->post("databox_detail"),
                "date_upload" => $now,
                "upload_urlpdf" => $pdf,
                "uploaded_url" => $word,
                "group_Id" => $this->input->post("group_Id"),
            );
            $this->db->insert('databox_upload', $add_classified);
       
        if ($menu_second != "") {
            $data_group_id = $this->input->post("data_group_id");
            $data_group_id_ex = explode("-", $data_group_id);

            if ($data_group_id_ex[1] == "data_type") {
                $data_group = array("groupname" => $this->input->post("menu_second"), "dataId" => $data_group_id_ex[2],);
                $this->db->insert('data_group', $data_group);
            };
            if ($data_group_id_ex[1] == "division") {
                $data_group = array("groupname" => $this->input->post("menu_second"), "divisId" => $data_group_id_ex[0],);
                $this->db->insert('data_group', $data_group);
            };
        }
         
        }
        }

         //-------pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url() . "index.php/mainFunction/page_upload";
        $config['per_page'] = 15;
        $test = $config['per_page'];
        $config['total_rows'] = count($this->j3databox->get_Databox_num($test));

        $config["full_tag_open"] = "<div class='pagination'>";
        $config["full_tag_close"] = "</div>";
        $this->pagination->initialize($config);
        //----End Pagination
        
        $data['division_group_up'] = $this->j3databox->get_division_group_up();
        $data['search'] = $this->j3databox->get_search();
        $data['division'] = $this->j3databox->get_division();
        $data['data_type'] = $this->j3databox->get_data_type_up();
        $data['data_group_up'] = $this->j3databox->get_data_group_up();
        $data['data_type_up'] = $this->j3databox->get_data_type_up();
        $data['upload'] = $this->j3databox->get_upload($test);
        $this->load->view('page_upload', $data);  // เปิดหน้า upload เพื่อที่ สร้างหน้าวิว ชัวคราว
    }

}
