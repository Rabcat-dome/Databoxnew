
<script type="text/javascript">
	$(document).ready(function() {
		$(".flip").click(function() {
			$(".panel_hidden").slideToggle("slow");
		});
	});
</script>
<?php
$test=$_POST['data1'];
$pieces = explode("-", $test);
?>												

 <div class="text-right">
                                                  

</div>
<div class="input-prepend"><span class="add-on"  >หมวดย่อย</span>
                                                <select class='span6'  onchange="getSelect(this)">
													<?php
													if($pieces[1]=="division"){
											                           
													foreach ($data_division as $row){ 
														 $row_id = $row["divisId"];
														 if( $pieces[0] ==$row_id){
													$group_Id = $row["group_Id"];
													echo "<option value='".$group_Id."'>".$row["groupname"]."</option>";
													  ?>
												    <script>document.getElementById("group_Id").value=<?php echo  $group_Id ?>;</script>
														   <?php
													}
													    }
														}		
														
													?>
													<?php
													if($pieces[1]=="data_type"){
													foreach ($data_type_up as $row){ 
													$group_name = $row["type_id"];
													if($pieces[2]==$group_name){
												    $group_Id = $row["group_Id"];
													echo "<option value='".$group_Id."'>".$row["groupname"]."</option>"; 
													       ?>
												    <script>document.getElementById("group_Id").value=<?php echo  $group_Id ?>;</script>
														   <?php
														   }
													    }
													}
													?>
													
                                                    </select>
													<script>
													function getSelect(sel1) {
                                                    var value1 = sel1.value;  
													document.getElementById("group_Id").value=value1;
                                                     }
													</script>

														<a class="flip"  >
                                                     <span class="add-on" >  + </span>
                                                    </a>