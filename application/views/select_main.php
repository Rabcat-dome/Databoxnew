

<script>
    function myFunction_add() {
        document.getElementById("panel_hidden").style.display = 'block';
        document.getElementById("flip_add").style.display = 'none';
        document.getElementById("flip_close").style.display = 'block';
    }
    function myFunction_close() {
        document.getElementById("panel_hidden").style.display = 'none';
        document.getElementById("flip_add").style.display = 'block';
        document.getElementById("flip_close").style.display = 'none';
    }
    function myFunction_add_2() {
  
        document.getElementById("panel_hidden_2").style.display = 'block';
        document.getElementById("flip_add_2").style.display = 'none';
        document.getElementById("flip_close_2").style.display = 'block';
    }
    function myFunction_close_2() {
           

        document.getElementById("panel_hidden_2").style.display = 'none';
        document.getElementById("flip_add_2").style.display = 'block';
        document.getElementById("flip_close_2").style.display = 'none';
    }
</script>


<?php
$data1 = $_POST['data1'];
$pieces = explode("-", $data1);


if ($pieces[1] != "box") {
    ?>												
    <table  >
        <tr>
            <td>
                <div class="input-prepend"><span class="add-on"   >หมวดเอกสารหลัก</span>
            </td>
            <td>

                <select class='span6'  onchange="getSelect(this)" >
                    <?php
                    foreach ($data_group_main as $row) {
                        echo "<option value='" . $row["fk_id"] . "'>" . $row["name"] . "</option>";
                    }
                    ?>
                </select>
            </td>

            <td>

                <div class="flip_add" id="flip_add" onclick="myFunction_add()"  >
                    <span class="add-on"   >&nbsp;+&nbsp; </span>
                </div>

                <div id="flip_close" onclick="myFunction_close()" style="display: none;">
                    <span class="add-on" >&nbsp;-&nbsp;</span>
                </div>
                
            </td>
            
        </tr>
        <tr>
       
             <th colspan="2"> 
                </th>
            </tr>
        <tr>
            
            <td>
                <div class="input-prepend" id="mySelect_text" name="mySelect_text" style="display: none;" onchange="getDataB(this)"  ><span class="add-on"   >หมวดเอกสารรอง</span>
            </td>
            <td>
                <select class='span6'  id="mySelect" style="display: none;" >
                    <?php
                    if ($pieces[1] == "division") {

                        foreach ($data_division as $row) {
                            $row_id = $row["divisid"];
                            // if ($pieces[0] == $row_id) {
                            $group_Id = $row["group_Id"];
                            echo "<option value='" . $group_Id . "'>" . $row["groupname"] . "</option>";
                            ?>
                            <script>document.getElementById("group_Id").value =<?php echo $group_Id ?>;</script>
                            <?php
                            // }
                        }
                    }
                    ?>
                    <?php
                    if ($pieces[1] == "data_type") {
                        foreach ($data_type_up as $row) {
                            $group_name = $row["type_id"];
                            // if ($pieces[2] == $group_name) {
                            $group_Id = $row["group_Id"];
                            echo "<option value='" . $group_Id . "'>" . $row["groupname"] . "</option>";
                            ?>
                            <script>document.getElementById("group_Id").value =<?php echo $group_Id ?>;</script>
                            <?php
                            //  }
                        }
                    }
                    ?>

                </select>

            </td>
            <td>

                <div class="flip_add" id="flip_add_2" onclick="myFunction_add_2()" style="display: none" >
                    <span class="add-on"   >&nbsp;+&nbsp; </span>
                </div>

                <div  id="flip_close_2" onclick="myFunction_close_2()" style="display: none;">
                    <span class="add-on" >&nbsp;-&nbsp;</span>
                </div>
            </td>
        </tr>
    </table>

    <?php
}
?>
<?php if ($pieces[1] == "box") { ?>

    <select class='span5' name="databox_group"  class="span5"  id="<?php echo $databox_group_text; ?>"
            onkeypress="return runScript(event)" 
            style="display: none;  width: 150px;"  >
        <?php
        $change_division_group_up = $pieces[1];
        if ($change_division_group_up != "") {
            foreach ($data_group_up as $row) {
                $group_Id_g = $row['group_Id'];
                if ($pieces[0] == $group_Id_g) {
                    ?>
                    <option  value='<?php echo $row['group_Id'] ?>'  >
                        <?php echo $row['groupname'] ?></option>";
                    <?php
                }
            }
        }

        if ($change_division_group_up == "") {
            foreach ($data_group_up as $row) {
                $group_Id_g = $row['group_Id'];
                if ($group_Id == $group_Id_g) {
                    ?>
                    <option  value='<?php echo $row['group_Id'] ?>'  >
                        <?php echo $row['groupname'] ?></option>";
                    <?php
                }
            }
        }
        ?>
    </select>
<?php } ?>
<script>

    function getSelect(sel1) {
        var value1 = sel1.value;
        document.getElementById("flip_add_2").style.display = "block";
        document.getElementById("mySelect").style.display = "block";
        document.getElementById("mySelect_text").style.display = "block";
        document.getElementById("group_Id").value = value1;
        var selectobject = document.getElementById("mySelect")
        for (var i = 0; i < selectobject.length; i++) {
            if (selectobject.options[i].value != value1)
                selectobject.remove(i);
        }

    }
</script>




