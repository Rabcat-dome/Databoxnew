									    <?php $this->load->view('header/header_title'); ?>
										<?php $this->load->view('menu/menu'); ?>
										<?php $this->load->view('java/javascript_head.php'); ?>

                <div class="span15" style="margin-left: 10%">
      
                   
                   	
                    <div id="Person-1" class="box">
                        <div class="box-header">
                            <i class="icon-user iconิ-large"></i>
                            <h5>ผลการค้นหา</h5>
                            
                        </div>
                        <div class="box-content box-table">

                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>เวลา</th>
									<th>หมวดงาน</th>
                                    <th>ชื่องาน</th>
							
                                </tr>
                            </thead>
                            <tbody> 
                            <?php    foreach ($last_update as $row) {  
						echo "<tr>";
						echo "<td  width='20%'><a href='/j3databoxNEW/index.php/mainFunction/data_detail'>".$row['date_upload']."</a></td>";	
						echo "<td  width='20%'><a href='/j3databoxNEW/index.php/mainFunction/data_detail'>".$row['groupname']."</a></td>";	
						echo "<td  width='100%'><a href='/j3databoxNEW/index.php/mainFunction/data_detail'>".$row['subject']."</a></td>";
						echo "</tr>";
						} ?>
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                  
                        </div>

                    </div>
                
                </div>
            </div>
                    
                    <?php $this->load->view('footer/footer'); ?>
                    