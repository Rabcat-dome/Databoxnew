<?php $this->load->view('header/header_title'); ?>
<?php $this->load->view('menu/menu'); 
  $item_per_page = 10;
  $get_total_rows = $this->j3databox->get_num_index();
  $total_pages = ceil($get_total_rows/$item_per_page); ?>
<?php $this->load->view('menu/meunright'); ?>

  <script type="text/javascript">
 $(document).ready(function() {

  var track_click = 0; //track user click on "load more" button, righ now it is 0 click
  
  var total_pages = <?php echo $total_pages; ?>;
  $('#results').load("<?php echo base_url(); ?>asset/fetch_pages.php", {'page':track_click}, function() {track_click++;}); //initial data to load

  $(".load_more").click(function (e) { //user clicks on button
  
    $(this).hide(); //hide load more button on click
    $('.animation_image').show(); //show loading image

    if(track_click <= total_pages) //make sure user clicks are still less than total pages
    {
      //post page number and load returned data into result element
      $.post('<?php echo base_url(); ?>asset/fetch_pages.php',{'page': track_click}, function(data) {
      
        $(".load_more").show(); //bring back load more button
        
        $("#results").append(data); //append data received from server
        
        //scroll page to button element
        $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 500);
        
        //hide loading image
        $('.animation_image').hide(); //hide loading image once data is received
  
        track_click++; //user click increment on load button
      
      }).fail(function(xhr, ajaxOptions, thrownError) { 
        alert(thrownError); //alert any HTTP error
        $(".load_more").show(); //bring back load more button
        $('.animation_image').hide(); //hide loading image once data is received
      });
      
      
      if(track_click >= total_pages-1)
      {
        //reached end of the page yet? disable load button
        $(".load_more").attr("disabled", "disabled");
      }
     }
      
    });
});
</script>
<?php /// $this->load->view('java/javascript_upload'); ?>

      

			
				  <input type  = "hidden" id="group_Id"         name="group_Id"      <?php echo "value=".$group_Id_f; ?>></input>
				  <input type  = "hidden" id="divis_id"         name="divis_id"      <?php echo "value=".$divis_id_f; ?>></input>
                  <input type  = "hidden" id="data_group"       name="data_group"      ></input>
			
				
				

                       
						  <div id="span8" class="span12">

                <div class="row">
				<?php  
				//top.location.href=this.options[this.selectedIndex].value;
				//foreach ($box as $row) { $divis_id = $row['divisId']; }?>
            
            
				 <div id="Person-1" class="box">
                 <div class="box-header">
                            <i class="icon-user iconิ-large"></i>
                             <h5>ข้อมูล Databox</h5>
                        </div>
						   <div class="box-content box-table">
                    

						
					<?php echo "<div id='results'></div>";?>


	                    <input type="hidden" id="code" cols="45" rows="5"></textarea>
                            
<div align="center">
<button class="load_more" id="load_more_button">load More</button>
<div class="animation_image" style="display:none;"><img src="<?php echo base_url();?>asset/ajax-loader.gif"> Loading...</div>
</div>
                </div>
                </div>
            </div>
			 </div>



			 <div class="span4">
               
                
					  
                  
<script type="text/javascript">
$(document).ready(function(){
     $("#tableId tr").click(function(){
 $.post("http://localhost/j3databoxNEW/index.php/mainFunction/box_detail", { 
      data1: $("#code").val()}, 
      function(data){
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
                         
                    <?php $this->load->view('footer/footer'); ?>
                    




