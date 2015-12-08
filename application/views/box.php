									    <?php $this->load->view('header/header_title'); ?>
										<?php $this->load->view('menu/menu'); ?>
									    <?php $this->load->view('menu/meunright'); ?>
										<?php $this->load->view('java/javascript_head.php'); ?>
										<?php $attributes = array('id' => 'menu_select'); 
										echo form_open('http://localhost/j3databoxNEW/index.php/mainFunction/executive', $attributes); ?>
										<?php /// $this->load->view('java/javascript_upload'); ?>

      

			
				  <input type  = "hidden" id="group_Id"         name="group_Id"      <?php echo "value=".$group_Id_f; ?>></input>
				  <input type  = "hidden" id="divis_id"         name="divis_id"      <?php echo "value=".$divis_id_f; ?>></input>
                  <input type  = "hidden" id="data_group"       name="data_group"      ></input>
			
				
				

                        
                    
						  <div id="span8" class="span12">
                <div class="row">
				<?php  
				//top.location.href=this.options[this.selectedIndex].value;
				//foreach ($box as $row) { $divis_id = $row['divisId']; }?>
                  ค้นหาหัวข้อเรื่องย่อย <select style="width:100%;" 
				  onChange="document.getElementById('data_group').value=this.options[this.selectedIndex].value; 
				   document.getElementById('menu_select').submit();" >
				
                       <?php   


					   	echo "<option value=''>เรื่องทั่วไป</option>"; 
						foreach ($data_group_select as $row) { 
						
						echo "<option value='".$row['group_Id']."'>".$row['groupname']."</option>"; } 
						   
						 ?>

							</select>		
            
				 <div id="Person-1" class="box">
                 <div class="box-header">
                            <i class="icon-user iconิ-large"></i>
                             <h5>ข้อมูล Databox</h5>
                        </div>
						   <div class="box-content box-table">
                    <table id="tableId" class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>เวลา</th>
                                    <th>ชื่องาน</th>
									<th>คนที่อัพ</th>
                                </tr>
                            </thead>
                            <tbody> 
						
                            <?php   
                             
							foreach ($box as $row) {  
							$hidden=$row['databox_id'];
						echo "<tr  >";
						echo "<td  onclick=\"chk(".$hidden.")\"  width='20%' >".$row['date_upload']."</td>";	
						echo "<td  onclick=\"chk(".$hidden.")\" width='70%'>".$row['subject']."</td>";
						echo "<td  onclick=\"chk(".$hidden.")\" width='30%'>ผู้ใช้งาน</td>";
						echo "</tr>";
						} 
						?>
					
	                    <input type="hidden" id="code" cols="45" rows="5"></textarea>
                            </tbody>
                        </table>
                </div>
                </div>
            </div>
			 </div>



			 <div class="span4">
                <div class="blockoff-left">
                
					  
                  
                       		<script type="text/javascript">
$(document).ready(function(){
     $("#tableId tr").click(function(){
 $.post("http://localhost/j3databoxNEW/index.php/mainFunction/box_detail", { 
      data1: $("#code").val()}, 
      function(data){
  $("#showajax").html(data);
      }
  );

     });
});
</script>

<div id="showajax" ></div>
                    </p>
                </div>
            </div>

                        </div>

                    </div>
                
                 
                        </div>

                    </div>
                
                </div>
            </div>
                         
                    <?php $this->load->view('footer/footer'); ?>
                    




