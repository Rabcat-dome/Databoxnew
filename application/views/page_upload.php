<?php $this->load->view('header/header_title'); ?>
<?php $this->load->view('menu/menu'); ?>
<?php $this->load->view('java/javascript_head.php'); ?>
<style>
    .pagination{
        background: white;
        padding: 20px;
        margin-bottom: 20px;

    }

    .pagination a{
        display: inline-block;
        padding: 0px 9px;
        margin-right: 4px;
        border-radius: 3px;
        border: solid 1px #c0c0c0;
        background: #e9e9e9;
        box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
        font-size: .875em;
        font-weight: bold;
        text-decoration: none;
        color: #717171;
        text-shadow: 0px 1px 0px rgba(255,255,255, 1); }

    .pagination strong{

        display: inline-block;
        padding: 0px 9px;
        margin-right: 4px;
        border-radius: 3px;
        border: solid 1px #c0c0c0;
        background: #e9e9e9;
        box-shadow: inset 0px 1px 0px rgba(255,255,255, .8), 0px 1px 3px rgba(0,0,0, .1);
        font-size: .875em;
        font-weight: bold;
        text-decoration: none;
        color: #717171;
        text-shadow: 0px 1px 0px rgba(255,255,255, 1);

        border: none;
        background: #616161;
        box-shadow: inset 0px 0px 8px rgba(0,0,0, .5), 0px 1px 0px rgba(255,255,255, .8);
        color: #f0f0f0;
        text-shadow: 0px 0px 3px rgba(0,0,0, .5);
    }


    .pagination a:hover{
        background: #fefefe;
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FEFEFE), to(#f0f0f0));
        background: -moz-linear-gradient(0% 0% 270deg,#FEFEFE, #f0f0f0);
    }



</style>
<script>
    function check(elem) {
        document.getElementById('mySelect1').disabled = !elem.selectedIndex;
    }
</script>

<link href="../../asset/css/bootstrap.min.css" rel="stylesheet">
<link href="../../asset/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="../../asset/js/fileinput.js" type="text/javascript"></script>
<script src="java/javasm.js" type="text/javasm.js" ></script>
<div class="span15">
    <div class="text-right">
    </div>
    <div class="span11"  style="margin-left : 90px">
        <div class="span11"  style="margin-left : 90px">
            <div class="container-signin">

                <?php
                $attributes = array('id' => 'upload_pdf');
                echo form_open_multipart('http://127.0.0.1/j3databoxnew/index.php/mainFunction/save_upload', $attributes);
                ?>

                <div align="center">
                    <legend >เพิ่มหมวดเรื่อง <div onclick="userfile();">

                        </div></legend>
                </div>

                <div class="form-inner">

                    <div class="input-prepend">
                        <div style="position:relative;">

                            <a class='' href='javascript:;'></a>
                            <table width="41%" border="0">
                                <tr>

                                <div   class="input-prepend">
                                    <span  class="add-on" style="width : 15%;  text-align: left;"><i class="icon-pencil" ></i>  เรื่อง</span>
                                    <input type='text' class='span5' id='subject' name='subject'  />
                                </div>
                                </tr>
                                <tr>
                                    <td  > 

                                        <div class="span1" >
                                            <div class="input-prepend"><span class="add-on" >เฉพาะไฟล์ PDF </span>
                                                <input class="file" type="file"   name="userfile[]" id="userfile"   data-upload-url="#" >
                                                <div id="errorBlock" class="help-block"> 
                                                </div>

                                                </td>

                                                <td> 

                                                    <div class="span1" >
                                                        <span class="add-on" style="border:  0px ;background-color:rgba(0,0,0,0);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                </td> 
                                                <td> 

                                                    <div class="span1" >
                                                        <div class="input-prepend"><span class="add-on" >เฉพาะไฟล์ ต้นฉบับ</span>
                                                            <input class="file" type="file"   name="userfile2[]" id="userfile2"   data-upload-url="#">
                                                            <div id="errorBlock" class="help-block"></div>
                                                        </div>
                                                </td> 

                                                </tr>
                                                <tr>
                                                    <td width="10px" > 
                                                        <br>
                                                    </td>									
                                                </tr>
                                                </table>
                                            </div>				
                                        </div>
                                        <table>
                                            <tr>
                                                <td>   
                                                    <script>

                                                        $('input[type="radio"]').on('click change', function (e) {
                                                            console.log(e.type);
                                                        });

                                                    </script>
                                                    <div class="input-prepend"><span class="add-on" >ชั้นความลับ</span></div>
                                                    <div class="input-prepend">

                                                        <span class="add-on" ><input type="radio" name="sradio" id="sradio" value="1"  >ปกติ</span></input>
                                                        <span class="add-on" ><input type="radio" name="sradio"  id="sradio" value="2"  >ลับ</span></input>
                                                        <span class="add-on" ><input type="radio" name="sradio"  id="sradio" value="3"  >ลับมาก</span></input>
                                                        <span class="add-on" ><input type="radio" name="sradio"  id="sradio" value="4"  >ลับที่สุด</span></input>
                                                    </div>
                                                    <br><p>
                                                    <div class="input-prepend"><span class="add-on" >ประเภทเอกสาร</span>
                                                        <select id='btn1'  class='' name='btn1' onchange="getComboA(this)">
                                                            <option  value='0'> กรุณาเลือกรายการ </option>
                                                            <?php
                                                            foreach ($data_type as $row) {
                                                                $type_id_ck = $row['type_id'] . "-data_type-" . $row['type_id'] . "'";
                                                                echo "<option  value='" . $type_id_ck . ">" . $row['type_name'] . "</option>";
                                                            }
                                                            ?>

                                                            <?php
                                                            foreach ($division as $row) {
                                                                $division_id_ck = $row['divisid'] . "-division'";
                                                                echo "<option   value='" . $division_id_ck . "-divisid'>" . $row['divisname'] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                        <tr>
                                                            <td>



                                                                <div class="input-prepend"><span class="add-on" >หมวดเอกสารหลัก</span>
                                                                    <select name="showajax" id="showajax" class="state" onchange="getComboB(this)">
                                                                        <option selected="selected">--ไม่มีข้อมูล--</option>
                                                                    </select>
                                                                    <input id="showajax_text_main" name="showajax_text_main" style="display:none" > </input>
                                                                    <input id="showajax_id_main"   name="showajax_id_main" style="display:none"   > </input>
                                                            </td>
                                                            <td>

                                                                <a  id="btn2_main" name="btn2_main" class="btn btn-small btn-danger" onclick="open_input_main()">
                                                                    เพิ่มหมวดหัวข้อเอกสาร
                                                                </a>
                                                                <a  id="btn3_main" name="btn3_main" class="btn btn-small btn-danger" onclick="close_input_main()"  style ="display :none"   >
                                                                    ซ่อน 
                                                                </a>
                                                            </td>
                                                            <td>

                                                                <a  id="btn2_edit_main" name="btn2_edit_main" class="btn btn-small btn-danger" onclick="open_edit_main()">
                                                                    แก้ไข
                                                                </a>
                                                                <a style="display: none" id="save_showajax_main"  name="save_showajax_main"  onclick="document.getElementById('upload_pdf').submit()" href="#" class="btn btn-small btn-danger">
                                                                    <i   class="btn-icon-only icon-save" onclick="userfile();" >บันทึก</i>
                                                                </a>
                                                                <a  id="btn3_edit_main" name="btn3_edit_main" class="btn btn-small btn-danger" onclick="close_edit_main()"  style ="display :none"   >
                                                                    ยกเลิก
                                                                </a>
                                                            </td>
                                                            <td>


                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td >

                                                                <div  id="table_main"   class="input-prepend"><span class="add-on" >หมวดเอกสารรอง</span>


                                                                    <select name="showajax2" id="showajax2" class="state">
                                                                        <option selected="selected">--ไม่มีข้อมูล--</option>
                                                                    </select>
                                                                    <input id="showajax2_text" name="showajax2_text" type="hidden" > </input>
                                                                    <input id="showajax2_id"   name="showajax2_id" type="hidden"  > </input>
                                                                </div>
                                                                </td>
                                                            <td>

                                                                <a  id="btn2" name="btn2" class="btn btn-small btn-danger" onclick="open_input()">
                                                                    เพิ่มหมวดหัวข้อเอกสาร
                                                                </a>
                                                                <a  id="btn3" name="btn3" class="btn btn-small btn-danger" onclick="close_input()"  style ="display :none"   >
                                                                    ซ่อน 
                                                                </a>
                                                            </td>

                                                            <td>

                                                                <a  id="btn2_edit" name="btn2_edit" class="btn btn-small btn-danger" onclick="open_edit()">
                                                                    แก้ไข
                                                                </a>
                                                                <a style="display: none" id="save_showajax2"  name="save_showajax2"  onclick="document.getElementById('upload_pdf').submit()" href="#" class="btn btn-small btn-danger">
                                                                    <i   class="btn-icon-only icon-save" onclick="userfile();" >บันทึก</i>
                                                                </a>
                                                                <a  id="btn3_edit" name="btn3_edit" class="btn btn-small btn-danger" onclick="close_edit()"  style ="display :none"   >
                                                                    ยกเลิก
                                                                </a>
                                                            </td>


                                                        </tr>


                                                        <td>

                                                            <table id="input_menu_main" name="input_menu_main" style="display: none" >
                                                                <td>
                                                                    <div class="input-prepend"><span class="add-on" >ประเทภเอกสาร</span>
                                                                        <select name="showajax5" id="showajax5" class="state">
                                                                            <option  selected="selected">--ไม่มีข้อมูล--</option>
                                                                        </select>
                                                                </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-prepend"><span class="add-on" >หมวดเอกสารหลัก</span>
                                                                            <input id="menu_main" name="menu_main"></input>
                                                                    </td>
                                                                    <td>
                                                                        <a onclick="document.getElementById('upload_pdf').submit()" href="#" class="btn btn-small btn-danger">
                                                                            <i   class="btn-icon-only icon-save" onclick="userfile();" >บันทึก</i>
                                                                        </a>
                                                                    </td>
                                                                </tr>

                                                            </table>

                                                        </td>
                                            </tr>

                                            <tr>

                                                <td>



                                                </td>

                                            <script>
                                                function open_input() {

                                                    document.getElementById("input_menu").style.display = "block";
                                                    document.getElementById("btn2").style.display = "none";
                                                    document.getElementById("btn3").style.display = "block";
                                                }

                                                function close_input() {

                                                    document.getElementById("input_menu").style.display = "none";
                                                    document.getElementById("btn2").style.display = "block";
                                                    document.getElementById("btn3").style.display = "none";

                                                }
                                                function open_edit() {

                                                    document.getElementById("save_showajax2").style.display = "block";
                                                    document.getElementById("btn2").style.display = "none";
                                                    document.getElementById("showajax2_text").type = "text";
                                                    var e = document.getElementById("showajax2");
                                                    var strUser = e.options[e.selectedIndex].text;
                                                    document.getElementById("showajax2_text").value = strUser;
                                                    document.getElementById("showajax2_id").value = document.getElementById("showajax2").value;
                                                    document.getElementById("showajax2").style.display = "none";
                                                    document.getElementById("btn2_edit").style.display = "none";
                                                    document.getElementById("btn3_edit").style.display = "block";
                                                }

                                                function close_edit() {

                                                    document.getElementById("btn2").style.display = "block";
                                                    document.getElementById("save_showajax2_main").style.display = "none";
                                                    document.getElementById("showajax2_text").style.display = "none";
                                                    document.getElementById("showajax2").style.display = "initial";
                                                    document.getElementById("btn2_edit").style.display = "block";
                                                    document.getElementById("btn3_edit").style.display = "none";

                                                }
                                                function open_edit_main() {
                                                     var e = document.getElementById("showajax");
                                                    var strUser = e.options[e.selectedIndex].text;
                                                    document.getElementById("showajax_text_main").value = strUser;
                                                     document.getElementById("showajax_id_main").value = document.getElementById("showajax").value;
                                                    document.getElementById("showajax").style.display = "none";
                                                    document.getElementById("showajax_text_main").style.display = "initial";
                                                    document.getElementById("btn2_edit_main").style.display = "none";
                                                    document.getElementById("btn3_edit_main").style.display = "block";

                                                   document.getElementById("save_showajax_main").style.display = "block";
                                                    document.getElementById("btn2_main").style.display = "none";
                                                    document.getElementById("showajax_text_man").style.display = "initial";
                                                    //var e = document.getElementById("showajax");
                                                   // var strUser = e.options[e.selectedIndex].text;
                                                  //  document.getElementById("showajax_text_main").value = strUser;
                                                   
                                                    
                                                    
                                                }

                                                function close_edit_main() {
                                                      document.getElementById("btn3_edit_main").style.display = "none";
                                                       document.getElementById("showajax_text_main").style.display = "none";
                                                    document.getElementById("btn2_main").style.display = "block";
                                                    document.getElementById("save_showajax2").style.display = "none";
                                                    document.getElementById("showajax_text_main").style.display = "none";
                                                    document.getElementById("showajax").style.display = "initial";
                                                    document.getElementById("btn2_edit_main").style.display = "block";
                                                    document.getElementById("save_showajax_main").style.display = "none";
                                                  

                                                }

                                                function close_input_main() {
                                                    document.getElementById("input_menu_main").style.display = "none";
                                                    document.getElementById("btn2_main").style.display = "block";
                                                    document.getElementById("btn3_main").style.display = "none";

                                                }
                                                function open_input_main() {
                                                    document.getElementById("input_menu_main").style.display = "block";
                                                    document.getElementById("btn2_main").style.display = "none";
                                                    document.getElementById("btn3_main").style.display = "block";
                                                }
                                            </script>

                                </tr>
                                <tr>
                                    <td>
                                <tr>
                                    <td>
                                        <table id="input_menu" name="input_menu" style="display: none">
                                            <td>
                                                <div class="input-prepend"><span class="add-on" >ประเทภเอกสาร</span>
                                                    <select name="showajax3" id="showajax3" class="state">
                                                        <option selected="selected">--ไม่มีข้อมูล--</option>
                                                    </select>
                                            </td>
                                </tr>
                                <tr>
                                    <td >
                                        <div class="input-prepend"  ><span class="add-on" >หมวดเอกสารหลัก</span>
                                            <select name="showajax4" id="showajax4" class="state">
                                                <option selected="selected">--ไม่มีข้อมูล--</option>
                                            </select>
                                            
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="input-prepend"><span class="add-on" >หมวดเอกสารรอง</span>
                                            <input id="menu_second" name="menu_second" ></input>
                                    </td>
                                    <td>

                                        <a   id="save_showajax2"  name="save_showajax2" onclick="document.getElementById('upload_pdf').submit()" href="#" class="btn btn-small btn-danger">
                                            <i   class="btn-icon-only icon-save" onclick="userfile();"  >บันทึก</i>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            </td>
                            <tr>

                            </tr>
                            </td>
                            </tr>
                            <td>
                                <input type="hidden" id="pdf_no" name="pdf_no" cols="45" rows="5"></input>
                                <input type="hidden" id="code" name="code" cols="45" rows="5"></input>
                                <input type="hidden" id="code2" name="code2" cols="45" rows="5"></input>
                                <input type="hidden" id="code3" name="code2" cols="45" rows="5"></input>
                                 <input type="hidden" id="type_data" name="type_data" cols="45" rows="5"></input>
                                <input type="hidden" id="doc" name="doc" cols="45" rows="5"></input>
                                <script>
                                    function userfile() {
                                        var userfile = document.getElementById("userfile").value;
                                        var userfile2 = document.getElementById("userfile2").value;
                                        var menu_main = document.getElementById("showajax_text_main").value;
                                        var menu_second = document.getElementById("showajax2_text").value;
                                        var res = userfile.split(".");
                                        if (menu_main == "")
                                        {
                                             if (menu_second == "")
                                        {

                                            if (res[1] != "pdf")
                                            {
                                                alert("แนบไฟล์ pdf ด้วยครับ");
                                                document.getElementById("pdf_no").value = 'pdf_no';
                                            }
                                        }

                                        }
                                        var subject = document.getElementById("subject").value;
                                        var sradio = document.getElementById("s-radio").value;
                                        var btn1 = document.getElementById("btn1").value;

                                        if (subject == "")
                                        {
                                            alert("หัวข้อมไม่มี");

                                            document.getElementById("pdf_no").value = 'pdf_no';
                                        }
                                        if (sradio == "")
                                        {
                                            alert("ไม่ได้เลือก");

                                            document.getElementById("pdf_no").value = 'pdf_no';
                                        }
                                        if (btn1 == "")
                                        {
                                            alert("ไม่ได้เลือก");

                                            document.getElementById("pdf_no").value = 'pdf_no';
                                        }
                                        var res2 = userfile2.split(".");


                                        document.getElementById("doc").value = res2[1];
                                    }

                                    function getComboA(sel) {
                                        var value = sel.value;
                                        document.getElementById("code").value = value;
                                        document.getElementById("code3").value = value;

                                        document.getElementById("data_group_id_2").value = value;
                                        document.getElementById("data_group_id").value = value;
                                        document.getElementById("test").value = value;
                                    }
                                    function getComboB(sel) {
                                        var value1 = sel.value;

                                        document.getElementById("code2").value = value1;

                                        //   showajax5
                                        //  document.getElementById("data_group_main").value = value; 
                                        // document.getElementById("data_group_id_2").value = value; 
                                        // document.getElementById("data_group_id").value = value; 
                                        // document.getElementById("test").value = value;
                                    }


                                    function change(id) {
                                        var id = id.value;
                                        document.getElementById("code").value = id;
                                    }

                                </script>



                                <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        $("#btn1").change(function () {

                                            $.post("select_main", {
                                                data1: $("#code").val()},
                                                    function (data) {
                                                        $("#showajax").html(data);
                                                    }
                                            );

                                        });
                                    });
                                    $(document).ready(function () {
                                        $("#showajax").change(function () {

                                            $.post("select", {
                                                data2: $("#code2").val()},
                                                    function (data) {
                                                        $("#showajax2").html(data);
                                                    }
                                            );

                                        });
                                    });
                                    $(document).ready(function () {
                                        $("#btn2").click(function () {

                                            $.post("input_menu", {
                                                data1: $("#code2").val()},
                                                    function (data) {
                                                        $("#showajax3").html(data);
                                                    }
                                            );

                                        });
                                    });
                                    $(document).ready(function () {
                                        $("#showajax3").click(function () {

                                            $.post("input_menu_2", {
                                                data3: $("#code3").val()},
                                                    function (data) {
                                                        $("#showajax4").html(data);
                                                    }
                                            );

                                        });
                                    });
                                    $(document).ready(function () {
                                        $("#btn2").click(function () {

                                            $.post("input_menu_2", {
                                                data3: $("#code3").val()},
                                                    function (data) {
                                                        $("#showajax4").html(data);
                                                    }
                                            );

                                        });
                                    });
                                    $(document).ready(function () {
                                        $("#btn2_main").click(function () {

                                            $.post("input_menu_main", {
                                                data1: $("#code2").val()},
                                                    function (data) {
                                                        $("#showajax5").html(data);
                                                    }
                                            );

                                        });
                                    });
                                    $(document).ready(function () {
                                        $("#edit_menu").click(function () {

                                            $.post("edit_menu", {
                                                data1: $("#code2").val()},
                                                    function (data) {
                                                        $("#showajax6").html(data);
                                                    }
                                            );

                                        });
                                    });
                                </script>


                                <input type="hidden" id="group_Id" name="group_Id" ></input>
                            </td>
                            <td  valign="bottom" align="right"> 
                                <div class="input-prepend" >											
                                </div>

                            </td>
                            </tr>

                        </div>
                        <tr>
                            <td>

                                <div  id="panel_hidden_2" name="panel_hidden_2" class="" style="border-style: groove; border-color: red; display: none;">

                                </div>
                                <div  id="panel_hidden" name="panel_hidden" class="" style="border-style: groove; border-color: red; display: none;">

                                </div>
                            </td>
                        </tr>
                    </div>
                    </table>
                    <table>
                        <div class="input-prepend">
                            <span class="add-on" style="width : 15%;  text-align: left;">คำค้นหา</span>
                            <input type='text' class='span6' id='search_m' style="width : 15%;"  name="search_m" />
                        </div>
                        <div class="input-prepend">
                            <span class="add-on" style="width : 40%;  text-align: left;" style="width : 15%;">รายละเอียด</span><br>
                            <textarea rows="4" cols="1" class='span6'  id='databox_detail'  name="databox_detail" ></textarea>
                        </div>
                        </label>
                </div>
                </table>
                <footer class="signin-actions">
                    <a onclick="document.getElementById('upload_pdf').submit()" href="#" class="btn btn-small btn-danger">
                        <i   class="btn-icon-only icon-save" onclick="userfile();" >บันทึก</i>
                    </a>
                </footer>
            </div>
            <div class="row">          
            </div>
        </div>
    </div>
</div>
<?php ?>
<?php echo form_close(); ?>
<?php
$attributes = array('id' => 'myform');
echo form_open('http://127.0.0.1/j3databoxnew/index.php/mainFunction/save', $attributes);
?>


<div class="span15" >
    <input type="hidden" name="check" id="check" ></input>
    <input type="hidden" name="databox_save" id="databox_save" > </input>
    <input type="hidden" name="subject_save" id="subject_save" > </input>
    <input type="hidden" name="databox_search_text_save" id="databox_search_text_save" > </input>
    <input type="hidden" name="secrets_save"  id="secrets_save" > </input>
    <input type="hidden" name="type_id_save"  id="type_id_save" > </input>
    <input type="hidden" name="group_Id_save" id="group_Id_save" > </input>
    <br>
    <br>
    <table id="sample-table" class="table table-hover table-bordered tablesorter" >
        <thead>
            <tr>
                <th>วันที่</th>
                <th>เรื่อง</th>
                <th style="width: 10%" >ชั้นความลับ</th>
                <th style="width: 10%" >คำค้นหา</th>
                <th style="width: 10%" >ประเภทเอกสาร</th>

                <th style="width: 10%" >คำสั่ง</th>
            </tr>
        </thead>
        <tbody>



            <?php
            foreach ($upload as $row) {
                $group_Id = $row['group_Id'];
                $divisId = $row['divisId'];
                $type_id = $row['type_id'];
                $dataId = $row['dataId'];
                $databox_id = $row['databox_id'];
                $group_title = $row['group_title'];
                $subject = $row['subject'];
                $date_upload = $row['date_upload'];
                $databox_search = $row['databox_search'];
                $secrets = $row['sname'];
                $secrets_id = $row['id'];
                $divisname = $row['group_title'];
                if ($divisname == "") {
                    $divisname = $row['type_name'];
                }
                $groupname = $row['groupname'];
                $databox_id_text = $databox_id . "id";
                $subject_text = $databox_id . "subject";
                $databox_id_div = $databox_id . "id_div";
                $subject_div = $databox_id . "subject_div";
                $save_id = $databox_id . "save";
                $add_id = $databox_id . "add";
                $databox_search_div = $databox_id . "search_div";
                $databox_search_text = $databox_id . "search";
//-------------------------------ชั้นความลับ
                $databox_secrets = $row['sname'];
                $databox_secrets_div = $databox_id . "secrets_div";
                $databox_secrets_text = $databox_id . "secrets";
//-------------------------------ชั้นความลับ
//-------------------------------ประเภทเอกสาร
                $databox_type = $divisname;
                $databox_type_div = $databox_id . "type_div";
                $databox_type_text = $databox_id . "type";
//-------------------------------ประเภทเอกสาร
//-------------------------------หมวดเอกสาร
                $databox_group = $row['group_Id'];
                $databox_group_div = $databox_id . "group_div";
                $databox_group_text = $databox_id . "group";
//-------------------------------หมวดเอกสาร
                ?>
                <?php $this->load->view('java/javascript_upload_insert'); ?>
            <script>
            </script>
            <tr>
                <td>
                    <input type="text" name="databox_id"  class="span9" id="<?php echo $databox_id_text; ?>" value="<?php echo $databox_id ?>"   
                           onkeypress="return runScript(event)" style="display: none" >
                    <div id="<?php echo $databox_id_div; ?>"><?php echo $date_upload ?></div>
                </td>
                <td>
                    <input type="text" name="subject"  class="span9" id="<?php echo $subject_text; ?>" value="<?php echo $subject ?>" 
                           onkeypress="return runScript(event)" style="display: none; width: 350px;" >
                    <div id="<?php echo $subject_div; ?>"><?php echo $subject ?></div>
                </td>
                <td>
                    <select type="text" name="databox_secrets"  class="span5"  id="<?php echo $databox_secrets_text; ?>" onkeypress="return runScript(event)" style="display: none;  width: 100px;" >

                        <option  value='1'  <?php
            if ($secrets_id == "1") {
                echo "selected";
            }
                ?> >ปกติ</option>
                        <option  value='2'  <?php
                    if ($secrets_id == "2") {
                        echo "selected";
                    }
                ?> >ลับ</option>
                        <option  value='3'  <?php
                    if ($secrets_id == "3") {
                        echo "selected";
                    }
                ?> >ลับมาก</option>
                        <option  value='4'  <?php
                    if ($secrets_id == "4") {
                        echo "selected";
                    }
                ?> >ลับที่สุด</option>

                    </select>
                    <div id="<?php echo $databox_secrets_div; ?>" ><?php echo $secrets ?>
                    </div></td>
                <td>
                    <input type="text" name="databox_search"  class="span5"  id="<?php echo $databox_search_text; ?>" value="<?php echo $databox_search ?>" onkeypress="return runScript(event)" style="display: none;  width: 150px;" >
                    <div id="<?php echo $databox_search_div; ?>" ><?php echo $databox_search ?>
                    </div></td>
                <td>

                    <select class='span5' name="databox_type"  class="span5"  id="<?php echo $databox_type_text; ?>" 
                            onkeypress="return runScript(event)" style="display: none; width: 150px;" onchange="change(this)" >
                                <?php
                                foreach ($data_group_up as $row) {
                                    $divisId_b = $row['divisId'];
                                    if ($divisId == $divisId_b) {
                                        ?>

                                <option  value='<?php echo $row['group_Id'] . "-table" ?>' <?php
                            if ($group_Id == $row['group_Id']) {
                                echo "selected";
                            }
                                        ?> >		                                                                                                    

                                    <?php echo $row['groupname']; ?></option>";
                                    <?php
                            }
                        }

                        foreach ($data_type_up as $row) {

                            $dataId = $row['type_id'];
                            if ($divisId == $divisId_b) {
                                ?>

                                <option  value='<?php echo $row['group_Id'] . "-table" ?>' <?php
                    if ($group_Id == $row['group_Id']) {
                        echo "selected";
                    }
                                ?> >		                                                                                                    

                                    <?php echo $row['groupname']; ?></option>";
                                    <?php
                            }
                        }
                        ?>
                    </select>
                    <div id="<?php echo $databox_type_div; ?>" ><?php echo $groupname ?>
                    </div></td>

                <td class="td-actions"  >
                    <div id="<?php echo $add_id; ?>"  >
                        <a href="javascript:;" class="btn btn-small btn-info">
                            <i class="btn-icon-only icon-ok"  onClick="add(
                                                                                        '<?php echo $databox_id_text ?>', '<?php echo $subject_text ?>', '<?php echo $databox_secrets_text; ?>',
                                                                                        '<?php echo $databox_id ?>', '<?php echo $subject ?>', '<?php echo $databox_secrets ?>',
                                                                                        '<?php echo $databox_id_div ?>', '<?php echo $subject_div ?>', '<?php echo $databox_secrets_div ?>',
                                                                                        '<?php echo $save_id; ?>', '<?php echo $add_id; ?>',
                                                                                        '<?php echo $databox_type; ?>', '<?php echo $databox_type_div; ?>', '<?php echo $databox_type_text; ?>',
                                                                                        '<?php echo $databox_group; ?>', '<?php echo $databox_group_div; ?>', '<?php echo $databox_group_text; ?>',
                                                                                        '<?php echo $databox_search; ?>', '<?php echo $databox_search_div; ?>', '<?php echo $databox_search_text; ?>'
                                                                                        );"></i>
                        </a>
                        <a href="javascript:;" class="btn btn-small btn-danger">
                            <i class="btn-icon-only icon-remove" onClick="del_row(
                                                                                        '<?php echo $databox_id_text ?>', '<?php echo $subject_text ?>', '<?php echo $databox_secrets_text; ?>',
                                                                                        '<?php echo $databox_id ?>', '<?php echo $subject ?>', '<?php echo $databox_secrets ?>',
                                                                                        '<?php echo $databox_id_div ?>', '<?php echo $subject_div ?>', '<?php echo $databox_secrets_div ?>',
                                                                                        '<?php echo $save_id; ?>', '<?php echo $add_id; ?>');"></i>
                        </a>
                    </div>
                    <div id="<?php echo $save_id; ?>" style="display: none" >
                        <a href="javascript:;" class="btn btn-small btn-info">
                            <i class="btn-icon-only icon-save"  onClick="save(
                                                                                        '<?php echo $databox_id_text ?>', '<?php echo $subject_text ?>',
                                                                                        '<?php echo $databox_type_text; ?>', '<?php echo $databox_search_text; ?>',
                                                                                        '<?php echo $databox_secrets_text; ?>', '<?php echo $save_id ?>');"  ></i>
                        </a>
                        <a href="javascript:;" class="btn btn-small btn-danger">
                            <i class="btn-icon-only icon-remove" onClick="close_row(
                                                                                        '<?php echo $databox_id_text ?>', '<?php echo $subject_text ?>', '<?php echo $databox_secrets_text; ?>',
                                                                                        '<?php echo $databox_id ?>', '<?php echo $subject ?>', '<?php echo $databox_secrets ?>',
                                                                                        '<?php echo $databox_id_div ?>', '<?php echo $subject_div ?>', '<?php echo $databox_secrets_div ?>',
                                                                                        '<?php echo $save_id; ?>', '<?php echo $add_id; ?>'
                                                                                        , '<?php echo $databox_type; ?>', '<?php echo $databox_type_div; ?>', '<?php echo $databox_type_text; ?>'
                                                                                        , '<?php echo $databox_group; ?>', '<?php echo $databox_group_div; ?>', '<?php echo $databox_group_text; ?>'
                                                                                        );"></i>
                        </a>
                    </div>
                </td>
                </div>	    
            </tr>


        <?php } ?>
        </tbody>
    </table><div align="center"><?php echo $this->pagination->create_links(); ?></div>																										
</div>
</div>
</div>
</div>
<input id="nnn" type="hidden"></input>
<div id="ccc" name="ccc"></div>
<script type="text/javascript">


    <?php echo form_close(); ?>
    <?php $this->load->view('footer/footer'); ?>


