          


                                    <?php
                                                        foreach ($data_type as $row) {
                                                            $type_id_ck = $row['group_Id'] . "-data_type-" . $row['type_id'] . "'";
                                                            echo "<option  value='" . $type_id_ck . ">" . $row['type_name'] . "</option>";
                                                        }
                                                        ?>
