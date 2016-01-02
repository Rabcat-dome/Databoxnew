 <script>
                                                       var   data_group_id =   document.getElementById("showajax").selectedIndex;
                                                       var data_group_id_1 = data_group_id;
                                                        document.getElementById("showajax4").selectedIndex =  data_group_id_1;
                                                       </script>
       <option  value='0'> กรุณาเลือก </option>
        <?php
      $data1 = $_POST['data3'];
$pieces = explode("-", $data1);

        foreach ($data_group_main as $row) {
            $fk_main = $row['fk_id'];
           if($pieces[0]==$fk_main){
            $id_main = $row['id'];
            echo "<option  value='" . $id_main . "'>" . $row['name'] ."</option>";
          }
        }
        ?>
