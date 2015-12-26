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
                                            <td>   
                                                <script>
                                                    $('input[type="radio"]').on('click change', function (e) {
                                                        console.log(e.type);
                                                    });
                                                </script>
                                                <div class="input-prepend"><span class="add-on" >ชั้นความลับ</span></div>
                                                <div class="input-prepend">
                                                    <span class="add-on" ><input type="radio" name="s-radio" value="1" checked="checked">ปกติ</span></input>
                                                    <span class="add-on" ><input type="radio" name="s-radio" value="2"> ลับ</span>  </input>
                                                    <span class="add-on" ><input type="radio" name="s-radio" value="3">  ลับมาก</span>  </input>
                                                    <span class="add-on" ><input type="radio" name="s-radio" value="4">  ลับที่สุด</span>   </input>
                                                </div>
                                                <br><p>
                                                <div class="input-prepend"><span class="add-on" >ประเภทเอกสาร</span>
                                                    <select id='btn1'  class='' name='btn1' onchange="getComboA(this)">
                                                        <option  value='0'> กรุณาเลือกรายการ </option>
                                                        <?php
                                                        foreach ($data_type_up as $row) {
                                                            $type_id_ck = $row['group_Id'] . "-data_type-" . $row['type_id'] . "'";
                                                            echo "<option  value='" . $type_id_ck . ">" . $row['type_name'] . "</option>";
                                                        }
                                                        ?>

                                                        <?php
                                                        foreach ($division as $row) {
                                                            $division_id_ck = $row['divisid'] . "-division'";
                                                            echo "<option   value='" . $division_id_ck . "-divisid'>" . $row['divisname'] . "</option>";
                                                        }
                                                        ?>

                                                    </select></td>
                                            <tr>
                                                <td>
                                                    <input type="hidden" id="pdf_no" name="pdf_no" cols="45" rows="5"></input>
                                                    <input type="hidden" id="code" name="code" cols="45" rows="5"></input>
                                                    <input type="hidden" id="doc" name="doc" cols="45" rows="5"></input>
                                                    <script>



                                                        function userfile() {
                                                            var userfile = document.getElementById("userfile").value;
                                                            var userfile2 = document.getElementById("userfile2").value;
                                                            var res = userfile.split(".");
                                                            if (res[1] != "pdf")
                                                            {
                                                                alert("แนบไฟล์ pdf ด้วยครับ");

                                                                document.getElementById("pdf_no").value = 'pdf_no';
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
                                                            document.getElementById("data_group_id").value = value;
                                                            document.getElementById("test").value = value;
                                                        }
                                                        function change(id) {
                                                            var id = id.value;
                                                            document.getElementById("code").value = id;
                                                        }
                                                    </script>

                                                    <div id="showajax" ></div>
                                                    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
                                                    <script type="text/javascript">
                                                                                        $(document).ready(function () {
                                                                                            $("#btn1").change(function () {

                                                                                                $.post("select", {
                                                                                                    data1: $("#code").val()},
                                                                                                        function (data) {
                                                                                                            $("#showajax").html(data);
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
                                                    <div  id="panel_hidden" name="panel_hidden" class="" style="border-style: groove; border-color: red; display: none;">
                                                        <table border="0">
                                                            <tr>
                                                                <td>
                                                                    <div class="input-prepend"><span class="add-on"  style="width : 30%;  text-align: left;">ประเภทเอกสาร</span>
                                                                        <select class='span5'  name="data_group_id" id="data_group_id"   >

                                                                            <?php
                                                                            foreach ($data_type as $row) {
                                                                                echo "<option  value='" . $row['group_Id'] . "-data_type-" . $row['type_id'] . "'>" . $row['type_name'] . "</option>";
                                                                            }
                                                                            ?>



                                                                            <?php
                                                                            foreach ($division as $row) {
                                                                                echo "<option   value='" . $row['divisid'] . "-division'>" . $row['divisname'] . "</option>";
                                                                            }
                                                                            ?>
                                                                        </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-prepend"><span class="add-on" style="width : 30%;  text-align: left;">เพิ่มหมวดเรื่องย่อย</span>
                                                                        <input type='text'  id='menu_second' name='menu_second' class='span5' /></input>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <a onclick="document.getElementById('upload_pdf').submit()" href="#"  class="btn btn-small btn-danger">
                                                                        <i class="btn-icon-only icon-save"  >บันทึก</i>
                                                                    </a>
                                                                </td>
                                                            </tr>	
                                                        </table>
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


