

<?php
$attributes = array('id' => 'menu_select');
echo form_open(base_url().'index.php/mainFunction/executive', $attributes);
?>							
<?php $this->load->view('java/javascript_box'); ?> 
<style>
.button {
    
    width:2px;
    display: inline-block;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    font: 14px/100% Arial, Helvetica, sans-serif;
    padding: .5em 1em .55em;
    text-shadow: 0 1px 1px rgba(0,0,0,.3);
    -webkit-border-radius: .5em; 
    -moz-border-radius: .5em;
    border-radius: .5em;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.button:hover {
    text-decoration: none;
}
.button:active {
    position: relative;
    top: 1px;
}

.orange {
    color: #fef4e9;
    border: solid 1px #da7c0c;
    background: #f78d1d;
    background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
    background: -moz-linear-gradient(top,  #faa51a,  #f47a20);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
.orange:hover {
    background: #f47c20;
    background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
    background: -moz-linear-gradient(top,  #f88e11,  #f06015);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
}
.orange:active {
    color: #fcd3a5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f47a20), to(#faa51a));
    background: -moz-linear-gradient(top,  #f47a20,  #faa51a);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f47a20', endColorstr='#faa51a');
}
.blue {
    color: #d9eef7;
    border: solid 1px #0076a3;
    background: #0095cd;
    background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
    background: -moz-linear-gradient(top,  #00adee,  #0078a5);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
}
.blue:hover {
    background: #007ead;
    background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
    background: -moz-linear-gradient(top,  #0095cc,  #00678e);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#0095cc', endColorstr='#00678e');
}
.blue:active {
    color: #80bed6;
    background: -webkit-gradient(linear, left top, left bottom, from(#0078a5), to(#00adee));
    background: -moz-linear-gradient(top,  #0078a5,  #00adee);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#0078a5', endColorstr='#00adee');
}
.red {
    color: #faddde;
    border: solid 1px #980c10;
    background: #d81b21;
    background: -webkit-gradient(linear, left top, left bottom, from(#ed1c24), to(#aa1317));
    background: -moz-linear-gradient(top,  #ed1c24,  #aa1317);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ed1c24', endColorstr='#aa1317');
}
.red:hover {
    background: #b61318;
    background: -webkit-gradient(linear, left top, left bottom, from(#c9151b), to(#a11115));
    background: -moz-linear-gradient(top,  #c9151b,  #a11115);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#c9151b', endColorstr='#a11115');
}
.red:active {
    color: #de898c;
    background: -webkit-gradient(linear, left top, left bottom, from(#aa1317), to(#ed1c24));
    background: -moz-linear-gradient(top,  #aa1317,  #ed1c24);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#aa1317', endColorstr='#ed1c24');
}
</style>
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
                                    echo "<a style='display:block;' onClick=select_disvisid('" . $dataId . "-type_id-" . $group_Id . "') >" .$row['groupname'] . "</a>";
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
                                            echo "<ul id='" . $group_Id . "' class='collapse1'>";
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
                                echo "<a onClick=select_disvisid('" . $group_Id . "-" . $disvis . "') href='javascript:;' data-toggle='collapse' data-target='#" . $disvis . "'> <div class = 'button blue'>" . $this->j3databox->get_num_box($disvis). "</div> <div class ='button "; 
                                if($this->j3databox->get_num_box_week($disvis)<2){echo "red";}else{echo "orange";} 
                                echo "'>".$this->j3databox->get_num_box_week($disvis)."</div> " .$short_division_text[0] . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
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
                                        echo "<a onClick=select_disvisid('" . $group_Id . "-" . $disvis . "-" . $group_id_g . "')>" .$row['groupname'] . "</a>";
                                    }
                                    echo "</li>";
                                }
                                echo "</ul>";
                            }
                            if ($group_Id != "1") {
                                echo "<li>";
                                echo "<a  onClick=select_disvisid('" . $group_Id . "-" . $disvis . "') href='javascript:;' data-toggle='collapse' data-target='#" . $disvis . "'> <div class = 'button blue'>" . $this->j3databox->get_num_box($disvis). "</div> <div class ='button ";
                                if($this->j3databox->get_num_box_week($disvis)<2){echo "red";}else{echo "orange";} 
                                echo "'>".$this->j3databox->get_num_box_week($disvis)."</div> " .$short_division_text[0] . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
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
                    
                    

            </div>

 





