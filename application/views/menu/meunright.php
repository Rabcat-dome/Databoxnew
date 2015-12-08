 							
								
								<?php $attributes = array('id' => 'menu_select'); 
echo form_open('http://localhost/j3databox/index.php/mainFunction/executive', $attributes); ?>							
 <?php $this->load->view('java/javascript_box'); ?> 
		<section class="page container">
            <div class="row">
                <div class="span4">
                    <div class="blockoff-right">
                        <ul id="person-list" class="nav nav-list">
                            <li class="nav-header">Data Box</li>
                            <li class="active">
                                     <li>
                              
                                         <li>
								    	 <input type  = "hidden" id="check_meun"          name="check_meun"       <?php echo "value=".$not; ?>></input>
										 <input type  = "hidden" id="check_meun2"         name="check_meun2"      <?php echo "value=".$not2; ?>></input>
				                         <input type  = "hidden" id="select_id_type"      name="select_id_type"  ></input>
                                         <input type  = "hidden" id="select_id"           name="select_id"       ></input>
										 <input type  = "hidden" id="select_disvisid"     name="select_disvisid" value="-"></input>
										 <?php $collapse = explode("-", $not2); 
                                              $collapse1 =$collapse[0];
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
													 echo "<a onClick=select_disvisid('".$group_Id."-".$disvis."')>".$row['divisname']."</a>";
													 echo "</li>";
													}
													if($group_Id!="1"){
													 echo "<li>";
													 echo "<a onClick=select_disvisid('".$group_Id."-".$disvis."')>".$row['divisname']."</a>";
													 echo "</li>";
													}
													
													  foreach ($division_by as $row) {  
													
												       $divisid_by   =	 $row['divisid'];
													    $divisid_by1 = $divisid_by-1;
													 if($disvis== $divisid_by1 ){
													  echo "</ul>";
													  echo "</ul>";
													}
													  }

												
												

													 
													 }
													
								
													  
													
													?>

                
                                             </div>
									
                                </div>
