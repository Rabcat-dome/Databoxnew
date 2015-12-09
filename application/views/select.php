
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
?>												<div class="input-prepend"><span class="add-on"  >หมวดย่อย</span>
                                                <select class='span6' style="">
													<?php
													if($pieces[1]=="division"){
													foreach ($data_group_up as $row){ 
														if($pieces[0]==$row["divisId"]){
													echo "<option value=''>".$row["groupname"]."</option>"; }
                                                         }
														}
													
													?>
													<?php
													if($pieces[1]=="data_type"){
													foreach ($data_group_up as $row){ 
														if($pieces[0]==$row["divisId"]){
													echo "<option value=''>".$row["groupname"]."</option>"; }
                                                         }
														}
													
													?>
                                                    </select>
														<a class="flip"  >
                                                     <span class="add-on" >  + </span>
                                                    </a>