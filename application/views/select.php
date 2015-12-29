        <option  value='0'> กรุณาเลือกรายการ </option>
        <?php
        foreach ($division as $row) {

            echo "<option  value='' >" . $row['divisname'] . "</option>";
        }
        ?>