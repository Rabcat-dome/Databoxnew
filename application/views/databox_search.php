									    <?php $this->load->view('header/header_title'); ?>
										<?php $this->load->view('menu/menu'); ?>
										<?php $this->load->view('java/javascript_head.php'); ?>

				 <input type  = "hidden" id="group_Id"         name="group_Id"      <?php echo "value=".$group_Id_f; ?>></input>
				  <input type  = "hidden" id="divis_id"         name="divis_id"      <?php echo "value=".$divis_id_f; ?>></input>
                  <input type  = "hidden" id="data_group"       name="data_group"      ></input>
				  <?php $this->load->view('java/javascript_box'); ?>

      		  <div id="span8" class="span12">

                <div class="row">
                   	
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
									<th>หมวดงาน</th>
                                    <th>ชื่องาน</th>
							
                                </tr>
                            </thead>
                            <tbody> 
							  <input type="hidden" id="code" cols="45" rows="5"></textarea>
                            <?php    foreach ($last_update as $row) {  
								$hidden=$row['databox_id'];
						echo "<tr>";
						echo "<td onclick=\"chk(".$hidden.")\"  width='20%'>".$row['date_upload']."</a></td>";	
						echo "<td onclick=\"chk(".$hidden.")\" width='20%'>".$row['groupname']."</a></td>";	
						echo "<td onclick=\"chk(".$hidden.")\"  width='100%'>".$row['subject']."</a></td>";
						echo "</tr>";
						} ?>

					
                            </tbody>
                        </table>
                </div>
                </div>
            </div>
			 </div>



			 <div class="span4">
               
                
					  
                  
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
                
             
            </div>

                        </div>

                    </div>
                
                 
                        </div>

                    </div>
                
                </div>
            </div>
                         
                    <?php $this->load->view('footer/footer'); ?>
                    




