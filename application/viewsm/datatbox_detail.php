
 
<?php // $this->load->view('header/header_title'); ?>
<?php $this->load->view('menu/menu'); ?>


                                    <div class="span15">
                                    <div class="text-right">
                                    </div>
                                    
<input type="text" placeholder="Pickup Date" id="datepicker" name="datepicker" class="formfield_text hasDatepicker">  
												
<div class="panel_hidden">

<div class="span11"  style="margin-left : 25%">
                                               <div class="container-signin">  
                                                    <legend >เพิ่มหมวดเรื่อง</legend>

                                                    <div class="input-prepend">
                                                    </div>
                                                    <div class="input-prepend">
                                                    <div style="position:relative;">
<a class='' href='javascript:;'>
<?php $attributes = array('id' => 'menu_save'); 
echo form_open('http://localhost/databoxx/index.php/mainFunction/menu_save', $attributes); ?>
<?php $this->load->view('java/javascript_upload'); ?>
                                                            </select>
                                                            <br>
                                                            <br>
                                                    <table>
													<tr>
                                                                  <td align="left">
                                                                  <span class="add-on"  style="width : 20%;  text-align: left;">หมวดหลัก</span>
                                                                  <select class='span6'  name="menu_master" id="menu_master"  >
                                                                  <?php   foreach ($upload_menu_type as $row) { 
																   echo "<option value=".$row['type_id'].">".$row['type_name']."</option>";
																								}  ?>
                                                            </td>
                                                            </tr>
																 </tr>
																 <td>
																 <br>
																 </td>
                                                            <tr>
                                                            <tr>
                                                                    <td align="left">
                                                                    <span class="add-on" style="width : 18%;  text-align: left;">หมวดเรื่อง</span>
                                                    <input type='text'  id='menu_second' name='menu_second' class='span6' /></input></td>
                                                                    <td valign="bottom">
                                                                    <a onclick="document.getElementById('menu_save').submit()" href="#" class="btn btn-small btn-danger">
                                                    <i   class="btn-icon-only icon-save"  ></i>
                                                    </a>
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td><br></td>
                                                            </tr>
                                                            <tr>
                                                                     <td>
<span class="add-on" style="width : 20%;">ค้นหาหมวดเรื่อง</span>
<select class='span6'  name="menu_master_show" id="menu_master_show" onchange="changeFunc(value);">
<?php   
//echo "<option value='' >แสดงทุกรายการ</option>";
foreach ($upload_menu_type as $row) { 
if($select_menu==$row['type_id']){
echo "<option value=".$row['type_id'].">".$row['type_name']." </option>";	}
        if($select_menu!=$row['type_id']){
echo "<option value=".$row['type_id'].">".$row['type_name']." </option>";
}
        } 
echo "<option value='' >แสดงทั้งหมด</option>";
        ?>     
                                    </select>
                                    </td>
                                    <td>
                                    </td>
                                    </tr>
                                    <td><br></td>
                                    <tr>
                                    <td>
                                    <span class="add-on"  style="width : 20%;  text-align: left;">หัวข้อเรื่องรอง</span>
                                    <select class='span6'  name="menu_second_show" id="menu_second_show" >
                                    <?php   foreach ($upload_menu_sub as $row) { 
                                    echo "<option value=".$row['class_id'].">".$row['type_name']." -> ".$row['class_name']."</option>";
                                    }  
                                    ?>
                                    </select>
                                    <br>
                                    <br>
                            <span class="add-on" style="width : 18%;  text-align: left;">>เพิ่มหัวเรื่องย่อ</span>
                            <input type='text' id='menu_sub' name='menu_sub' class='span6'/></td>
                            <td valign="bottom">		
                            <a onclick="document.getElementById('menu_save').submit()" href="#" class="btn btn-small btn-danger" >
                            <i  class="btn-icon-only icon-save"  ></i>
                            </a>
                                    </td>
                                    </tr>
                                    </table>
                            </div>				
                            </div>
                                    <div style ='background-color: #ffffff;'>
                                    </div >
                            <div class="input-prepend">
                            </div>
                            </label>

							</div>
                          <?php echo form_close(); ?>
	</div>
	
	<div align="center">
	</div>
	</div>
<br>
	
	<div class="span11"  style="margin-left : 25%">
	 <div class="container-signin">
	 <?php $attributes = array('id' => 'upload_pdf'); 
echo form_open_multipart('http://localhost/databoxx/index.php/mainFunction/do_upload', $attributes); ?>
<?php $this->load->view('java/javascript_upload'); ?>
													<div align="center">
                                                    <legend >เพิ่มหมวดเรื่อง</legend>
													</div>
                                                    <div class="form-inner">
                                                  
                                                    <div class="input-prepend">
                                                    <div style="position:relative;">

                                                    <a class='' href='javascript:;'>
                                                    <table width="41%" border="0">
													<tr>
													  <div class="input-prepend">
                                                    <span class="add-on" style="width : 15%;  text-align: left;"><i class="icon-pencil"  ></i>  เรื่อง</span>
                                                    <input type='text' class='span6' id='head' name='head' />
                                                    </div>
													</tr>
                                                    <tr>
                                                    <td width="10px" > 
													<br>
												
													
                                       
	
   
	   <div class="btn btn-default btn-file1"><span class="add-on" style="width : 15%;  text-align: left;">  แนบไฟล์</span> <input type="text"  id="filename"  placeholder="คลิกเพื่อทำการแนบไฟล์"  readonly/></input> <input type="file" id="file" name="userfile" onchange="setfilename(this.value);"/>
        &nbsp;&nbsp;  </input> </div> 
	

												
													

													</td>
													
                                                    </tr>
                                                    </table>
                                                    </div>				
                                                    </div>
                                                    <div class="input-prepend">
                                                    <span class="add-on" style="width : 15%;  text-align: left;">หมวดเรื่อง</span>
                                                    <select class='span6'>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                    </select>
                                                    </div>
                                                 
                                                    <table>
                                                    <tr>
                                                    <td>   <div class="input-prepend"><span class="add-on" >หมวดเรื่อง</span>
                                                    <select class='span6'>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                    <option value=""></option>
                                                    </select></td>
                                                    <td  valign="bottom" align="right"> 
							                        <div class="input-prepend" >
													<a class="flip"  >
                                                     <span class="add-on" >  + </span>
                                                    </a>
                                                    </div>
                                                    
                                                    </td>
                                                    </tr>
                                                   
                                                    </div>
													 </table>
													  <table>
													
                                                    <div class="input-prepend">
                                                     <span class="add-on" style="width : 15%;  text-align: left;">หน่วยของเจ้าเรื่อง</span>
                                                    <input type='text' class='span6' id='serach' />
                                                    </div>
                                                    <div class="input-prepend">
                                                     <span class="add-on" style="width : 15%;  text-align: left;">คำค้นหา</span>
                                                    <input type='text' class='span6' id='serach'  />
                                                    </div>
                                                    <div class="input-prepend">
                                                     <span class="add-on" style="width : 40%;  text-align: left;" style="width : 15%;">รายละเอียด</span><br>
                                                    <textarea rows="4" cols="1" class='span6' ></textarea>
                                                    </div>
                                                    </label>
                                                    </div>
													 </table>
                                                    <footer class="signin-actions">
                                         
													<a onclick="document.getElementById('upload_pdf').submit()" href="#" class="btn btn-small btn-danger">
                                                    <i   class="btn-icon-only icon-save"  >บันทึก</i>
                                                    </a>
													   
                                                    </footer>
                                                    </div>
                                                    <div class="row">          
                                    </div>
                                    </div>
									</div>
									</div>
                                    <?php $this->load->view('java/javascript_upload'); ?>
                                    <?php    ?>
                                    <?php echo form_close(); ?>
                                    <?php $attributes = array('id' => 'myform'); 
                                    echo form_open('http://localhost/databoxx/index.php/mainFunction/save', $attributes); ?>
                                    <div class="span21">
                                    <input type="hidden" name="check" id="check" ></input>
<br>
<br>
                                    <table id="sample-table" class="table table-hover table-bordered tablesorter" >
                                    <thead>
                                    <tr>
                                    <th>รหัส</th>
                                    <th>เรื่อง</th>
                                    <th style="width: 30%" >คำค้นหา</th>
                                    <th style="width: 70px" >คำสัง</th>
                           
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <input type="hidden" name="databox_save" id="databox_save" > </input>
                                    <input type="hidden" name="subject_save" id="subject_save" > </input>
                                    <input type="hidden" name="databox_search_text_save" id="databox_search_text_save" > </input>
<?php

foreach ($upload as $row) { 

$databox_id       = $row['databox_id']; 
$subject          = $row['subject']; 
$databox_search  = $row['databox_search']; 
$databox_id_text  = $databox_id."id"; 
$subject_text  = $databox_id."subject"; 
$databox_search_text  = $databox_id."search"; 
$databox_id_div  = $databox_id."id_div"; 
$subject_div = $databox_id."subject_div"; 
$databox_search_div  = $databox_id."search_div"; 
$save_id  = $databox_id."save"; 
$add_id  = $databox_id."add";  

?>
                                    <script>
                                    //alert(<?php echo $databox_id;?>);
                                    </script>
                                    <tr>
                                    <td>
                                    <input type="text" name="databox_id" id="<?php echo  $databox_id_text;  ?>" value="<?php echo  $databox_id  ?>"   
                                    onkeypress="return runScript(event)" style="display: none" >
                                    <div id="<?php echo  $databox_id_div;  ?>"><?php echo  $databox_id  ?></div>
                                    </td>
                                    <td>
                                    <input type="text" name="subject" id="<?php echo  $subject_text;  ?>" value="<?php echo  $subject  ?>" 
                                    onkeypress="return runScript(event)" style="display: none" >
                                    <div id="<?php echo  $subject_div;  ?>"><?php echo  $subject  ?></div>
                                    </td>
                                    <td>
                                    <input type="text" name="databox_search"   id="<?php echo  $databox_search_text;  ?>" value="<?php echo  $databox_search  ?>" onkeypress="return runScript(event)" style="display: none" >
                                    <div id="<?php echo  $databox_search_div;  ?>" ><?php echo  $databox_search  ?>
                                    </div></td>
                                    <td class="td-actions"  >
                                            <div id="<?php echo  $add_id;  ?>"  >
                                    <a href="javascript:;" class="btn btn-small btn-info">
                                    <i class="btn-icon-only icon-ok"  onClick="add(
                                            '<?php echo  $databox_id_text  ?>','<?php echo  $subject_text ?>','<?php echo  $databox_search_text; ?>',
                                            '<?php echo  $databox_id  ?>','<?php echo  $subject  ?>','<?php echo  $databox_search  ?>',
                                            '<?php echo  $databox_id_div  ?>','<?php echo  $subject_div  ?>','<?php echo  $databox_search_div  ?>',
                                            '<?php echo  $save_id;  ?>','<?php echo  $add_id;  ?>');"></i>
                                    </a>
                                             <a href="javascript:;" class="btn btn-small btn-danger">
                                    <i class="btn-icon-only icon-remove" onClick="del_row(
                                            '<?php echo  $databox_id_text  ?>','<?php echo  $subject_text ?>','<?php echo  $databox_search_text; ?>',
                                            '<?php echo  $databox_id  ?>','<?php echo  $subject  ?>','<?php echo  $databox_search  ?>',
                                            '<?php echo  $databox_id_div  ?>','<?php echo  $subject_div  ?>','<?php echo  $databox_search_div  ?>',
                                            '<?php echo  $save_id;  ?>','<?php echo  $add_id;  ?>');"></i>
                                    </a>
                                    </div>
                                            <div id="<?php echo  $save_id;  ?>" style="display: none" >
                                    <a href="javascript:;" class="btn btn-small btn-info">
                                    <i class="btn-icon-only icon-save"  onClick="save(
                                            '<?php echo  $databox_id_text  ?>','<?php echo  $subject_text ?>','<?php echo  $databox_search_text; ?>',
                                            '<?php echo  $databox_id  ?>','<?php echo  $subject  ?>','<?php echo  $databox_search  ?>',
                                            '<?php echo  $databox_id_div  ?>','<?php echo  $subject_div  ?>','<?php echo  $databox_search_div  ?>',
                                            '<?php echo  $save_id  ?>');"  ></i>
                                    </a>
                                                     <a href="javascript:;" class="btn btn-small btn-danger">
                                                <i class="btn-icon-only icon-remove" onClick="close_row(
                                                        '<?php echo  $databox_id_text  ?>','<?php echo  $subject_text ?>','<?php echo  $databox_search_text; ?>',
                                                        '<?php echo  $databox_id  ?>','<?php echo  $subject  ?>','<?php echo  $databox_search  ?>',
                                                        '<?php echo  $databox_id_div  ?>','<?php echo  $subject_div  ?>','<?php echo  $databox_search_div  ?>',
                                                        '<?php echo  $save_id;  ?>','<?php echo  $add_id;  ?>');"></i>
                                                </a>
                                                </div>
                                                </td>
                                                </div>	    
                                                </tr>
                                             
<?php $this->load->view('java/javascript_upload'); ?>
<?php   } ?>
                                                </tbody>
                                                </table>																									
                                                </div>
                                                </div>
                                                </div>
                                                </div>
<?php echo form_close(); ?>
<?php $this->load->view('footer/footer'); ?>

