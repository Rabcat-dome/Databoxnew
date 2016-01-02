        <option  value='0'> กรุณาเลือก </option>
        <?php
      $data1 = $_POST['data1'];
$pieces = explode("-", $data1);
?>
        
      <?php
   if($pieces[1]=="data_type"){
       
        foreach ($data_group_up as $row) {
            $dataId = $row['dataId'];
            if($pieces[0]==$dataId){
            $group_Id = $row['group_Id'];
            echo "<option  value='" . $group_Id . "'>" .$row['groupname'] ."</option>";
         }
        }
        ?>
        <script>
         document.getElementById("table_main").style.display = "none";
          document.getElementById("btn2").style.display = "none";
           document.getElementById("btn2_edit").style.display = "none";
           document.getElementById("type_data").value = "data_type";
        </script>
        <?php
   }
     
        ?>
        
<?php
     if($pieces[1]=="division"){
        foreach ($data_group_main as $row) {
            $fk_main = $row['fk_id'];
            if($pieces[0]==$fk_main){
            $id_main = $row['id'];
            echo "<option  value='" . $id_main . "'>" . $row['name'] ."</option>";
          }
        }
        ?>
         <script>
         document.getElementById("table_main").style.display = "block";
          document.getElementById("btn2").style.display = "block";
           document.getElementById("btn2_edit").style.display = "block";
           document.getElementById("type_data").value = "";
        </script>
            <?php
     }
        ?>


