      <li class="nav-header">เอกสารายกอง</li>
                    <li>
                          <?php
                          $check = '0';
                             foreach ($division_group as $row) {
                        $group_Id = $row['group_Id'];
                            $disvis1 = $row['divisid'];
                            $disvis =$disvis1."-disvis";
                            $group_title = $row['group_title'];
                            $short_division = $row['short_division'];
                            $short_division_text = explode('.', $short_division);
                          if ($check != $group_Id) {
                             $check++;
                            ?>

                        <a href="javascript:;" data-toggle="collapse" data-target="#<?php  echo $disvis?>"><i class="fa fa-fw fa-arrows-v"></i> 
                         <?php echo $row['group_title']; ?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="<?php  echo $disvis?>" class="collapse1">
                          <ul id="person-list" class="nav nav-list">
                                <li>
                                    <i class='icon-chevron-right pull-right'></i>
                                                <li>
                                                    <?php
                                                     echo "<li>";
                                       
                                     
                                echo "<a href='javascript:;' data-toggle='collapse' data-target='#". $disvis ."'> <div class = 'button blue'>" . $this->j3databox->get_num_box($disvis) . "</div> <div class ='button ";
                                if ($this->j3databox->get_num_box_week($disvis) < 2) {
                                    echo "red";
                                } else {
                                    echo "orange";
                                }
                                echo "'>" . $this->j3databox->get_num_box_week($disvis) . "</div> " .  $short_division_text[0]  . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
                               
                            
                                   ?>
                                        
                                         
                                   
                                     <ul id='<?php  echo $disvis?>' class='collapse'>
                                         <?php 
                                         
                                           foreach ($data_group_main as $row) {
                                            
                                      $id = $row['id'];   
                                       $id_dis = $id."-id-".$check;
                                       $id_dism = $id_dis."-mid-".$check;
                                       $fk_id = $row['fk_id'];
                                      
                               if($fk_id=="10"){   
                                         ?>
                                        
                                                <li>

                                                      <a href="javascript:;" data-toggle="collapse" data-target="#<?php echo $id_dism ?>" ><?php echo  $disvis1; ?> <i class="fa fa-fw fa-caret-down">
                                                </i></a>
                                                      <ul id="<?php echo $id_dism ?>" class="collapse">


                                               

                                                    <?php  
                                                       foreach ($data_group as $row) {
                                    $group_id_g = $row['group_Id'];
                                    $divisId_g = $row['divisId'];
                                 if($divisId_g==$id){
                                        echo "<li>";
                                      echo "" . $row['groupname'] . "";
                                    
                                    echo "</li>";
                                 }
                                }
                                
                                 }
                                                    ?>



                                            </ul>


                                                </li>
                                                 

                                            </ul>
                                                            
                                                <?php }?>  


                                                </li>
                            </ul>
                        </ul>
                             <?php  } } ?>
                     
                        
                        
                        <?php
                      
                        
                        form_close();
                        ?>