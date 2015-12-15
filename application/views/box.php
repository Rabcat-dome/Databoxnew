<?php $this->load->view('header/header_title'); ?>
<?php $this->load->view('menu/menu');  ?>
<?php $this->load->view('menu/menuright'); ?>
<?php /// $this->load->view('java/javascript_upload'); ?>
<?php echo $not45;?>
				  <input type  = "hidden" id="group_Id"         name="group_Id"      <?php echo "value=".$group_Id_f; ?>></input>
				  <input type  = "hidden" id="divis_id"         name="divis_id"      <?php echo "value=".$divis_id_f; ?>></input>
                  <input type  = "hidden" id="data_group"       name="data_group"      ></input>
				   <input type  = "hidden" id="code"       name="code"   value=    ></input>
			

                       
						  <div id="span8" class="span12">

                <div class="row">
				<?php  
				//top.location.href=this.options[this.selectedIndex].value;
				//foreach ($box as $row) { $divis_id = $row['divisId']; }?>
            
            
				 <div id="Person-1" class="box">
                 <div class="box-header">
                            <i class="icon-user iconิ-large"></i>
                             <h5>ข้อมูล Databox</h5>
                        </div>
						   <div class="box-content box-table">
                    

						<table id='tableId' class='table table-hover tablesorter'>
                            <thead>
                                <tr>
                                    <th>เวลา</th>
                                    <th>ชื่องาน</th>
                  
                                </tr>
                            </thead>
                            <tbody>
        <?php                     
              foreach ($box as $row) {  
              $hidden=$row['databox_id'];
            echo "<tr >";
            echo "<td  onclick=\"chk(".$hidden.")\"  width='20%' >".$row['date_upload']."</td>"; 
            echo "<td  onclick=\"chk(".$hidden.")\" width='70%'>".$row['subject']."</td>";
            echo "</tr>";
            }  ?>

           </tbody>

                        </table>
                                <div align="center"><?php echo $this->pagination->create_links(); ?></div>
            



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
                         
                    <?php $this->load->view('footer/footer'); ?>
                    




