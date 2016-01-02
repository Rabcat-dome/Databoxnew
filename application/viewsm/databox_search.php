<?php $this->load->view('header/header_title'); ?>
<?php $this->load->view('menu/menu'); ?>
<?php $this->load->view('java/javascript_head.php'); ?>

<section class="page container">
    <div class="row">
        <div id="span1_div" class="span2" >
        </div>
        <input type  = "hidden" id="group_Id"         name="group_Id"      <?php echo "value=" . $group_Id_f; ?>></input>
        <input type  = "hidden" id="data_group"       name="data_group"      ></input>
       
        <?php $this->load->view('java/javascript_box'); ?>
        <?php
        $attributes = array('id' => 'upload_pdf');
        echo form_open_multipart('http://127.0.0.1/j3databoxnew/index.php/mainFunction/databox_search', $attributes);
        ?>
        <script>

            $(function () {
                $("#from-datepicker").datepicker({
                    dateFormat: "yy-mm-dd"
                });



            });
        </script>
        <script>
            $(function () {
                $("#to-datepicker").datepicker({
                    dateFormat: "yy-mm-dd"
                });



            });
        </script>
        <div class="span2"  id="div_hidden1">
            ค้นหาวันที่ :
            <input name="from-date" type="text"  id="from-datepicker"  class="span2" />
        </div>

        <div class="span2" id="div_hidden2" >
            ถึง :
            <input name="to-date" type="text" id="to-datepicker"  class="span2" />
        </div>


        <div class="span2" id="div_hidden3" >
            ชั้นความลับ : 
            <select type="text" name="secrets_id"  id="secrets_id" class="span2"  >
                <option  value='0'  >ท้งหมด</option>    
                <option  value='1'  >ปกติ</option>
                <option  value='2'  >ลับ</option>
                <option  value='3'  >ลับมาก</option>
                <option  value='4'  >ลับที่สุด</option>

            </select>

        </div>


        <div class="span3" id="div_hidden4" >
            ค้นหา ชื่อ/คำค้นหา/เนื้อหา : 
            <input name="databox_search" type="text" id="databox_search" />

        </div>
         <input type  = "hidden" id="type_dataId_n"       name="type_dataId_n"      ></input>
         <input type  = "hidden" id="type_divisid_n"       name="type_divisid_n"      ></input>
         <div class="span3" id="div_hidden4" >
            หมวดเอกสาร : 
        
         <script>
                  function getComboA(sel) {
                                                            var value = sel.value;
                                                            
                                                              var id_type = value.split("-");
                                                           
                                                       if(id_type[1]=="dataId"){
                                     document.getElementById("type_dataId_n").value = id_type[0];
                                 }
                                  if(id_type[1]=="divisid"){
                                     document.getElementById("type_divisid_n").value = id_type[0];
                                 }
                                       }
            </script>
            
            <select id='select1'  class='' name='select1'  onchange="getComboA(this)"  >
          
                 
                                                        <?php
                                                        echo "<option  value=''>ทั้งหมด</option>";
                                                        foreach ($data_type_search as $row) {
                                                           $type_id_ck = $row['dataId'] . "-dataId";
                                                           echo "<option  value='" . $type_id_ck ."' >" . $row['type_name'] . "</option>";
                                                        }
                                                        ?>

                                                        <?php
                                                        foreach ($division as $row) {
                                                            $division_id_ck = $row['divisid'] ."-divisid";
                                                            echo "<option   value='" . $division_id_ck . "' >" . $row['divisname'] . "</option>";
                                                        }
                                                        ?>

                                                    </select>
            
            
        </div>
        <br>
        <p>
            
       
        <div class="span2" id="div_hidden5" >
            <a onclick="document.getElementById('upload_pdf').submit()" href="#"  class="btn btn-small btn-danger">
                <i class="btn-icon-only icon-save"  >ค้นหา</i>
            </a>
        </div>
        

        <div id="span8" class="span16">
            <div class="row">

                <div id="Person-1" class="box">
                    <div class="box-header">
                        <i class="icon-user iconิ-large"></i>
                        <h5>ข้อมูล Databox</h5>
                    </div>
                    <div class="box-content box-table">
                        <table id="tableId" class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>วันที่</th>
                                    <th>เรื่อง</th>
                                </tr>
                            </thead>
                            <tbody> 
                            <input type="hidden" id="code" cols="45" rows="5"></textarea>

                            <?php
                            foreach ($last_update as $row) {
                                $databox_id = $row['databox_id'];
                                echo "<tr>";
                                echo "<td onclick=\"chk(" . $databox_id . ")\"  width='20%'>" . $row['date_upload'] . "</a></td>";
                                echo "<td onclick=\"chk(" . $databox_id . ")\"  width='100%'>" . $row['subject'] . "</a></td>";
                                echo "</tr>";
                            }
                            ?>


                            </tbody>
                        </table>  <div align="center"><?php echo $this->pagination->create_links(); ?></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="span10">

            <script type="text/javascript">
                $(document).ready(function () {
                    $("#tableId tr").click(function () {
                        $.post("http://127.0.0.1/j3databoxNEW/index.php/mainFunction/box_detail", {
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

    </div>

</div>


</div>

</div>

</div>
</div>
<?php echo form_close(); ?>
<?php $this->load->view('footer/footer'); ?>
                    




