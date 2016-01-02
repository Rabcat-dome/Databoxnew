<?php $this->load->view('menu/nav_menu'); ?>
                        
                        
            <div class='container'>





                <?php echo form_open('mainFunction/index');?>
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin">
                            <legend>Please Login</legend>(ใช้รหัสเดียวกับที่ลงทะเบียนไวไฟไว้)
                            
                                <div class="form-inner">
                                    <div class="input-prepend">
                                        
                                        <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>
                                        <input type='text' class='span4' name="txt_username" id="txt_username" placeholder="username" />
                                    </div>

                                    <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input type='password' class='span4' name="txt_password" id="txt_password" placeholder="password"/>
                                    </div>
                                    <label class="checkbox" for='remember_me'>Remember me
                                        <input type='checkbox' id='remember_me' />
                                    </label>
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' id="submit" value='Login'/> <br />
                                <br /></footer>
                            
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>
                <?php echo form_close(); ?>
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="well well-small well-shadow">
                            <legend class="lead"></legend>
                            <a ้href="registration.j3.mil"><div style="text-align:center"> >>>ลงทะเบียนการใช้งานใหม่<<< </div></a>
                        </div>
                    </div>
                    <div class="span8"></div>
                </div>
            <!--<div class="span4">

                </div>-->
            </div>
    
<?php $this->load->view('footer/footer'); ?>