	<body id="login">
		<div id="login-wrapper" class="png_bg">
                    <div id="login-top">

                        <h1>JoseRuzafa</h1>
                         <!-- Logo (221px width) -->
                      <!--  <img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" />-->
                        <?= img('public/admin/images/logo_or.png','Logo'); ?>
                    </div> <!-- End #logn-top -->	
                    
                    <div id="login-content">
				<?php echo form_open('admin/login/user_login'); ?>         
                                    <?php echo(validation_errors("<div class='notification error png_bg'><div>","</div></div>")); ?>
					<p>
						<label><?php echo form_label('E-mail','email'); ?></label>
                                        <?php 
                                                $data_username = array('id' => 'email','name' => 'email', 'class' => 'text-input');
                                                echo form_input($data_username); ?>
					</p>
					<div class="clear"></div>
					<p>
                                            <label><?php echo form_label('Password','password'); ?></label>
                                                <?php 
                                                $data_password = array('id' => 'password','name' => 'password', 'class' => 'text-input');
                                                echo form_password($data_password); ?>
					</p>
					<div class="clear"></div>
					<p id="remember-password">
						<?php 
                                                $data_remember = array('id' => 'remember', '');
                                                echo form_label('Recordar','remember').form_checkbox('remember'); ?>
					</p>
					<div class="clear"></div>
					<p>
                                                <?php 
                                                $data_password = array('name' => 'Entrar', 'class' => 'button', 'value' => 'Entrar');
                                                echo form_submit($data_password); ?>
					</p>
				<?php echo form_close(); ?>
			</div>
		</div>
  </body>