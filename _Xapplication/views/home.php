<div class="panel">
  <div class="panel-wrapper">
      <div class="home-content">
            <div id="text-about">
                <p> Hello, my name is Jose Ruzafa Sierra and I'm <b>web developer</b>           and 4 years and have been developed web pages & applications.</p>
             <br/>
             <p>
                 I always create web applications, creative and useful
                 and by exposing the simplicity and the latest web standards
                 as fundamental principles, resulting in semantic XHTML and CSS.
                 <br/>
             </p>
             <br/>
             <p>My main technologies are:
                <ul class="technologies">
                    <li>Ruby on Rails</li>
                    <li>Php</li>
                    <li>Mysql</li>
                    <li>Html 5 & Css3</li>
                    <li>Javascript & Jquery</li>
                </ul>
             </p>
             <br/>
             <p>In the section's work shows the <a href='works'>works</a> I have done.</p>
             <br/>
            
            </div>
            <div id="work-featured">
            <div id="slide">
                <a href="<?php echo site_url('works'); ?>">
                    <?=img(array('src' => 'public/images/fotos_trabajos/elgritodelsilencio_slide.jpg', 'width' => '210px', 'height' => '120px')); ?>
                    <?=img(array('src' => 'public/images/fotos_trabajos/yoioy_slide.jpg', 'width' => '210px', 'height' => '120px')); ?>
                    <?=img(array('src' => 'public/images/fotos_trabajos/cortejamon_slide.jpg', 'width' => '210px', 'height' => '120px')); ?>
                </a>
            </div>
            </div>
          <div class="clear"></div>
          <div class="social">
              <ul class="social_list">
                  <li><?=anchor('https://github.com/jruzafa','Github')?></li>
                  <li><?=anchor('https://bitbucket.org/jruzafa','Bitbucket')?></li>
                  <li>
                    <?php echo safe_mailto('jose.ruzafa@gmail.com', 'E-mail'); ?>
                  </li>
                  <li><?=anchor('https://twitter.com/#!/jruzafa','Twitter')?></li>
                  <li><?=anchor('http://es.linkedin.com/in/joseruzafa','Linkedin')?></li>
              </ul>
          </div>
      </div>
  </div>
</div>
</div>

