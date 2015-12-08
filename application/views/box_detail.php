
<?php

$data1 =$_POST['data1'];
?>
<?php    $tes  ="../../uploads/".$data1.".pdf"?>
<embed src="<?php echo  $tes;?>"  width="500" height="450"></embed>
<input type="hidden" id="data1" name="data1" value="<?php echo $data1 ?>"></input>
<?php  foreach ($box_detail as $row) { 
                                        $databox_id	    = $row['databox_id'];
										$subject	    = $row['subject'];
										$divisname	    = $row['divisname'];
										$databox_search	= $row['databox_search'];
										$databox_detail = $row['databox_detail']; 
										$uploaded_url = $row['uploaded_url'];
									    }  ?>
                                                 

													<div align="center">
                                                    <legend > </legend>
													</div>
                                                    <div class="form-inner">
                                                  
                                                    <div class="input-prepend">
                                                    <div style="position:relative;">

                                                    <a class='' href='javascript:;'>
                                                    <table border="0">
													<tr>
													 <td>
													<div class="input-prepend">
										          <span class="add-on" style="width: 100px; text-align: left; font-size: 12px;" >เรื่อง</span>
                                                   
                                                    </div>
														</td>
														<td>
														<label style="background-color :#ffffff; height: 25px; width : 350px; border-style: groove; font-size: 12px;"><?php echo $subject ?></label>
														</td>

													</tr>
                                                    <tr>
                                   
                                                    </tr>
                                                  
                                                    </div>				
                                                    </div>
													 <tr>
													    <td>
                                                             <div class="input-prepend">
                                                             <span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">หมวดเรื่อง</span>
                                                              </div>
													    </td>
														<td>
														     <label style="background-color :#ffffff; height: 25px; width : 350px; border-style: groove; font-size: 12px;"><?php echo $divisname ?></label>
														</td>
                                                     </tr>
                                                
													<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 14px;">หน่วยของเจ้าเรื่อง</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 350px; border-style: groove; font-size: 12px;"></label>
														</td>
                                                    </tr>
														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">เจ้าของเรื่อง</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 350px; border-style: groove; font-size: 12px;">อยู่ระหว่างดำเนินการ</label>
														</td>
                                                    </tr>
														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">คำค้นหา</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 350px; border-style: groove; font-size: 12px;"><?php echo $databox_search ?></label>
														</td>
                                                    </tr>

														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left;  font-size: 12px;">รายละเอียด</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 350px; border-style: groove; font-size: 12px;" ><?php echo $databox_detail ?></label>
														</td>
                                                    </tr>

														<tr>
                                                    <td>  
													       <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">เอกสารแนบ</span></div>
                                                    </td>
													 	<td>
														     <label style="background-color :#ffffff; height: 25px; width : 350px; border-style: groove; font-size: 12px;" ><?php echo $uploaded_url ?></label>
														</td>
                                                    </tr>

													 </table>
												