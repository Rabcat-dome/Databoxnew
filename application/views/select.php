
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
                                                    <script>
													function getSelect(sel1) {
                                                    var value1 = sel1.value;  
													document.getElementById("group_Id").value=value1;
                                                     }
													</script>

</div>
<div class="input-prepend"><span class="add-on"  >หมวดย่อย</span>
                                                <select class='span6'  onchange="getSelect(this)">
													<?php
													if($pieces[1]=="division"){
												      
													foreach ($data_group_up as $row){ 
														if($pieces[0]==$row["divisId"]){
															$group_Id = $row["group_Id"];
													echo "<option value='".$group_Id."'>".$row["groupname"]."</option>"; }
                                                         }
														}												
													?>
													<?php
													if($pieces[1]=="data_type"){
													foreach ($data_group_up as $row){ 
														if($pieces[0]==$row["dataId"]){
															$group_Id = $row["group_Id"];
													echo "<option value='".$group_Id."'>".$row["groupname"]."</option>"; }
                                                         }
														}
													
													?>
                                                    </select>

														<a class="flip"  >
                                                     <span class="add-on" >  + </span>
                                                    </a>