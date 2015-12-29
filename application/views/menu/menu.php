<?php $this->load->view('menu/nav_menu'); ?>


                <section class="nav nav-page">
                    <div class="navbar-inner">
                        <div class="container">



                            <br></br>
                            <i class="icon-data">
                                
                                <ul class="nav nav-pills">
                                                        <li style="font-size:300%;">
                                                            <a href="page_upload"><i class="icon-home icon-large"></i></a>
                                                        </li>
                                                    </ul> J3 DataBox</i> คลังข้อมูล กรมยุทธการทหาร
                            <?php
                            $var1 = date("Y-m-d");
                            $dayArray = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
                            $monthArray = array("มกราคม", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
                            $days_yesr = $var1;
                            $day = substr($days_yesr, 8, 3);
                            $month = substr($days_yesr, 5, 2);
                            $yesr = substr($days_yesr, 0, 4);
                            $month = $month + 0;
                            $day = $day + 0;
                            $month = $monthArray[$month];
                            $daydata = $var1;
                            $daydata = explode("-", $daydata);
                            $jd = cal_to_jd(CAL_GREGORIAN, $daydata[1], $daydata[2], $daydata[0]); //2011-01-29
                            $day_text = (jddayofweek($jd, 1));
                            echo "<font  color='#0BB8E4'>";
                            echo "วันที่&nbsp;";
                            echo $day;
                            echo "&nbsp;";
                            echo $month;
                            echo "&nbsp;";
                            echo $yesr + 543;
                            echo "</font>"
                            ?>


                            <ul class="nav pull-right">
                                <li>

                                    <table  border="0">

                                        <?php $attributes = array('id' => 'main');
                                        echo form_open_multipart('<?echo base_url()?>index.php/mainFunction/databox_search', $attributes);
                                        ?>
                                        
                                        <div  style="margin-top: 4px;">

                                            <td valign="bottom" >  

                                                <div class="tables">
                                                  



                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <strong><input type="text" id="search"  name="search" style="width: 400px; " onkeypress="handle(event)">	</input></strong>


                                                    <div id="show" name="show"   style="height: 350px; width: 400px; margin-left: 25px; overflow:hidden; display:none;  position: absolute;  background-color: #D8D8D8; -webkit-box-shadow: 
                                                         -2px 1px 17px 2px rgba(0,0,0,0.75);
                                                         -moz-box-shadow: -2px 1px 17px 2px rgba(0,0,0,0.75);
                                                         box-shadow: -2px 1px 17px 2px rgba(0,0,0,0.75);
                                                         padding-right: 10px;
                                                         padding-bottom: 10px;
                                                         padding-left: 10px;
                                                         " >


                                                        <table width="300px" id="tblData" class="target" bgcolor="#ACAAFC">

                                                            <tbody>
                                                                <tr>
                                                                    <td>

                                                                    </td>
                                                                </tr>
                                                            <input type="hidden" name="id_box" id="id_box"></input>

                                                            <?php
                                                            $i = '0';
                                                          echo  "<tr style='display: table-row; '><td class='even' onclick=\"chk_menu(1)\" ><button style='text-align: left; width: 400px'></button></td></tr>";
                                                            foreach ($search as $r) {
                                                                $hidden = $r['databox_id'];
                                                                echo "<tr style='display: table-row; '><td class='even' onclick=\"chk_menu(" . $hidden . ")\" ><button style='text-align: left; width: 400px'>" . $r['subject'] . "</button></td></tr>";
                                                            }
                                                            foreach ($search as $r) {
                                                                $hidden = $r['databox_id'];
                                                                echo "<tr style='display: table-row; '><td class='even' onclick=\"chk_menu(" . $hidden . ")\" ><button style='text-align: left; width: 400px'>" . $r['databox_search'] . "</button></td></tr>";
                                                            }
                                                            foreach ($search as $r) {
                                                                $hidden = $r['databox_id'];
                                                                echo "<tr style='display: table-row; '><td class='even' onclick=\"chk_menu(" . $hidden . ")\" ><button style='text-align: left; width: 400px'>" . $r['databox_detail'] . "</button></td></tr>";
                                                            }
                                                            
                                                            ?>


                                                            <script>
                                                                  function handle(e) {
                                                            if (e.keyCode === 13) {
                                                               
                                                                
                                                                location.href = "/j3databoxNEW/index.php/mainFunction/databox_search";
                                                            }

                                                            return false;
                                                        }
                                                                function chk_menu(id_search)
                                                                {
                                                                    var id_box = document.getElementById("id_box").value;
                                                                     if(id_search!="")
                                                                {
                                                                    document.getElementById("id_box").value = id_search;
                                                                    document.getElementById('main').submit();
                                                                }
                                                                 
                                                                }
                                                            </script>
<?php echo form_close(); ?>

                                                            </tbody>
                                                        </table>



                                                    </div>
                                                    <script>
                                                        $(".sidenavOver").hide();
                                                //on hover over the a tag with atribute href='#games' 
                                                        $('.container').on({
                                                            mouseenter: function () {
                                                                $(".sidenavOff").hide(); //On mouseover, hode the first div
                                                                $(".sidenavOver").show();
                                                            },
                                                            mouseleave: function () {
                                                                $(".sidenavOff").show();
                                                            }
                                                        });
                                                      
                                                    </script>
                                                    
                                               
                                                </div>       
                                        </div>
                                        </td>

                                        <td >  

                                            </div>
                                            </li>
                                        </td>
                                    </table>
                            </ul>
                        </div>
                    </div>
            </div>
        </section>
<?php $this->load->view('java/javascript_index.php'); ?>




                                             
                                                    



















