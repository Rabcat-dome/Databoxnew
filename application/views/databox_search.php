									    <?php $this->load->view('header/header_title'); ?>
										<?php $this->load->view('menu/menu'); ?>
										<?php $this->load->view('java/javascript_head.php'); ?>

				 <input type  = "hidden" id="group_Id"         name="group_Id"      <?php echo "value=".$group_Id_f; ?>></input>
				  
                  <input type  = "hidden" id="data_group"       name="data_group"      ></input>
				  <?php $this->load->view('java/javascript_box'); ?>
<div class="span2">


</div>
 <?php	$attributes = array('id' => 'upload_pdf'); 
echo form_open_multipart('http://127.0.0.1/j3databoxnew/index.php/mainFunction/databox_search', $attributes); ?>
 <script>
   
	  $(function() {
		  $( "#from-datepicker" ).datepicker({
        dateFormat: "yy-mm-dd"
    });

   

    });
  </script>

  <script>
    $(function() {
		  $( "#to-datepicker" ).datepicker({
        dateFormat: "yy-mm-dd"
    });

   

    });
  </script>


      		  <div id="span8" class="span12">


  <div style="float:left; width:330px">
     <input name="from-date" type="text" id="from-datepicker"  />
  </div>

  <div style="float:left; width:330px">
     <input name="to-date" type="text" id="to-datepicker" />
  </div>
<a onclick="document.getElementById('upload_pdf').submit()" href="#"  class="btn btn-small btn-danger">
                                                        <i class="btn-icon-only icon-save"  >ค้นหา</i>
                                                        </a>
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
                                    <th>วันที่</th>
									
                                    <th>เรื่อง</th>
							
                                </tr>
                            </thead>
                            <tbody> 
							  <input type="hidden" id="code" cols="45" rows="5"></textarea>
							 
                            <?php  
				
						if($id_box==""){
						foreach ($last_update as $row) {  
						$hidden=$row['databox_id'];
						echo "<tr>";
						echo "<td onclick=\"chk(".$hidden.")\"  width='20%'>".$row['date_upload']."</a></td>";	
						echo "<td onclick=\"chk(".$hidden.")\"  width='100%'>".$row['subject']."</a></td>";
						echo "</tr>";
						} 
						};
						if($id_box!=""){
						foreach ($last_update as $row) {  
							$hidden=$row['databox_id'];
							if($id_box==$hidden){
						
						echo "<tr>";
						echo "<td onclick=\"chk(".$hidden.")\"  width='20%'>".$row['date_upload']."</a></td>";	
						echo "<td onclick=\"chk(".$hidden.")\"  width='100%'>".$row['subject']."</a></td>";
						echo "</tr>";
							}
						} 
						};
						?>

					
                            </tbody>
                        </table>  <div align="center"><?php echo $this->pagination->create_links(); ?></div>
                </div>
                </div>
            </div>
			 </div>



			 <div class="span4">
               
                
					  
                  
<script type="text/javascript">
$(document).ready(function(){
     $("#tableId tr").click(function(){
 $.post("http://127.0.0.1/j3databoxNEW/index.php/mainFunction/box_detail", { 
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
                         <?php echo form_close(); ?>
                    <?php $this->load->view('footer/footer'); ?>
                    




