 							
								
								<?php $attributes = array('id' => 'menu_select'); 
echo form_open('http://localhost/j3databoxNew/index.php/mainFunction/executive', $attributes); 
?>							
 <?php $this->load->view('java/javascript_box'); ?> 
		<section class="page container">
            <div class="row">
				 <input type  = "hidden" id="check_meun"          name="check_meun"       <?php echo "value=".$not; ?>></input>
				 <input type  = "hidden" id="check_meun2"         name="check_meun2"      <?php echo "value=".$not2; ?>></input>
				 <input type  = "hidden" id="select_id_type"      name="select_id_type"  ></input>
                 <input type  = "hidden" id="select_id"           name="select_id"       ></input>
				 <input type  = "hidden" id="select_disvisid"     name="select_disvisid" value="-"></input>
                <div class="span4" STYLE="font-family: Arial Black; font-size: 12px; ">
                    <div class="blockoff-right">
			        <div class="box" >
                    <div class="box-header">
                        <i class="icon-bookmark"></i>
             <h5>UNIT</h5>
				  <button class="btn btn-box-right" data-toggle="collapse" data-target=""   id="btn-box-right_s" onClick="document.getElementById('box-content1').style.display = 'block'; document.getElementById('btn-box-right_c').style.display = 'block'; document.getElementById('btn-box-right_s').style.display = 'none';">
               <i class="icon-reorder"></i>
          </button>

				   <button class="btn btn-box-right" data-toggle="collapse" data-target=""  id="btn-box-right_c" style="display: none"  onClick="document.getElementById('box-content1').style.display = 'none'; document.getElementById('btn-box-right_s').style.display = 'block';  document.getElementById('btn-box-right_c').style.display = 'none';">

              <i class="icon-reorder"></i>
          </button>

                    </div>
                    <div class="box-content" id="box-content1" style="display: none" >
                        <div class="btn-group-box">
                        <table width="100%" border="0">
              <tr>
                    <?php  
					foreach ($unit as $ru) {  
						if($ru['group_Id']=="1") {
						$group_Id_r = $ru['group_Id'];
                        $disvis_r = $ru['divisid'];
						echo "<button   onclick=\"onClick=box_bn('".$group_Id_r."-".$disvis_r."')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(".$this->j3databox->get_num_box($ru['group_Id']).") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
        0 0 0.3em #FF2000;' >".$this->j3databox->get_num_box_week($ru['group_Id'])."</div> </h0><br/>".$ru['divisid']." </button>";
						
							} 
           
						} ?>
                      

                        </tr>
                        
                        <tr>
                        <td><?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="3"&&$ru['short_division']!="¼¡Á.ÊÇ½.") {
							     $group_Id_r = $ru['group_Id'];
                                $disvis_r = $ru['divisid'];
								echo "<button  onclick=\"onClick=box_bn('".$group_Id_r."-".$disvis_r."')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(".$this->j3databox->get_num_box($ru['group_Id']).") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
        0 0 0.3em #FF2000;' >".$this->j3databox->get_num_box_week($ru['group_Id'])."</div> </h0><br/> ".$ru['short_division']."</button>";
								} 
						} ?></td>
                        <td>&nbsp;</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td> <?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="4"||($ru['group_Id']=="3"&&$ru['short_division']=="¼¡Á.ÊÇ½.")) {
							 $group_Id_r = $ru['group_Id'];
                                $disvis_r = $ru['divisid'];
							echo "<button   onclick=\"onClick=box_bn('".$group_Id_r."-".$disvis_r."')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(".$this->j3databox->get_num_box($ru['group_Id']).") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
        0 0 0.3em #FF2000;' >".$this->j3databox->get_num_box_week($ru['group_Id'])."</div> </h0><br/>".$ru['short_division']."</button>";} 
						} ?></td>
                        <td>&nbsp;</td>
                        <td> </td>
                        </tr>
                        <tr>
                        <td><?php    foreach ($unit as $ru) {  
            if($ru['group_Id']=="2") {
				 $group_Id_r = $ru['group_Id'];
                  $disvis_r = $ru['divisid'];
              echo "<button  onclick=\"onClick=box_bn('".$group_Id_r."-".$disvis_r."')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(".$this->j3databox->get_num_box($ru['group_Id']).") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
        0 0 0.3em #FF2000;' >".$this->j3databox->get_num_box_week($ru['group_Id'])."</div> </h0><br/>".$ru['short_division']."</button>";} 
            } ?></td>
                        <td>&nbsp;</td>
                        <td></td>
                        </tr>
                        <tr>
                        <td>	 <?php    foreach ($unit as $ru) {  
						if($ru['group_Id']=="5") {
							if($ru['short_division']!="Ê¹.¼ºª."){
								 $group_Id_r = $ru['group_Id'];
                                $disvis_r = $ru['divisid'];
								echo "<button  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(".$this->j3databox->get_num_box($ru['group_Id']).") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
        0 0 0.3em #FF2000;' >".$this->j3databox->get_num_box_week($ru['group_Id'])."</div> </h0><br/>".$ru['short_division']."</button>";}
					
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




                        <ul id="person-list" class="nav nav-list">
                            <li class="nav-header">Data Box</li>
                            <li class="active">
                                     <li>
                              
                                         <li>
								    
										 <?php $collapse = explode("-", $not2); 
                                              $collapse1 =$collapse[0];

										     if(isset($collapse[1])){  $collapse2 =$collapse[1];}else{$collapse2 = "";} 
											
										 ?>
										  <?php  foreach ($data_type as $row) {  
										             $type_id=$row['type_id'];
													 echo "<li>";
													 echo "";  
													 echo "<a onClick=select_id_type('".$type_id."') > ".$row['type_name']."<i class='icon-chevron-right pull-right'></i></a>";
													 echo "</li>";
													 }
										 ?>
										 <li>
										 <?php 
										     $check='0';
											 $collapse="";
											 foreach ($division_group as $row) {  
											 $group_Id = $row['group_Id'];
											 $disvis   = $row['divisid'];
											 $group_title  = $row['group_title'];
											 if($check!=$group_Id){	
										     $check++;
											 echo	"<a onClick=select_disvisid('".$group_Id."-')  href='javascript:;' data-toggle='collapse' data-target='#".$disvis."'>
										     ".$row['group_title']."<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
											if($group_Id==$collapse1)
												 {
										     echo "<ul id='".$group_Id."' class=''>";
												 }
											if($group_Id!=$collapse1)
												 {
										     echo "<ul id='".$group_Id."' class='collapse'>";
												 }
										
											 echo "<ul  id='person-list' class='nav nav-list'>";
													 }
												 if($group_Id=="1"){
													 echo "<li>";
													 //echo "<a onClick=select_disvisid('".$group_Id."-".$disvis."')>".$row['divisname']."</a>";
                                                     
													 

													  echo	"<a onClick=select_disvisid('".$group_Id."-".$disvis."') href='javascript:;' data-toggle='collapse' data-target='#".$disvis."'>
										                    ".$row['divisname']."<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
												     if($disvis==$collapse2){
													     echo "<ul id='".$disvis."' class=''>";
													  }
													    if($disvis!=$collapse2){
													     echo "<ul id='".$disvis."' class='collapse'>";
													  }
														 
													     foreach ($data_group as $row) { 
															
														$divisId_g	= $row['divisId'];
														if($divisId_g==$disvis){
													     echo "<li>";
														 echo "<a onClick=select_disvisid('".$group_Id."-".$disvis."')>".$row['groupname']."</a>";
														 //echo $row['groupname'];
														                       }
														 echo "</li>";
														 }
												
												     echo "</ul>";
													 
													 
													// echo "</li>";
													}
													if($group_Id!="1"){
													 echo "<li>";
													 //echo "<a onClick=select_disvisid('".$group_Id."-".$disvis."')>".$row['divisname']."</a>";
                                                           
												       echo	"<a  onClick=select_disvisid('".$group_Id."-".$disvis."') href='javascript:;' data-toggle='collapse' data-target='#".$disvis."'>
										              ".$row['divisname']."<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
													  if($disvis==$collapse2){
													     echo "<ul id='".$disvis."' class=''>";
													  }
													    if($disvis!=$collapse2){
													     echo "<ul id='".$disvis."' class='collapse'>";
													  }
													   // echo "<li>";
													    foreach ($data_group as $row) { 
														$group_id_g	= $row['group_Id'];
														$divisId_g	= $row['divisId'];
														if($divisId_g==$disvis){
													     echo "<li>";
														 echo "<a onClick=select_disvisid('".$group_Id."-".$disvis."-".$group_id_g."')>".$row['groupname']."</a>";
														 //echo $row['groupname'];
														                       }
														 echo "</li>";
														 }
												
														  echo "</ul>";


													 echo "</li>";
													}
													 echo "</li>";
													  foreach ($division_by as $row) {  
													
												        $divisid_by   =	 $row['divisid'];
													    $divisid_by1 = $divisid_by-1;
													 if($disvis== $divisid_by1 ){
													  echo "</ul>";
													  echo "</ul>";
													}
													  }

												
												

													 
													 }
													
								
													  
													form_close();
													?>



                
                                             </div>
									
                                </div>
