
<?php
$attributes = array('id' => 'menu_select');
echo form_open(base_url() . 'index.php/mainFunction/executive', $attributes);
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

    div.ui-menu li {
        list-style:none;
        background-image:none;
        background-repeat:none;
        background-position:0; 
    }
    ul
    {
        list-style-type:none;
        padding:0px;
        margin:0px;
    }
    li
    {
        background-image:url(sqpurple.gif);
        background-repeat:no-repeat;
        background-position:1000px 5px; 
        padding-left:0px;
    }

</style>

<section class="page container">
    <div class="row">
        

        <input type  = "hidden" id="check_meun"          name="check_meun"       <?php echo "value=" . $not; ?>></input>
        <input type  = "hidden" id="check_meun2"         name="check_meun2"      <?php echo "value=" . $not2; ?>></input>
        <input type  = "hidden" id="select_id_type"      name="select_id_type"  ></input>
        <input type  = "hidden" id="select_id"           name="select_id"       ></input>
        <input type  = "hidden" id="select_disvisid"     name="select_disvisid" value="-"></input>
        
         <input type  = "hidden" id="group_Id"           name="group_Id"       ></input>
        <input type  = "hidden" id="code2"    name="code2"              ></input>
        <div class="span4">
            <div class="blockoff-right">
                <ul id="person-list" class="nav nav-list">
                    <li class="nav-header">เอกสารหลัก</li>


                    <li class="active">
                    <li>

                        <i class="icon-chevron-right pull-right"></i>
                      
               
                        <?php
                        foreach ($data_type_ms as $row) {
                            $type_id = $row['type_id'];
                            ?>
                            <a   onClick="select_group_id('<?php echo $type_id ?>-type_main')" id="<?php echo $type_id ?>-type_main" name="<?php echo $type_id ?>-type_main"  href="javascript:;" data-toggle="collapse" data-target="#<?php echo $type_id ?>"><i class="fa fa-fw fa-arrows-v"></i> 
                                <?php echo $row['type_name']; ?> <i class="fa fa-fw fa-caret-down"></i></a>
                                   <script>
                      
                            $(document).ready(function () {
                                $("#<?php echo $type_id ?>-type_main").click(function () {

                                    $.post("box", {
                                        data1: $("#group_Id").val()},
                                            function (data) {
                                                $("#showajax6").html(data);
                                            }
                                    );

                                });
                            });
                        </script>
                            <ul id="<?php echo $type_id ?>" class="collapse">
                                <ul id="person-list" class="nav nav-list">

                                    <li>
                                        </i></a>
                                    <li>


                                        <?php
                                        foreach ($data_group as $row) {
                                            $group_Id = $row['group_Id'];
                                            $dataId = $row['dataId'];
                                            if ($type_id == $dataId) {
                                                echo "<li>";
                                                echo "<a  id='".$group_Id."-type_name' name='".$group_Id."-type_name'  style='display:block;' onClick=select_group_id('" . $group_Id . "-type_name') ><div class='span' >&nbsp;</div>" . $row['groupname'] . "</a>";
                                                echo "</li>";
                                            }
                                            ?>
                                        <script>
                      
                            $(document).ready(function () {
                                $("#<?php echo $group_Id ?>-type_name").click(function () {

                                    $.post("box", {
                                        data1: $("#group_Id").val()},
                                            function (data) {
                                                $("#showajax6").html(data);
                                            }
                                    );

                                });
                            });
                        </script>
                                            <?php
                                        }
                                        ?>
                                         

                                    </li>

                                </ul>
                            </ul>
<?php } ?>

                    </li>
                    <li>
                    <li>
                    </li>
            </div>
            
            <div class="ui-menu">


                <li class="nav-header">เอกสารายกอง</li>
           
                    <li>
<?php
$check = '0';
$collapse = "";
$collapse2 = "0";
$collapse3 = "0";
$collapse1 = "0";

foreach ($division_group as $row) {
    $group_Id = $row['group_Id'];
    $disvis = $row['divisid'];
    $disvis1 = $disvis . "-disvis";
    $disvis2 = $disvis . "-disvis2";
    $group_title = $row['group_title'];
    $short_division = $row['short_division'];
    $short_division_text = explode('.', $short_division);
    if ($check != $group_Id) {
        $check++;
        echo "<a    href='javascript:;' data-toggle='collapse' data-target='#" . $disvis2 . "'>
                                                 " . $row['group_title'] . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";

        echo "<ul id='" . $disvis2 . "' class=''>";

        echo "<ul  id='person-list' class='nav nav-list'>";
    }
    if ($group_Id == "1") {
        echo "<li>";
        echo "<a  href='javascript:;'  onClick=select_group_id('" . $disvis . "-group_title')  id='".$disvis."-group_title'  name='".$disvis."-group_title'   data-toggle='collapse' data-target='#" . $disvis1 . "'> <div class = 'button blue'>" . $this->j3databox->get_num_box($disvis) . "</div> <div class ='button ";
        if ($this->j3databox->get_num_box_week($disvis) < 2) {
            echo "red";
        } else {
            echo "orange";
        }
        echo "'>" . $this->j3databox->get_num_box_week($disvis) . "</div> " . $short_division_text[0] . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
      ?>
                        <script>
                      
                            $(document).ready(function () {
                                $("#<?php echo $disvis ?>-group_title").click(function () {

                                    $.post("box", {
                                        data1: $("#group_Id").val()},
                                            function (data) {
                                                $("#showajax6").html(data);
                                            }
                                    );

                                });
                            });
                        </script>
                        <?php

        echo "<ul id='" . $disvis1 . "' class='collapse'>";


        foreach ($data_group_main as $row) {
            $fk_id = $row['fk_id'];
            if ($fk_id == $disvis) {
                $id = $row['id'];
                $id_dis = $id . "-id-" . $check;
                $id_dism = $id_dis . "-mid-" . $check;


                if ($fk_id == $group_Id) {

                    echo "<ul  id='person-list' class='nav nav-list'>";
                    echo "<li>";
                    echo " <a  onClick=select_group_id('" . $id . "-disvis') id='".$fk_id."on1' name='".$fk_id."on1'   href='javascript:;' data-toggle='collapse' data-target='#" . $id_dism . "'"
                    . ">&nbsp;&nbsp;&nbsp;" . $row['name'] . " <i class='fa fa-fw fa-caret-down'></i></a>";
                    ?>
                          <script>
                      
                            $(document).ready(function () {
                                $("#<?php echo $fk_id ?>on1").click(function () {

                                    $.post("box", {
                                        data1: $("#group_Id").val()},
                                            function (data) {
                                                $("#showajax6").html(data);
                                            }
                                    );

                                });
                            });
                        </script>
                        <?php
                    echo "</ul>";
                    echo "  <ul id='" . $id_dism . "' class='collapse'>";
                    foreach ($data_group as $row) {
                        $group_id_g = $row['group_Id'];
                        $divisId_g = $row['divisId'];
                        if ($divisId_g == $id) {
                            echo "<ul  id='person-list' class='nav nav-list'  >";
                         
                            echo "<li >";
                            echo "<a  onClick=select_group_id('" . $group_id_g . "-iddisvis')  id='".$group_id_g."on'  name='".$group_id_g."on' ><div class='span' >&nbsp;</div>" . $row['groupname'] . "</a>";
                           ?>
                             <script>
                            $(document).ready(function () {
                                $("#<?php echo $group_id_g ?>on").click(function () {

                                    $.post("box", {
                                        data1: $("#group_Id").val()},
                                            function (data) {
                                                $("#showajax6").html(data);
                                            }
                                    );

                                });
                            });
                             </script>
                        <?php
                            
                            echo "</li>";
                          
                            echo "</ul>";
                        }
                    }
                    echo "</ul>";
                }
                echo "</li>";
            }
        }
        echo "</ul>";
    }

    if ($group_Id != "1") {

        echo "<li>";

        echo "<a  id='".$disvis."-group_title'  name='".$disvis."-group_title'  onClick=select_group_id('" . $disvis . "-group_title')  href='javascript:;' data-toggle='collapse' data-target='#" . $disvis1 . "'> <div class = 'button blue'>" . $this->j3databox->get_num_box($disvis) . "</div> <div class ='button ";
        if ($this->j3databox->get_num_box_week($disvis) < 2) {
            echo "red";
        } else {
            echo "orange";
        }
        echo "'>" . $this->j3databox->get_num_box_week($disvis) . "</div> " . $short_division_text[0] . "<i class='fa fa-fw fa-caret-down'></i><i class='icon-chevron-right pull-right'></i></a>";
        ?>
                             <script>
                      
                            $(document).ready(function () {
                                $("#<?php echo $disvis ?>-group_title").click(function () {

                                    $.post("box", {
                                        data1: $("#group_Id").val()},
                                            function (data) {
                                                $("#showajax6").html(data);
                                            }
                                    );

                                });
                            });
                        </script><?php
        echo "<ul id='" . $disvis1 . "' class='collapse'>";

        foreach ($data_group_main as $row) {
            $fk_id = $row['fk_id'];
            if ($fk_id == $disvis) {
                $id = $row['id'];
                $id_dis = $id . "-id-" . $check;
                $id_dism = $id_dis . "-mid-" . $check;
                echo "<ul  id='person-list' class='nav nav-list'>";
                echo "<li>";

                   echo " <a  onClick=select_group_id('" . $id . "-disvis') id='".$fk_id."on1' name='".$fk_id."on1'   href='javascript:;' data-toggle='collapse' data-target='#" . $id_dism . "'"
                    . ">&nbsp;&nbsp;&nbsp;" . $row['name'] . " <i class='fa fa-fw fa-caret-down'></i></a>";
                    ?>
                          <script>
                      
                            $(document).ready(function () {
                                $("#<?php echo $fk_id ?>on1").click(function () {

                                    $.post("box", {
                                        data1: $("#group_Id").val()},
                                            function (data) {
                                                $("#showajax6").html(data);
                                            }
                                    );

                                });
                            });
                        </script><?php
                echo "</ul>";
                echo "  <ul id='" . $id_dism . "' class='collapse'>";
                foreach ($data_group as $row) {
                    $group_id_g = $row['group_Id'];
                    $divisId_g = $row['divisId'];
                    if ($divisId_g == $id) {
                        echo "<ul  id='person-list' class='nav nav-list'>";
                        echo "<li >";
                        echo "<a onClick=select_group_id('" . $group_id_g . "-iddisvis')  id='".$group_id_g."on'  name='".$group_id_g."on' ><div class='span' >&nbsp;</div>" . $row['groupname'] . "</a>";
                           ?>
                             <script>
                            $(document).ready(function () {
                                $("#<?php echo $group_id_g ?>on").click(function () {

                                    $.post("box", {
                                        data1: $("#group_Id").val()},
                                            function (data) {
                                                $("#showajax6").html(data);
                                            }
                                    );

                                });
                            });
                             </script>
                        <?php
                        echo "</li>";
                        echo "</ul>";
                    }
                }
                echo "</ul>";
            }
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
            echo "</ul>";
        }
    }
}
form_close();
?>
                    
                        </div>
                        </div>
    
                        <div id="showajax6" name="showajax6"></div>
                      







