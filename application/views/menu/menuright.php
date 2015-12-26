

<?php
$attributes = array('id' => 'menu_select');
echo form_open('http://127.0.0.1/j3databoxNew/index.php/mainFunction/executive', $attributes);
?>							
<?php $this->load->view('java/javascript_box'); ?> 


<section class="page container">
    <div class="row">

        <input type  = "hidden" id="check_meun"          name="check_meun"       <?php echo "value=" . $not; ?>></input>
        <input type  = "hidden" id="check_meun2"         name="check_meun2"      <?php echo "value=" . $not2; ?>></input>
        <input type  = "hidden" id="select_id_type"      name="select_id_type"  ></input>
        <input type  = "hidden" id="select_id"           name="select_id"       ></input>
        <input type  = "hidden" id="select_disvisid"     name="select_disvisid" value="-"></input>
        <div class="span4">
            <div class="blockoff-right">
                <ul id="person-list" class="nav nav-list">
                    <li class="nav-header">เอกสารหลัก</li>
                    <style>
                        a:hover {
                            background-color: #E6E6E6;
                            display:block;
                            text-decoration: none;
                        } 

                    </style>

                    <li class="active">
                    <li>

                    <li>
                        <?php
                        $collapse = explode("-", $not2);
                        $collapse1 = $collapse[0];
                        if (isset($collapse[2])) {
                            $collapse3 = $collapse[2];
                        } else {
                            $collapse3 = "";
                        }
                        if (isset($collapse[1])) {
                            $collapse2 = $collapse[1];
                        } else {
                            $collapse2 = "";
                        }
                        ?>
                        <?php
                        foreach ($data_type_ms as $row) {
                            $type_id = $row['type_id'];
                            echo "<li>";
                            echo "";
                            echo "<a onClick=select_disvisid('" . $type_id . "-type_id')  href='javascript:;' data-toggle='collapse' data-target='#" . $type_id . "-type_id'>
                          " . $row['type_name'] . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";


                            if ($collapse3 != "box") {

                                if ($collapse2 == "type_id") {
                                    if ($type_id == $collapse1) {

                                        echo "<ul id='" . $type_id . "-type_id' class='collapse1'>";
                                    }
                                    if ($type_id != $collapse1) {

                                        echo "<ul id='" . $type_id . "-type_id' class='collapse'>";
                                    }
                                }
                            }
                            if ($collapse2 != "type_id") {
                                echo "<ul id='" . $type_id . "-not_type' class='collapse'>";
                            }

                            foreach ($data_group as $row) {
                                $group_Id = $row['group_Id'];
                                $dataId = $row['dataId'];
                                if ($type_id == $dataId) {
                                    echo "<li>";
                                    echo "<a style='display:block;' onClick=select_disvisid('" . $dataId . "-type_id-" . $group_Id . "') >" . $row['groupname'] . "</a>";
                                    echo "</li>";
                                }
                            }
                            echo "</ul>";
                        }
                        ?>
                    </li>
                    <li class="nav-header">เอกสารายกอง</li>
                    <li>
                        <?php
                        $check = '0';
                        $collapse = "";
                        foreach ($division_group as $row) {
                            $group_Id = $row['group_Id'];
                            $disvis = $row['divisid'];
                            $group_title = $row['group_title'];
                            $short_division = $row['short_division'];
                            $short_division_text = explode('.', $short_division);
                            if ($check != $group_Id) {
                                $check++;
                                echo "<a onClick=select_disvisid('" . $group_Id . "-')  href='javascript:;' data-toggle='collapse' data-target='#" . $disvis . "'>
                                                 " . $row['group_title'] . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";

                                if ($collapse2 == "type_id") {
                                    echo "<ul id='" . $group_Id . "' class='collapse'>";
                                }
                                if ($collapse3 == "box") {
                                    echo "<ul id='" . $group_Id . "' class='collapse'>";
                                }
                                if ($collapse3 != "box") {
                                    if ($collapse2 != "type_id") {
                                        if ($group_Id != $collapse1) {
                                            echo "<ul id='" . $group_Id . "' class='collapse'>";
                                        }
                                        if ($group_Id == $collapse1) {
                                            echo "<ul id='" . $group_Id . "' class='collapse1'>";
                                        }
                                    }
                                }
                                echo "<ul  id='person-list' class='nav nav-list'>";
                            }
                            if ($group_Id == "1") {
                                echo "<li>";
                                echo "<a onClick=select_disvisid('" . $group_Id . "-" . $disvis . "') href='javascript:;' data-toggle='collapse' data-target='#" . $disvis . "'>
                                                                " . $short_division_text[0] . "." . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
                                if ($disvis == $collapse2) {
                                    echo "<ul id='" . $disvis . "' class='collapse1'>";
                                }
                                if ($disvis != $collapse2) {
                                    echo "<ul id='" . $disvis . "' class='collapse'>";
                                }

                                foreach ($data_group as $row) {
                                    $group_id_g = $row['group_Id'];
                                    $divisId_g = $row['divisId'];
                                    if ($divisId_g == $disvis) {
                                        echo "<li>";
                                        echo "<a onClick=select_disvisid('" . $group_Id . "-" . $disvis . "-" . $group_id_g . "')>" . $row['groupname'] . "</a>";
                                    }
                                    echo "</li>";
                                }
                                echo "</ul>";
                            }
                            if ($group_Id != "1") {
                                echo "<li>";
                                echo "<a  onClick=select_disvisid('" . $group_Id . "-" . $disvis . "') href='javascript:;' data-toggle='collapse' data-target='#" . $disvis . "'>
                                                          " . $short_division_text[0] . "." . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
                                if ($disvis == $collapse2) {
                                    echo "<ul id='" . $disvis . "' class='collapse1'>";
                                }
                                if ($disvis != $collapse2) {
                                    echo "<ul id='" . $disvis . "' class='collapse'>";
                                }
                                foreach ($data_group as $row) {
                                    $group_id_g = $row['group_Id'];
                                    $divisId_g = $row['divisId'];
                                    if ($divisId_g == $disvis) {
                                        echo "<li>";
                                        echo "<a onClick=select_disvisid('" . $group_Id . "-" . $disvis . "-" . $group_id_g . "')>" . $row['groupname'] . "</a>";
                                        //echo $row['groupname'];
                                    }
                                    echo "</li>";
                                }
                                echo "</ul>";
                                echo "</li>";
                            }
                            echo "</li>";
                            foreach ($division_by as $row) {

                                $divisid_by = $row['divisid'];
                                $divisid_by1 = $divisid_by - 1;
                                if ($disvis == $divisid_by1) {
                                    echo "</ul>";
                                    echo "</ul>";
                                }
                            }
                        }
                        form_close();
                        ?>
                        </div>
                    <li class="nav-header">สรุปสถิติ</li>
                    <div class="box" >
                        <div class="box-header">
                            <i class="icon-bookmark"></i>
                            <h5>สำนักนโยบายและแผน</h5>
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
                                        <td><?php
                        foreach ($unit as $ru) {
                            if ($ru['group_Id'] == "1") {
                                $group_Id_r = $ru['group_Id'];
                                $disvis_r = $ru['divisid'];
                                $short_division = $ru['short_division'];
                                $short_division_text = explode('.', $short_division);
                                echo "<button  onclick=\"onClick=box_bn('" . $group_Id_r . "-" . $disvis_r . "-box-1')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(" . $this->j3databox->get_num_box($ru['group_Id']) . ") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
            0 0 0.3em #FF2000;' >" . $this->j3databox->get_num_box_week($ru['group_Id']) . "</div> </h0><br/> " . $short_division_text[0] . "</button>";
                            }
                        }
                        ?></td>
                                </table>






                            </div>

                        </div>


                    </div>
                    <div class="box" >
                        <div class="box-header">
                            <i class="icon-bookmark"></i>
                            <h5>สำนักปฏิบัติการ</h5>
                            <button class="btn btn-box-right" data-toggle="collapse" data-target=""   id="btn-box-right_s_2" onClick="document.getElementById('box-content_2').style.display = 'block'; document.getElementById('btn-box-right_c_2').style.display = 'block'; document.getElementById('btn-box-right_s_2').style.display = 'none';">
                                <i class="icon-reorder"></i>

                            </button>

                            <button class="btn btn-box-right" data-toggle="collapse" data-target=""  id="btn-box-right_c_2" style="display: none"  onClick="document.getElementById('box-content_2').style.display = 'none'; document.getElementById('btn-box-right_s_2').style.display = 'block';  document.getElementById('btn-box-right_c_2').style.display = 'none';">

                                <i class="icon-reorder"></i>
                            </button>

                        </div>
                        <div class="box-content" id="box-content_2" style="display: none" >
                            <div class="btn-group-box">
                                <table width="100%" border="0">
                                    <tr></tr>

                                    <tr>
                                        <td><?php
                                            foreach ($unit as $ru) {
                                                if ($ru['group_Id'] == "2" && $ru['short_division'] != "ผกม.สวฝ.") {
                                                    $short_division = $ru['short_division'];
                                                    $short_division_text = explode('.', $short_division);
                                                    $group_Id_r = $ru['group_Id'];
                                                    $disvis_r = $ru['divisid'];
                                                    echo "<button  onclick=\"onClick=box_bn('" . $group_Id_r . "-" . $disvis_r . "-box-2')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(" . $this->j3databox->get_num_box($ru['group_Id']) . ") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
            0 0 0.3em #FF2000;' >" . $this->j3databox->get_num_box_week($ru['group_Id']) . "</div> </h0><br/> " . $short_division_text[0] . "</button>";
                                                }
                                            }
                        ?></td>


                                    </tr>



                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="box" >
                        <div class="box-header">
                            <i class="icon-bookmark"></i>
                            <h5>สำนักวางแผนฝึกร่วมและผสม</h5>
                            <button class="btn btn-box-right" data-toggle="collapse" data-target=""   id="btn-box-right_s_3" onClick="document.getElementById('box-content_3').style.display = 'block'; document.getElementById('btn-box-right_c_3').style.display = 'block'; document.getElementById('btn-box-right_s_3').style.display = 'none';">
                                <i class="icon-reorder"></i>
                            </button>

                            <button class="btn btn-box-right" data-toggle="collapse" data-target=""  id="btn-box-right_c_3" style="display: none"  onClick="document.getElementById('box-content_3').style.display = 'none'; document.getElementById('btn-box-right_s_3').style.display = 'block';  document.getElementById('btn-box-right_c_3').style.display = 'none';">

                                <i class="icon-reorder"></i>
                            </button>

                        </div>
                        <div class="box-content" id="box-content_3" style="display: none" >
                            <div class="btn-group-box">
                                <table width="100%" border="0">
                                    <tr></tr>

                                    <tr>
                                        <td><?php
                                            foreach ($unit as $ru) {
                                                 if ($ru['group_Id'] == "3" ) {
                                                

                                                    $group_Id_r = $ru['group_Id'];
                                                    $disvis_r = $ru['divisid'];
                                                    $short_division = $ru['short_division'];
                                                    $short_division_text = explode('.', $short_division);
                                                    echo "<button  onclick=\"onClick=box_bn('" . $group_Id_r . "-" . $disvis_r . "-box-3')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(" . $this->j3databox->get_num_box($ru['group_Id']) . ") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
            0 0 0.3em #FF2000;' >" . $this->j3databox->get_num_box_week($ru['group_Id']) . "</div> </h0><br/> ".$short_division_text[0] . "</button>";
                                                 }
                                            }
                        ?></td>

                                </table>







                            </div>
                        </div>
                    </div>
                    <div class="box" >
                        <div class="box-header">
                            <i class="icon-bookmark"></i>
                            <h5>ศูนย์ปฏิบัติการสันติภาพ</h5>
                            <button class="btn btn-box-right" data-toggle="collapse" data-target=""   id="btn-box-right_s_4" onClick="document.getElementById('box-content_4').style.display = 'block'; document.getElementById('btn-box-right_c_4').style.display = 'block'; document.getElementById('btn-box-right_s_4').style.display = 'none';">
                                <i class="icon-reorder"></i>
                            </button>

                            <button class="btn btn-box-right" data-toggle="collapse" data-target=""  id="btn-box-right_c_4" style="display: none"  onClick="document.getElementById('box-content_4').style.display = 'none'; document.getElementById('btn-box-right_s_4').style.display = 'block';  document.getElementById('btn-box-right_c_4').style.display = 'none';">

                                <i class="icon-reorder"></i>
                            </button>

                        </div>
                        <div class="box-content" id="box-content_4" style="display: none" >
                            <div class="btn-group-box">
                                <table width="100%" border="0">



                                    <tr>
                                        <td> <?php
                                            foreach ($unit as $ru) {

                                                if ($ru['group_Id'] == "4" || ($ru['group_Id'] == "3" && $ru['short_division'] == "ผกม.สวฝ.")) {
                                                    $group_Id_r = $ru['group_Id'];
                                                    $disvis_r = $ru['divisid'];
                                                    $short_division = $ru['short_division'];
                                                    $short_division_text = explode('.', $short_division);
                                                    echo "<button   onclick=\"onClick=box_bn('" . $group_Id_r . "-" . $disvis_r . "-box-4')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(" . $this->j3databox->get_num_box($ru['group_Id']) . ") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
            0 0 0.3em #FF2000;' >" . $this->j3databox->get_num_box_week($ru['group_Id']) . "</div> </h0><br/>" . $short_division_text[0] . "</button>";
                                                }
                                            }
                        ?></td>

                                </table>


                            </div>
                        </div>
                    </div>
                    <div class="box" >
                        <div class="box-header">
                            <i class="icon-bookmark"></i>
                            <h5>นขต. ยก.ทหาร</h5>
                            <button class="btn btn-box-right" data-toggle="collapse" data-target=""   id="btn-box-right_s_5" onClick="document.getElementById('box-content_5').style.display = 'block'; document.getElementById('btn-box-right_c_5').style.display = 'block'; document.getElementById('btn-box-right_s_5').style.display = 'none';">
                                <i class="icon-reorder"></i>
                            </button>

                            <button class="btn btn-box-right" data-toggle="collapse" data-target=""  id="btn-box-right_c_5" style="display: none"  onClick="document.getElementById('box-content_5').style.display = 'none'; document.getElementById('btn-box-right_s_5').style.display = 'block';  document.getElementById('btn-box-right_c_5').style.display = 'none';">

                                <i class="icon-reorder"></i>
                            </button>

                        </div>
                        <div class="box-content" id="box-content_5" style="display: none" >
                            <div class="btn-group-box">
                                <table width="100%" border="0">



                                    <tr>
                                        <td> <?php
                                            foreach ($unit as $ru) {

                                                if ($ru['group_Id'] == "5") {
                                                    $group_Id_r = $ru['group_Id'];
                                                    $disvis_r = $ru['divisid'];
                                                    $short_division = $ru['short_division'];
                                                    $short_division_text = explode('.', $short_division);
                                                    echo "<button   onclick=\"onClick=box_bn('" . $group_Id_r . "-" . $disvis_r . "-box-4')\"  name='Button2' id='button2' value='Post'  class='btn'   style='cursor:pointer' /><h0 style='color:blue'>(" . $this->j3databox->get_num_box($ru['group_Id']) . ") <div style='margin-top: -24px;  margin-left: 60px; width: 0.9%;  height: 5%; text-align:center; position: absolute; color: white;font-size:16px; text-shadow: 0 0 0.3em #FF2000, 0 0 0.3em #FF2000,
            0 0 0.3em #FF2000;' >" . $this->j3databox->get_num_box_week($ru['group_Id']) . "</div> </h0><br/>" . $short_division_text[0] . "</button>";
                                                }
                                            }
                        ?></td>
                                    </tr>

                                </table>







                            </div>
                        </div>
                    </div>
            </div>

 
            <script>
                var check_meun2 = document.getElementById('check_meun2').value;
                var box = check_meun2.split("-");
                if (box[3] == "1") {
                       
                    document.getElementById('box-content1').style.display = 'block';
                }
                if (box[3] == "2") {

                    document.getElementById('box-content_2').style.display = 'block';
                }
                if (box[3] == "3") {

                    document.getElementById('box-content_3').style.display = 'block';
                }
                if (box[3] == "4") {

                    document.getElementById('box-content_4').style.display = 'block';
                }
                if (box[3] == "5") {

                    document.getElementById('box-content_5').style.display = 'block';
                }
            </script>




