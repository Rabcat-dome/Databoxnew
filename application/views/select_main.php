        <option  value='0'> กรุณาเลือก </option>
        <?php
        foreach ($data_group_main as $row) {
            $type_id_ck = $row['id'];
            echo "<option  value='" . $type_id_ck . "'>" . $row['name'] . "</option>";
        }
        ?>


