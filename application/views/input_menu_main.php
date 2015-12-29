                                                        <script>
                                                       var   data_group_id =   document.getElementById("btn1").selectedIndex;
                                                       var data_group_id_1 = data_group_id;
                                                        document.getElementById("showajax5").selectedIndex =  data_group_id_1;
                                                       </script>
                                                         <option  value='0'> กรุณาเลือกรายการ </option>
                                                        <?php
                                                        foreach ($data_type as $row) {
                                                            $type_id_ck = $row['group_Id'] . "-data_type-" . $row['type_id'] . "'";
                                                            echo "<option  value='" . $type_id_ck . ">" . $row['type_name'] . "</option>";
                                                        }
                                                        ?>

                                                        <?php
                                                        foreach ($division as $row) {
                                                            $division_id_ck = $row['divisid'] . "-division'";
                                                           echo "<option   value='" . $division_id_ck . "-divisid'>" . $row['divisname'] . "</option>";
                                                        }
                                                        ?>