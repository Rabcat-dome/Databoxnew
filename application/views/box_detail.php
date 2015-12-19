
<?php
$data1 =$_POST['data1'];

?>


<input type="hidden" id="data1" name="data1" value="<?php echo $data1 ?>"></input>
<?php  foreach ($box_detail as $row) { 
                                        $databox_id	    = $row['databox_id'];
										$date	    = $row['date_upload'];
										$subject	    = $row['subject'];
										$divisname	    = $row['divisname'];
										$databox_search	= $row['databox_search'];
										$databox_detail = $row['databox_detail']; 
										$uploaded_url = $row['uploaded_url'];
										$upload_urlpdf = $row['upload_urlpdf'];
	
									    }  ?>
									
										<?php   $tes  ="http://127.0.0.1/j3databoxnew/uploads/".$upload_urlpdf.""?>
                                             <embed src="<?php echo  $tes; ?>"  height="450" class="span9"  ></embed>    
 
													<div align="center">
                                                    <legend > </legend>
													</div>
                                                    <div class="form-inner">
                                                  
                                                    <div class="input-prepend">
                                                    <div style="position:relative;">

                                                   
                                                    <table border="0" class="span9">
													<tr>
													 <td width="100px">
													<div class="input-prepend">
										          <span class="add-on" style="width: 100px; text-align: left; font-size: 12px;" >เลขที่เอกสาร</span>
                                                  </div>
														</td>
														<td>
														<label  style="background-color :#ffffff; height: 25px;  border-style: solid; border-width: 1px; font-size: 12px;">&nbsp; <?php echo $databox_id ?></label>
														</td>

													</tr>
                                                    <tr>
                                   
                                                    </tr>
                                                  
                                                    </div>				
                                                    </div>
													 <tr>
													    <td>
                                                             <div class="input-prepend">
                                                             <span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">ชื่อเรื่อง</span>
                                                              </div>
													    </td>
														<td>
														     <label style="background-color :#ffffff; height: 25px;   border-style: solid; border-width: 1px;  font-size: 12px;">&nbsp; <?php echo $upload_urlpdf ?></label>
														</td>
                                                     </tr>
                                                
													<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 14px;">ประเภทเอกสาร</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px;  border-style: solid; border-width: 1px; font-size: 12px;">&nbsp; <?php echo $divisname ?></label>
														</td>
                                                    </tr>
														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">หมวดย่อย</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; border-style: solid; border-width: 1px;  font-size: 12px;"></label>
														</td>
                                                    </tr>
														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left;  font-size: 12px;">วันที่จัดทำ</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px;  border-style: solid; border-width: 1px;  font-size: 12px;" >&nbsp; <?php echo $date ?></label>
														</td>
                                                    </tr>

														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">ผู้จัดทำ</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px;  border-style: solid; border-width: 1px; font-size: 12px;" ></label>
														</td>
                                                    </tr>

													 <td>  
													   <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">หน่วยงาน</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px;  border-style: solid; border-width: 1px; font-size: 12px;" ></label>
														</td>
                                                    </tr>



													 </table>
												