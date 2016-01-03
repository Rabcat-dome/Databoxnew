
<?php
$data1 = $_POST['data1'];
?>


<input type="hidden" id="data1" name="data1" value="<?php echo $data1 ?>"></input>
<?php
foreach ($box_detail as $row) {
    $databox_id = $row['databox_id'];
    $date = $row['date_upload'];
    $subject = $row['subject'];
    $divisname = $row['divisname'];
     $groupname = $row['groupname'];
     $type_name = $row['type_name'];
    $databox_search = $row['databox_search'];
    $databox_detail = $row['databox_detail'];
    $uploaded_url = $row['uploaded_url'];
    $upload_urlpdf = $row['upload_urlpdf'];
}
?>

<?php 
$tes = "http://127.0.0.1/j3databoxnew/uploads/" . $upload_urlpdf . ""; 
$origin = "http://127.0.0.1/j3databoxnew/uploads/" . $uploaded_url . ""         
?>
<?php if ($upload_urlpdf != "") { ?>
    <embed src="<?php echo $tes; ?>"  height="450" class="span9"  ></embed>  
<?php } ?>

<?php if ($upload_urlpdf == "") { ?>
    <img src="http://127.0.0.1/j3databoxnew/uploads/not_pic.png" style="height:450; margin-left: 30px">
<?php } ?>  

<div align="center">
    <legend > </legend>
</div>
<div class="form-inner">
    <div class="input-prepend">
        <div style="position:relative;">
            <table border="0" class="span4">
                <tr>
                    <td>
                        <div class="input-prepend">
                            <span class="add-on" style="width: 100px; text-align: left; font-size: 12px;" >เลขที่เอกสาร</span>
                        </div>
                    </td>
                    <td>
                        <label  style="background-color :#ffffff; height: 25px;  border-style: solid; border-width: 1px; font-size: 12px;">&nbsp; <?php echo $databox_id ?></label>
                    </td>

                </tr>
                <tr>

                </tr>

        </div>				
    </div>
    <tr>
        <td>
            <div class="input-prepend">
                <span class="add-on" style="width: 100px;  text-align: left; font-size: 12px; height: 40px" >ชื่อเรื่อง</span>
            </div>
        </td>
        <td >
            

            <textarea  style="overflow:auto;resize:none; background: #FFF; width: 400px;" rows="2"  disabled><?php echo $subject ?></textarea>
            
            
        </td>
    </tr>

    <tr>
        <td>  
            <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">ประเภทเอกสาร</span></div>
        </td>
        <td>
             <textarea  style="overflow:auto;resize:none; background: #FFF; width: 400px;" rows="1"  disabled><?php echo $divisname.''.$type_name ?></textarea>
        </td>
    </tr>
    <tr>
        <td>  
            <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">หมวดย่อย</span></div>
        </td>
        <td>
           
              <textarea  style="overflow:auto;resize:none; background: #FFF; width: 400px;" rows="1"  disabled><?php echo $groupname ?></textarea>
      
        </td>
    </tr>
    <tr>
        <td>  
            <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left;  font-size: 12px;">วันที่จัดทำ</span></div>
        </td>
        <td>
         <textarea  style="overflow:auto;resize:none; background: #FFF; width: 400px;" rows="1"  disabled><?php echo $date ?></textarea>
      
        </td>
    </tr>

    <tr>
        <td>  
            <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">ผู้จัดทำ</span></div>
        </td>
        <td>
            <label style="background-color :#ffffff; height: 25px;  border-style: solid; border-width: 1px; font-size: 12px;" ></label>
        </td>
    </tr>

    <td>  
        <div class="input-prepend"><span class="add-on" style="width: 100px; text-align: left; font-size: 12px;">หน่วยงาน</span></div>
    </td>
    <td>
        <label style="background-color :#ffffff; height: 25px;  border-style: solid; border-width: 1px; font-size: 12px;" ></label>
    </td>
    <tr>
        <td>
           
        </td>    
    </tr>
    <tr>
     <?php 
     $urlpdf = "j3databoxnew/uploads/" . $upload_urlpdf . ""; 
      $origin = "j3databoxnew/uploads/" . $uploaded_url . ""    
     ?>
        
    <td>
       
    </td>
    
       
     <td>
         <br>
         <?php if ($upload_urlpdf != "") { ?>
   <table>
            <tr>
                <td>
                  
        <a  href="../../../../<?php echo $urlpdf?>"  class="btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-save"  >Download PDF</i>
                                        </a>
            </td>
             <td>
                &nbsp;&nbsp;
            </td>
            <td>
                <a  href="../../../../<?php echo $origin?>"  class="btn btn-small btn-danger">
                                            <i class="btn-icon-only icon-save"  >Download Origin</i>
                                        </a>
                </td>
      </tr>
       </table>
         <?php } ?>
               
      
      
    </td>
    
    </tr>
</tr>



</table>
