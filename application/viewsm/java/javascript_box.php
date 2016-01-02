
<script>
    function select_id(select_idbox) {
        document.getElementById("select_id").value = select_idbox;
        menu_select(select_idbox)
    }

    function menu_select(select_idbox) {
        //  document.getElementById('menu_select').submit();
    }

    function select_id_type(select_type) {
        var check_meun = document.getElementById("check_meun").value;
        document.getElementById("select_id_type").value = select_type;
        select_id_type_submit(select_id_type)
    }

    function select_id_type_submit(select_type) {
        // document.getElementById('menu_select').submit();
    }

    function select_group_id(group_Id) {
 
             document.getElementById("group_Id").value= group_Id ;
             document.getElementById('name1').style.display = 'none';
    
       // select_disvisid_submit(group_Id);
    }
    function select_disvisid(group_Id) {

        var check_meun2 = document.getElementById("check_meun2").value;
        document.getElementById("select_disvisid").value = group_Id;
       // select_disvisid_submit(group_Id);
    }

    function select_disvisid_submit(group_Id) {
      //  document.getElementById('menu_select').submit();
         document.getElementById("select_disvisid").value =group_Id;
    }
    function chk(id) {
        var span8 = document.getElementById('span8').className;
        document.getElementById('code').value = id;	
            if (span8 != "span12"&&span8 != "span4")
               {
        if (span8 == "span16")
        {
         
            document.getElementById('showajax').style.display = 'block';
            document.getElementById('span8').className = 'span3';
            document.getElementById('span1_div').className = '';
            document.getElementById('div_hidden1').style.display = 'none';
            document.getElementById('div_hidden2').style.display = 'none';
            document.getElementById('div_hidden3').style.display = 'none';
            document.getElementById('div_hidden4').style.display = 'none';
            document.getElementById('div_hidden5').style.display = 'none';
              document.getElementById('select1').style.display = 'none';
           
        }
        if (span8 == "span3")
        {
              
            document.getElementById('showajax').style.display = 'none';
            document.getElementById('span8').className = 'span16';
            document.getElementById('span1_div').className = 'span2';
            document.getElementById('div_hidden1').style.display = 'block';
            document.getElementById('div_hidden2').style.display = 'block';
            document.getElementById('div_hidden3').style.display = 'block';
            document.getElementById('div_hidden5').style.display = 'block';
            document.getElementById('div_hidden4').style.display = 'block';
            document.getElementById('select1').style.display = 'block';
            
           
        }
             }
              if (span8 != "span16"&&span8 != "span2")
               {
             
             if (span8 == "span12")
        {
            
            document.getElementById('showajax').style.display = 'block';
            document.getElementById('span8').className = 'span4';
            document.getElementById('span1_div').className = '';
           
        }
        if (span8 == "span4")
        {
            
            document.getElementById('showajax').style.display = 'none';
            document.getElementById('span8').className = 'span12';
            document.getElementById('span1_div').className = 'span4';
            
           
        }
             }
    }
    function box_bn(id_bn) {
        var check_meun2 = document.getElementById("check_meun2").value;
        document.getElementById("select_disvisid").value = id_bn;
      //  select_disvisid_submit(id_bn);
    }
</script>
