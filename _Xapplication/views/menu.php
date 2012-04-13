<div id="header">
  <div id="logo"><a href="<?php echo base_url(); ?>" title="Go to home">Jose Ruzafa Sierra</a></div>
  <div id="nav">
      <ul id="menu">
        <li>
            <a href="<?php echo site_url(); ?>" title="home" <?php echo is_current(site_url()); ?>>
                Home
            </a>
        </li>
        <li>
            <a href="services" title="services" <?php echo is_current(site_url('services')); ?>>
                Services
            </a>
        </li>   
        <li>
            <a href="works" title="works" <?=is_current(site_url('works'))?>>
                Works
            </a>
        </li>
        <li>
            <a href="contact" title="contact" <?=is_current(site_url('contact'))?>>
                Contact
            </a>
        </li>
      </ul>
  </div>
</div>
<div class="clear"></div>
<div id="paper">
