            <div class="portfolio-content">
                <noscript><p>Por favor active JavaScript.<a href="http://www.google.com/support/adsense/bin/answer.py?hl=es&amp;answer=12654">Activar</a></p></noscript>
                        <ul id="slider1">
                    <?php $cl=$i=$d=1; //Count of items with pages ?>
                    <?php foreach ($works as $work): ?>
                            <?php if($i==1) echo "<li>"; ?>
                                <div class="slide<?php if($d<=5 && $i<5): ?>_top<?php endif; ?>">
                                    <div class="layerimage">
                                        <?php 
                                        /*IMAGEN*/
                                       $properties=property_image_work($work->nombre,120,81,'thumb','imagework'); ?>
                                        <?=anchor("portfolio/".$this->lang->line('portfolio.url.work')."/$work->id","<span class=\"roll\" ></span>".img($properties),array('rel' => 'trabajos', 'class' => 'group','title' => $this->lang->line('portfolio.view')." ".$work->nombre)); ?>
                                    </div>
                                </div>
                                <?php if($d==4): $d=1;?><div class="clear"></div><?php else: $d++; endif; ?>
                            
                            <?php if($i==8){ echo "</li>"; $i=1; }else{ $i++; } ?>
                    <?php endforeach; ?>
                        </ul>
            </div>
</div>
<div class="clear"></div>
