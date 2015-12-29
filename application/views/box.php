<?php $this->load->view('header/header_title'); ?>
<?php $this->load->view('menu/menu'); ?>
<?php $this->load->view('menu/menuleft'); ?>
<input type  = "hidden" id="group_Id"         name="group_Id"      <?php echo "value=" . $group_Id_f; ?>></input>
<input type  = "hidden" id="divis_id"         name="divis_id"      <?php echo "value=" . $divis_id_f; ?>></input>
<input type  = "hidden" id="data_group"       name="data_group"      ></input>
<div id="span8" class="span12">
    <!--    ตารางข้อมูล-->
    <div class="row" >
        <div id="Person-1" class="box" >
            <div class="box-header" >
                <i class="icon-user icon-large"></i>
                <h5>ข้อมูล Databox</h5>
            </div>
            <div class="box-content box-table" >
                <table id='tableId' class='table table-hover tablesorter' >
                    <thead>
                        <tr>
                            <th>เวลา</th>
                            <th>ชื่องาน</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i='0';
                        foreach ($box as $row) {
                            $hidden = $row['databox_id'];
                            echo "<tr >";
                            echo "<td  onclick=\"chk(" . $hidden . ")\"  width='20%' >" . $row['date_upload'] . "</td>";
                            echo "<td  onclick=\"chk(" . $hidden . ")\" width='70%'>" . $row['subject'] . "</td>";
                            echo "</tr>";
                            $i++;
                        }
                        ?>
                    </tbody>

                </table>
                <div align="center"><?php 
            if($i>="19"){  
                echo $this->pagination->create_links(); 
            }
                ?></div>
            </div>
        </div>
    </div>
</div>
<!--Ajax ส่วนแสดงข้อมูล -->
<input type  = "hidden" id="code"       name="code"       ></input>
<div class="span4">
    <script type="text/javascript">
        $(document).ready(function () {
            $("#tableId tr").click(function () {
                $.post("<?php echo base_url(); ?>index.php/mainFunction/box_detail", {
                    data1: $("#code").val()},
                        function (data) {
                            $("#showajax").html(data);
                        }
                );

            });
        });
    </script>
    <div id="showajax" ></div>
</div>
<!--Ajax ส่วนแสดงข้อมูล -->
</div>
</div>
</div>
</div>
</div>
</div>
<?php $this->load->view('footer/footer'); ?>
                    




