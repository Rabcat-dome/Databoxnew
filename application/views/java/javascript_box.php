


<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script>

function select_id(select_idbox) {
      document.getElementById("select_id").value =select_idbox;
      menu_select(select_idbox)
}

function menu_select(select_idbox) {
      document.getElementById('menu_select').submit();
}

function select_id_type(select_type) {
	  var check_meun =document.getElementById("check_meun").value;
      document.getElementById("select_id_type").value =select_type;
      select_id_type_submit(select_id_type)
}

function select_id_type_submit(select_type) {
	   document.getElementById('menu_select').submit();
}

function select_disvisid(group_Id)  {
	  var check_meun2 =document.getElementById("check_meun2").value;
   
      document.getElementById("select_disvisid").value =group_Id;
      select_disvisid_submit(group_Id);
}

function select_disvisid_submit(group_Id) {
      document.getElementById('menu_select').submit();
	  document.getElementById("select_disvisid").value =group_Id;
}
function chk(id) {
    var  span8 =  document.getElementById('span8').className;

     if(span8=="span12")
     {
        document.getElementById('span8').className = 'span4';	 
	 }

	  if(span8!="span12")
     {
        document.getElementById('span8').className = 'span12';	 
	 }
     document.getElementById('code').value = id;	
}
</script>
