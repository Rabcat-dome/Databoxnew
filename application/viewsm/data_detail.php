
 
<?php // $this->load->view('header/header_title'); ?>
<?php $this->load->view('menu/menu'); ?>

                                    <div class="span15">
                                    <div class="text-right">
                                    </div>
                                    

                                                   
												
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
echo form_open('localhost/j3databoxNEW/index.php/mainFunction/menu_save', $attributes); ?>
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

				
										<?php  foreach ($databox_upload as $row) { 
										$subject	    = $row['subject'];
										$divisname	    = $row['divisname'];
										$databox_search	= $row['databox_search'];
										$databox_detail = $row['databox_detail']; 
										$uploaded_url = $row['uploaded_url'];
									    }  ?>
                                                 

													<div align="center">
                                                    <legend >หน้ารายละเอียดเอกสาร </legend>
													</div>
                                                    <div class="form-inner">
                                                  
                                                    <div class="input-prepend">
                                                    <div style="position:relative;">

                                                    <a class='' href='javascript:;'>
                                                    <table border="0">
													<tr>
													 <td>
													<div class="input-prepend">
										          <span class="add-on" style="width: 100px; text-align: left;" >เรื่อง</span>
                                                   
                                                    </div>
														</td>
														<td>
														<label style="background-color :#ffffff; height: 25px; width : 500px; border-style: groove; font-size: 10px;"><?php echo $subject ?></label>
														</td>

													</tr>
                                                    <tr>
                                   
                                                    </tr>
                                                  
                                                    </div>				
                                                    </div>
													 <tr>
													    <td>
                                                             <div class="input-prepend">
                                                             <span class="add-on" style="width: 100px; text-align: left; ">หมวดเรื่อง</span>
                                                              </div>
													    </td>
														<td>
														     <label style="background-color :#ffffff; height: 25px; width : 500px; border-style: groove; "><?php echo $divisname ?></label>
														</td>
                                                     </tr>
                                                
													<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; ">หน่วยของเจ้าเรื่อง</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 500px; border-style: groove;"></label>
														</td>
                                                    </tr>
														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; ">เจ้าของเรื่อง</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 500px; border-style: groove;">อยู่ระหว่างดำเนินการ</label>
														</td>
                                                    </tr>
														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; ">คำค้นหา</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 500px; border-style: groove;"><?php echo $databox_search ?></label>
														</td>
                                                    </tr>

														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; ">รายละเอียด</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 100%; border-style: groove;" ><?php echo $databox_detail ?></label>
														</td>
                                                    </tr>

														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; ">เอกสารแนบ</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 100%; border-style: groove;" ><?php echo $uploaded_url ?></label>
														</td>
                                                    </tr>

													 </table>
												
                                                    <footer class="signin-actions">
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
                                    echo form_open('http://localhost/j3databoxNEW/index.php/mainFunction/save', $attributes); ?>
                                    <div class="span21">
                                    <input type="hidden" name="check" id="check" ></input>
    <br>
    <br>
	<br>

<?php echo form_close(); ?>
<?php $this->load->view('footer/footer'); ?>

