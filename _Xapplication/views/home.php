<div class="panel">
  <div class="panel-wrapper">
      <div class="home-content">
            <div id="text-about">
                <?=$text['descripcion'];?>
            </div>
            <div id="work-featured">
            <div id="slide">
                <a href="<?php echo site_url('trabajos'); ?>">
                    <?=img(array('src' => 'public/images/fotos_trabajos/elgritodelsilencio_slide.jpg', 'width' => '210px', 'height' => '120px')); ?>
                    <?=img(array('src' => 'public/images/fotos_trabajos/yoioy_slide.jpg', 'width' => '210px', 'height' => '120px')); ?>
                    <?=img(array('src' => 'public/images/fotos_trabajos/cortejamon_slide.jpg', 'width' => '210px', 'height' => '120px')); ?>
                </a>
            </div>
            </div>
          <div class="clear"></div>
          <div class="social">
              <ol>
                  <li><?=img(array('src'=>'public/images/gmail.jpg','width' => '35px', 'height' => '35px'))?><?php echo safe_mailto('jose.ruzafa@gmail.com', 'jose.ruzafa@gmail.com'); ?></li>
                  <li><?=img(array('src'=>'public/images/skype.jpg','width' => '35px', 'height' => '35px'))?><a href="skype:jose.ruzafa?call">jose.ruzafa</a></li>
                  <li><?=img(array('src'=>'public/images/linkedin.jpg','width' => '35px', 'height' => '35px'))?><?=anchor('http://es.linkedin.com/in/joseruzafa')?></li>
                  <li><?=img(array('src'=>'public/images/twitter.jpg','width' => '35px', 'height' => '35px'))?><?=anchor('https://twitter.com/#!/jruzafa')?></li>
              </ol>
          </div>
      </div>
  </div>
</div>
</div>

