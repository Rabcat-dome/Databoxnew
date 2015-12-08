
<?php $this->load->view('menu/menu'); ?>


<link href="../../asset/css/custom.css" rel="stylesheet" type="text/css"/>

    <section class="page container">
    <div class="row">
           





<!-- where the response will be displayed -->

  <input name="data2" type="hidden" id="data2" size="40" />
   <div class="span7" style="margin-left: 0%">
			        <div class="box" >
                    <div class="box-header">
                        <i class="icon-bookmark"></i>
             <h5>UNIT</h5>
				  <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list2">
              <i class="icon-reorder"></i>
          </button>

		 


                    </div>
                    <div class="box-content box-list2 collapse out" >
                        <div class="btn-group-box">
                        <table width="100%" border="0">
              <tr>
				
	          
           
                    <?php  
					foreach ($unit as $ru) {  
						if($ru['group_Id']=="1") {
						
						echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'>(0) <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
        0 0 0.3em #FF2000;' >0</div> </h0><br/>".$ru['short_division']."</button>";
						
							} 
            
						} ?>
                      

                        </tr>
                        
                        <tr>
                        <td><?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="3"&&$ru['short_division']!="ผกม.สวฝ.") {
								echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'>(0)</h0><br/>".$ru['short_division']."</button>";
								} 
						} ?></td>
                        <td>&nbsp;</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td> <?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="4"||($ru['group_Id']=="3"&&$ru['short_division']=="ผกม.สวฝ.")) {
							echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'>(0)</h0><br/>".$ru['short_division']."</button>";
						} 
						} ?></td>
                        <td>&nbsp;</td>
                        <td> </td>
                        </tr>
                        <tr>
                        <td><?php    foreach ($unit as $ru) {  
            if($ru['group_Id']=="2") {
              echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'>(0)</h0><br/>".$ru['short_division']."</button>";
            } 
            } ?></td>
                        <td>&nbsp;</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>	 <?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="5") {
							if($ru['short_division']!="สน.ผบช."){
								echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'> (0)</h0><br/>".$ru['short_division']."</button>";
							}
					
						}
						
						
						} 
						?></div>
					

						</td>
                        <td>&nbsp;</td>
                        <td> </td>
                       </tr>
                      </table>

                        
                        </div>
                    </div>
					</div>
                        </div>
                  
                     <div class="span19" >
					  <div class="box-content" >
					    
                             <div class="box pattern pattern-sandstone">
                    <div class="box-header">
                        <i class="icon-list"></i>
                        <h5>Last Update</h5>

                    </div>
                    <div class="box-content box-list collapse in">
                        <ul>
                           
                       <li>
                       <div>
                       <p class='news-item-preview'><table width="100%" border="0">
  <tr>
    <td width="10%" align="left">วันที่</td>
    <td width="20%" align="left">หมวดงาน</td>
    <td width="80%" align="left" >ชื่องาน</td>
	<td >กอง</td>
  </tr>
						</table>               
						</p>
                       <td align='left'>
                       </div> 
                       </li>   
                        

                        <?php
						
                               foreach ($last_update as $row) {
                               echo  "<li>";
                               echo  "<div>";
							   echo "<p class='news-item-preview'><table width='100%' border='0'>
								<tr>
								<td width='10%' align='left'>".$row['date_upload']."</td>
								<td width='20%' align='left'>".$row['groupname']."</td>
								<td width='80%' align='left'>".$row['subject']."</td>
							    <td>".$row['short_division']."</td>
								</tr>
								</table> 
								</p>";
                             
                    
                               echo  "<td align='left'> ";
                               echo  "</div>";    
                               echo  "</li>";   
                            
								
                                       }
                          
                              ?>

                            </ul>
                        <div class="box-collapse">
                            <button class="btn btn-box" data-toggle="collapse" data-target=".more-list">
                          <a href="index1">หน้า 2</a>  
						
                            </button>
                        </div>
                        <ul class="more-list collapse out">
                            <li>
                                <div>
                                    <a href="#" class="news-item-title">หัวข้อเรื่อง</a>
                                    <p class="news-item-preview">เนื้อเรื่อง</p>
                                </div>
                            </li>
                          
                            
                        </ul>
                    </div>

                </div>
            </div>


            <div class="span8">
                
                   
            
        </div>
        <div class="row">
            <div class="span8">
                       
            </div>
            <div class="span8">
          
            </div>
                </div>
            </div>
        </div>
        <div class="row">
         
            
            
                    
                        <code style="background: none; border: none;">
                           
                        </code>
                    </div>

                    
                    <?php $this->load->view('footer/footer'); ?>
  