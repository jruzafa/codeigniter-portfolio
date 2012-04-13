<div class="panel">
          <div class="panel-wrapper">
            <div class="contact-content">
              <div class="contact-content-left">
				<div id="acf-area">
                                    <div>
                                        <?php
                                            if(isset($message)): ?>
                                            <div class="notification_ok">
                                                <?php echo $message;?>
                                            </div>
                                        <?php endif; ?>
				  </div>
                                    <?php if(validation_errors()): ?>
                                    <div  class="notification_error">
                                        <?php echo validation_errors(); ?>
                                    </div>
                                    <?php endif; ?>
					<div id="acf-fields">
                                         <?php 
                                         echo form_open();
                                             echo '<p>'.form_label('Name', 'contact_name').form_input('contact_name',set_value('contact_name')).'</p>';
                                             echo '<p>'.form_label('E-mail', 'contact_email').form_input('contact_email',set_value('contact_email')).'</p>';
                                             echo '<p>'.form_label('Message', 'contact_message').form_textarea('contact_message',set_value('contact_message')).'</p>';
                                             $extra=array('class' => 'button','name' => 'contact_submit');
                                             echo '<p>'.form_submit($extra).'</p>';
                                         echo form_close(); ?>
					</div>
				</div>
              </div>
              <div class="contact-content-right">
                <p>
                    Feel free to email me if you would like to work with me or want to say "Hello"
                </p>
                <ul>
                  
                  <li class="email"><?php echo safe_mailto('jose.ruzafa@gmail.com', 'jose.ruzafa@gmail.com'); ?></li>
                </ul>
                <div id="qrcode">
                    <?php echo img(array('src' => 'public/images/qrcode.png', 'width' => '160px', 'height' => '160px', 'alt' => 'Qrcode')); ?>  
                </div>
              </div>
            </div>
          </div>
        </div>
  </div><div class="clear"></div>