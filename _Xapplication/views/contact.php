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
                                            // echo lang('contact.name', 'contact_name');
                                             echo '<p>'.lang('contact.name', 'contact_name').form_input('contact_name',set_value('contact_name')).'</p>';
                                          //   echo "<div class=\"clear\"></div>";
                                          //   echo form_label('E-mail', 'contact_email');
                                             echo '<p>'.form_label('E-mail', 'contact_email').form_input('contact_email',set_value('contact_email')).'</p>';
                                          //   echo "<div class=\"clear\"></div>";
                                          //   echo lang('contact.message', 'contact_message');
                                             echo '<p>'.lang('contact.message', 'contact_message').form_textarea('contact_message',set_value('contact_message')).'</p>';
                                         //    echo "<div class=\"clear\"></div>";
                                             if($this->lang->lang()=='es'){
                                                 $class = 'button_sp';  
                                             }else{
                                                 $class = 'button';  
                                             }
                                             $extra=array('class' => $class,'name' => 'contact_submit');
                                             echo '<p>'.form_submit($extra).'</p>';
                                         echo form_close(); ?>
					</div>
				</div>
              </div>
              <div class="contact-content-right">
                <p><?php echo $this->lang->line('contact.txt'); ?></p>
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