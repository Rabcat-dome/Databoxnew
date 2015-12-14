<?php //include('database.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>phpmysqlcode</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){             
	function load()
	{
	var ID = $(".more").attr("id");
	if(ID)
	{
		$("#loader").show();
		$.ajax({
		type: 'POST',
		url: 'load_scroll.php',
		data: {id:ID},
		cache: false,
		success: function(html){
			$("#loader").hide();
			$("#more"+ID).before(html);
			$("#more"+ID).remove();
			}
		});
	}
	}
	
	$(window).scroll(function () {
    if ($(window).scrollTop() >= $(document).height() - $(window).height() - 5) {
    load();
    }
});
	});
</script>
</head>
<body>
<div class="wrapper">
<div class="header">
<div class="mybg"><h2 class="head">Demo www.phpmysqlcode.com</h2>
</div></div>

<div class="body1">
<div class="body2">
<div class="main_table">

    <div id="content">
    	<div class="post">
			<h2>Load More Example</h2>
               
   			<?php 
			 print_r($q);
			//$q = mysql_query("select * FROM databox_upload order by databox_id desc limit 10"); 
			 foreach ($q as $row) { 
			//while($row = mysql_fetch_array($q)){
			$id = $row['databox_id'];?>
    			<div class="post_box" align="left">
				    
					<div class="text">
						<p>
							 <?php echo $row['subject']; ?>		
						</p>
					</div>
                    <div class="comments-info">
					<br>URL :<a href="http://www.phpmysqlcode.com">Website</a>
					</div> 
					<div class="clear"></div>
                    	
				</div>
			<?php }?>
    	<?php if($q>0){?>
			<div id="more<?php echo $id; ?>" class="pmc_loadbox">
			<a href="#" id="<?php echo $id; ?>" class="more">Loading..</a>
			<img src="loading.gif" id="loader" style="display:none">
			</div>
			<?php } else { ?>
			<div id="more" class="pmc_loadbox">
			<a href="#" id="" class="more">No record</a>
			</div><?php }?>	
			
		</div>
	
	</div>
</div>
</div></div>
</div>

</body>
</html>
