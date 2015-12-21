

<script>

 $(":file").filestyle({buttonName: "btn-primary"});

function add(databox_id_text,subject_text,databox_search_text,databox_id,subject,databox_search,databox_id_div,subject_div,databox_search_div,save_id,add_id) {


	 document.getElementById(subject_div).style.display = "none";
	 document.getElementById(databox_search_div).style.display = "none";
	 document.getElementById(subject_text).style.display = "block";
	 document.getElementById(databox_search_text).style.display = "block";
	 document.getElementById(save_id).style.display = "block";
	 document.getElementById(add_id).style.display = "none";
	 document.getElementById("check").value ="save";
   
}
</script>






<script>
 $(":file").filestyle({buttonName: "btn-primary"});

function close_row(databox_id_text,subject_text,databox_search_text,databox_id,subject,databox_search,databox_id_div,subject_div,databox_search_div,save_id,add_id) {


	 document.getElementById(subject_div).style.display = "block";
	 document.getElementById(databox_search_div).style.display = "block";
	 document.getElementById(subject_text).style.display = "none";
	 document.getElementById(databox_search_text).style.display = "none";
	 document.getElementById(save_id).style.display = "none";
	 document.getElementById(add_id).style.display = "block";
   
}
</script>



<script>

function save(databox_id_text,subject_text,databox_search_text,databox_id,subject,databox_search,databox_id_div,subject_div,databox_search_div,save_id) {

  /*
	var databox_save = document.getElementById("databox_save").value;
	var subject_save = document.getElementById("subject_save").value;
	var databox_searcch_text_save = document.getElementById("databox_searcch_text_save").value ;
    */
	
     document.getElementById("databox_save").value =document.getElementById(databox_id_text).value;
     document.getElementById("subject_save").value =document.getElementById(subject_text).value;
	 document.getElementById("databox_search_text_save").value =document.getElementById(databox_search_text).value;
	 document.getElementById('myform').submit();

}

function del_row(databox_id_text,subject_text,databox_search_text,databox_id,subject,databox_search,databox_id_div,subject_div,databox_search_div,save_id) {

  /*
	var databox_save = document.getElementById("databox_save").value;
	var subject_save = document.getElementById("subject_save").value;
	var databox_searcch_text_save = document.getElementById("databox_searcch_text_save").value ;
    */
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


