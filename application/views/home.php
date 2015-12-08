
<?php $this->load->view('java/javascript_head.php'); ?>
<?php $this->load->view('menu/menu'); ?>


<?php //<link href="../../asset/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> ?>
<link href="../../asset/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
<link href="../../asset/css/custom.css" rel="stylesheet" type="text/css"/>

    <section class="page container">
    <div class="row">
           
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">

function postData(x){
	

	document.getElementById('form2').target = '#uploader';
	document.getElementById('data2').value = x;
	$.post("http://localhost/j3databoxNEW/index.php/mainFunction/databox_popup", { data: $("#data2").val()}, 
		function(data){
			$("#divPostData").html(data);
		}

	);
}
</script>



<body>
<!-- where the response will be displayed -->

  <input name="data2" type="hidden" id="data2" size="40" />
   <div class="span15" style="margin-left: 8%">
			        <div class="box" >
                    <div class="box-header">
                        <i class="icon-bookmark"></i>
             <h5>UNIT</h5>
				<button class="btn btn-box-right" id="button_unit" onclick="document.getElementById('box-content').style.display = 'block';
				document.getElementById('button_unit').style.display = 'none';document.getElementById('button_unit_hidden').style.display = 'block' " >
             <i class="icon-reorder"></i>
          </button>
		  	<button class="btn btn-box-right" id="button_unit_hidden"  style="display: none" onclick="document.getElementById('box-content').style.display = 'none'; document.getElementById('button_unit').style.display = 'block'; document.getElementById('button_unit_hidden').style.display = 'none';  " >
             <i class="icon-reorder"></i>
          </button>
		  <div id='databox_popup'></div>
<form id="form2" name="form2" method="post" action="">
  <div id="divPostData"></div>
                    </div>
                    <div class="box-content" id="box-content" name="box-content"   style="display: none">
                        <div class="btn-group-box">
                        <table width="100%" border="0">
              <tr>
				
	          
           
                    <?php  
					foreach ($unit as $ru) {  
						if($ru['group_Id']=="1") {
							
							if($ru['short_division']!="สน.ผบช."){
						
						echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'>(0) <div  style='margin-top: -30px;  margin-left: 115px;  background-color: red; width: 0.9%;  height: 2%; text-align:center; position: absolute; color: #ffffff;' >1</div> </h0><br/>".$ru['short_division']."</button>";
						
							}
							} 

                                if($ru['group_Id']=="5") {
							if($ru['short_division']=="สน.ผบช."){
									echo "<button class='btn1'></button><button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'>".$ru['divisid']." (0)</h0><br/>".$ru['short_division']."</button>";
								}
                          } 
							
						} ?>
                      
                        <td><?php    foreach ($unit as $ru) {  	   
						
						} ?></td>
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
                        <td><?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="3") {
								echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'>(0)</h0><br/>".$ru['short_division']."</button>";
								} 
						} ?></td>
                        <td>&nbsp;</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td> <?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="4") {
							echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'>(0)</h0><br/>".$ru['short_division']."</button>";
						} 
						} ?></td>
                        <td>&nbsp;</td>
                        <td> </td>
                        </tr>
                        <tr>
                        <td>	 <?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="5") {
							if($ru['short_division']!="สน.ผบช."){
								echo "<button  name='Button2' id='button2' value='Post'  class='btn' onmouseover=postData('".$ru['divisid']."')  data-toggle='modal' data-target='#uploader' style='cursor:pointer' /><h0 style='color:blue'> (0)</h0><br/>".$ru['short_division']."</button>";
							}
					
						}
						
						
						} 
						?>
					

					
						
						

<?php



?>
					</form>
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
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list">
                            <i class="icon-reorder"></i>
                        </button>
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
  