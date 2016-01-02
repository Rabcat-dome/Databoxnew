
<input type  = "hidden" id="group_Id"         name="group_Id"      <?php echo "value=" . $group_Id_f; ?>></input>
<input type  = "hidden" id="divis_id"         name="divis_id"      <?php echo "value=" . $divis_id_f; ?>></input>
<input type  = "hidden" id="data_group"       name="data_group"      ></input>
<div id="span8" class="span12">
    <!--    ตารางข้อมูล-->
    <div class="row" >
        <div id="Person-1" class="box" >
            <div class="box-header" >
                <i class="icon-user icon-large"></i>
                <h5>ข้อมูล Databox</h5>
            </div>
            <div class="box-content box-table" >
                <table id='tableId' class='table table-hover tablesorter' >
                    <thead>
                        <tr>
                            <th>เวลา</th>
                            <th>ชื่องาน</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <?php
                        $i = '0';
                        $data2 = $_POST['data1'];
                        $pieces = explode("-", $data2);
          
                        $i = '0';
                        
                        if ($pieces[1] == "iddisvis") {
                            foreach ($box as $row) {

                                $group_Id = $row['group_Id'];
                                if ($group_Id == $pieces[0]) {
                                    $hidden = $row['databox_id'];
                                    echo "<tr >";
                                    echo "<td  onclick=\"chk(" . $hidden . ")\"  width='20%' >" . $row['date_upload'] . "</td>";
                                    echo "<td  onclick=\"chk(" . $hidden . ")\" width='70%'>" . $row['subject'] . "</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                            }
                        }
                        if ($pieces[1] == "type_main") {
                            foreach ($data_type as $row) {
                                  $type_id = $row['type_id'];
                             if ($type_id == $pieces[0]) {
                                
                            foreach ($data_group as $row) {
                                $dataId = $row['dataId'];
                                     if ($dataId == $type_id) {
                               $group_Id = $row['group_Id'];
                                 
                                      foreach ($databox_upload as $row) {
                                          
                                      $group_Id_2 = $row['group_Id'];
                                          if($group_Id==$group_Id_2){
                                    echo "<tr >";
                                    echo "<td    width='20%' >" . $row['date_upload'] . "</td>";
                                    echo "<td  width='70%'>" . $row['subject'] . "</td>";
                                    echo "</tr>";
                                    $i++;
                                          }
                                      }
                                     }
                            }
                             }
                            
                        }
                        }
                         if ($pieces[1] == "type_name") {
                            foreach ($databox_upload as $row) {

                                $group_Id = $row['group_Id'];
                                if ($group_Id == $pieces[0]) {
                                    $hidden = $row['databox_id'];
                                    echo "<tr >";
                                    echo "<td  onclick=\"chk(" . $hidden . ")\"  width='20%' >" . $row['date_upload'] . "</td>";
                                    echo "<td  onclick=\"chk(" . $hidden . ")\" width='70%'>" . $row['subject'] . "</td>";
                                    echo "</tr>";
                                    $i++;
                               }
                            }
                        }
                        if ($pieces[1] == "disvis") {

                            foreach ($data_group_main as $row) {
                                $fk_id = $row['fk_id'];
                                $id = $row['id'];

                                if ($pieces[0] == $id) {

                                    foreach ($data_group as $row) {

                                        $divisId = $row['divisId'];

                                        if ($id == $divisId) {
                                            $group_Id_3 = $row['group_Id'];
                                            foreach ($box as $row) {

                                                $group_Id_2 = $row['group_Id'];

                                                if ($group_Id_2 == $group_Id_3) {

                                                    $hidden = $row['databox_id'];
                                                    echo "<tr >";
                                                    echo "<td  onclick=\"chk(" . $hidden . ")\"  width='20%' >" . $row['date_upload'] . "</td>";
                                                    echo "<td  onclick=\"chk(" . $hidden . ")\" width='70%'>" . $row['subject'] . "</td>";
                                                    echo "</tr>";
                                                    $i++;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if ($pieces[1] == "group_title") {

                            foreach ($data_group_main as $row) {
                                $fk_id = $row['fk_id'];
                                $id = $row['id'];

                                if ($pieces[0] == $fk_id) {

                                    foreach ($data_group as $row) {

                                        $divisId = $row['divisId'];

                                        if ($id == $divisId) {
                                            $group_Id_3 = $row['group_Id'];
                                            foreach ($box as $row) {

                                                $group_Id_2 = $row['group_Id'];

                                                if ($group_Id_2 == $group_Id_3) {

                                                    $hidden = $row['databox_id'];
                                                    echo "<tr >";
                                                    echo "<td  onclick=\"chk(" . $hidden . ")\"  width='20%' >" . $row['date_upload'] . "</td>";
                                                    echo "<td  onclick=\"chk(" . $hidden . ")\" width='70%'>" . $row['subject'] . "</td>";
                                                    echo "</tr>";
                                                    $i++;
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                       
                        ?>
                    </tbody>

                </table>
                <div align="center"><?php
                        if ($i >= "19") {
                            echo $this->pagination->create_links();
                        }
                        ?></div>
            </div>
        </div>
    </div>
</div>
<!--Ajax ส่วนแสดงข้อมูล -->
<input type  = "hidden" id="code"       name="code"       ></input>
<div class="span4">
    <script type="text/javascript">
        $(document).ready(function () {
            $("#tableId tr").click(function () {
                $.post("<?php echo base_url(); ?>index.php/mainFunction/box_detail", {
                    data1: $("#code").val()},
                        function (data) {
                            $("#showajax").html(data);
                        }
                );

            });
        });
    </script>
    <div id="showajax" ></div>
</div>
<!--Ajax ส่วนแสดงข้อมูล -->
</div>
</div>
</div>
</div>
</div>
</div>
<?php $this->load->view('footer/footer'); ?>