<script>
$(document).ready(function(){
$(".country").change(function()
{
  var id=$(this).val();
  var dataString = 'id='+ id;
  $.ajax
  ({
   type: "POST",
   url: "&lt;? echo base_url(); ?&gt;admin/produto/ajax_call",
   data: dataString,
   cache: false,
   success: function(html)
   {
   $(".city").html(html);
   } 
  });

});
});
</script>


<select name="country" class="styled" class="country">
                <option selected="selected">Selecione uma categoria</option>
                &lt;? foreach($categoria as $listcategoria): ?&gt;
                    <option value="&lt;?=$listcategoria-&gt;id_categoria; ?&gt;">&lt;?=$listcategoria->categoria; ?&gt;</option>
                &lt;? endforeach; ?&gt;
            </select>          

            <select name="city" class="city">
                <option selected="selected">--Select City--</option>
            </select>