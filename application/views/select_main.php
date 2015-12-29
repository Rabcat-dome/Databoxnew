        <option  value='0'> กรุณาเลือก </option>
        <?php
      $data1 = $_POST['data1'];
$pieces = explode("-", $data1);

        foreach ($data_group_main as $row) {
            $fk_main = $row['fk_id'];
            if($pieces[0]==$fk_main){
            $id_main = $row['id'];
            echo "<option  value='" . $id_main . "'>" . $row['name'] ."</option>";
          }
        }
        ?>


