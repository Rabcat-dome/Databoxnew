        <option  value='0'> กรุณาเลือกรายการ </option>
        
        <?php
              $data2 = $_POST['data2'];
            $pieces = explode("-", $data2);
        foreach ($data_group_up as $row) {
          $divisId = $row['divisId'];
        
        if($divisId==$pieces[0]){
              $group_Id = $row['group_Id'];
            echo "<option  value='".$group_Id."' >" . $row['groupname'] ."</option>";
        
        }
        }
        ?>