


<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script>
function add(databox_id_text,subject_text,databox_secrets_text,databox_id,subject,databox_secrets,databox_id_div,
         subject_div,databox_secrets_div,save_id,add_id,databox_type,databox_type_div,databox_type_text,databox_group,
		 databox_group_div,databox_group_text) {

	 document.getElementById(subject_div).style.display = "none";
	 document.getElementById(subject_text).style.display = "block";
	 document.getElementById(save_id).style.display = "block";
	 document.getElementById(add_id).style.display = "none";
	 document.getElementById("check").value ="save";
	 //-------------------- ชั้นความลับ
	 // ซ่อนข้อความ
	 document.getElementById(databox_secrets_div).style.display = "none";
     // เปิด TextBox
	 document.getElementById(databox_secrets_text).style.display = "block";  
	  //-------------------- ประเภท
	 // ซ่อนข้อความ
	 document.getElementById(databox_type_div).style.display = "none";
     // เปิด TextBox
	 document.getElementById(databox_type_text).style.display = "block";
	   //-------------------- หมวดเรื่องย่อย
	 // ซ่อนข้อความ
	 document.getElementById(databox_group_div).style.display = "none";
     // เปิด TextBox
	 document.getElementById(databox_group_text).style.display = "block";  
}
</script>






<script>
 $(":file").filestyle({buttonName: "btn-primary"});

function close_row(databox_id_text,subject_text,databox_secrets_text,databox_id,subject,databox_secrets,databox_id_div,
         subject_div,databox_secrets_div,save_id,add_id,databox_type,databox_type_div,databox_type_text,databox_group,
		 databox_group_div,databox_group_text) {

	     document.getElementById(subject_div).style.display = "block";
	     document.getElementById(subject_text).style.display = "none";
	     document.getElementById(subject_div).style.display = "block";
	     document.getElementById(subject_text).style.display = "none";
		 //-------------------- ชั้นความลับ
		 // ซ่อนข้อความ
		 document.getElementById(databox_secrets_div).style.display = "block";
		 // เปิด TextBox
		 document.getElementById(databox_secrets_text).style.display = "none";  
		  //-------------------- ประเภท
		 // ซ่อนข้อความ
		 document.getElementById(databox_type_div).style.display = "block";
		 // เปิด TextBox
		 document.getElementById(databox_type_text).style.display = "none";
		   //-------------------- หมวดเรื่องย่อย
		 // ซ่อนข้อความ
		 document.getElementById(databox_group_div).style.display = "block";
		 // เปิด TextBox
		 document.getElementById(databox_group_text).style.display = "none";  
		 document.getElementById(save_id).style.display = "none";
	     document.getElementById(add_id).style.display = "block";
}
</script>



<script>



function save(databox_id_text,subject_text,databox_type_text,databox_group_text,databox_secrets_text,save_id) {
			
              document.getElementById("secrets_save").value  =  document.getElementById(databox_secrets_text).value;
			  document.getElementById("type_id_save").value  = document.getElementById(databox_type_text).value;
			  document.getElementById("group_Id_save").value = document.getElementById(databox_group_text).value;
			  document.getElementById("subject_save").value  = document.getElementById(subject_text).value;
			  document.getElementById("databox_save").value  = document.getElementById(databox_id_text).value;  
              document.getElementById("subject_save").value =document.getElementById(subject_text).value;
	          document.getElementById('myform').submit();
}

function del_row(databox_id_text,subject_text,databox_search_text,databox_id,subject,databox_search,databox_id_div,subject_div,databox_search_div,save_id) {

     document.getElementById("check").value ="del";
     document.getElementById("databox_save").value =document.getElementById(databox_id_text).value;
	 document.getElementById('myform').submit();

}
function changeFunc(value)
	{   
    document.getElementById('menu_save').submit();

    }



function runScript(e) {
    if (e.keyCode == 13) {
	
     // document.getElementById('myform').submit();
    }
}
</script>

<script type="text/javascript">
      document.onclick=check;
      function check(e)
      {
       //document.getElementById('myform').submit();
      }
</script>


<script type="text/javascript">
	$(document).ready(function() {
		$(".flip").click(function() {
			$(".panel_hidden").slideToggle("slow");
		});
	});
</script>



<script>
$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});
$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        console.log(numFiles);
        console.log(label);
    });
});
   function setfilename(val)
  {
    var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
   document.getElementById("filename").value = fileName;

  }


  $(document).on('change', '.btn-file2 :file2', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});
$(document).ready( function() {
    $('.btn-file2 :file').on('fileselect', function(event, numFiles, label) {
        console.log(numFiles);
        console.log(label);
    });
});


  function setfilename2(val)
  {
    var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
   document.getElementById("filename2").value = fileName;
  }
</script>


