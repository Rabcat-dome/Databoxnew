 <select class='span5' name="databox_group"  class="span5"  id="<?php echo  $databox_group_text;  ?>"
									  onkeypress="return runScript(event)" 
									  style="display: none;  width: 150px;"  >
													
						

													
													<?php

													  if($change_division_group_up!=""){
													foreach ($data_group_up as $row){
										            $group_Id_g = $row['group_Id'];
										            if($data_group_up==$group_Id_g){
													?>
                                                    <option  value='<?php echo $row['group_Id'] ?>'  >
													<?php echo $row['groupname'] ?></option>";
													<?php
													    } 
													   }
													  }

									                if($change_division_group_up==""){
													foreach ($data_group_up as $row){
										            $group_Id_g = $row['group_Id'];
										            if($group_Id==$group_Id_g){
													?>
                                                    <option  value='<?php echo $row['group_Id'] ?>'  >
													<?php echo $row['groupname'] ?></option>";
													<?php
													   } 
													  }
													}
													?>
									  </select>