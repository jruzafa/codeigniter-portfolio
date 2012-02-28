<div id="header">
  <div id="logo"><a href="<?php echo base_url(); ?>" title=" <?php echo $this->lang->line('menu.index'); ?>">Jose Ruzafa Sierra</a></div>
  <div id="nav" <?php if($this->lang->lang()=='en'): ?>style="width: 204px;" <?php endif; ?>>
      <ul id="menu">
        <li>
            <a href="<?php echo site_url(); ?>" title="<?php echo ucfirst($this->lang->line('menu.index')); ?>" <?=is_current(site_url())?> >
            <?php echo $this->lang->line('menu.index'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url($this->lang->line('menu.services')); ?>" title="<?php echo ucfirst($this->lang->line('menu.services')); ?>" <?=is_current(site_url($this->lang->line('menu.services')))?> >
            <?php echo $this->lang->line('menu.services'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url($this->lang->line('menu.works')); ?>" title="<?php echo ucfirst($this->lang->line('menu.works')); ?>" <?=is_current(site_url($this->lang->line('menu.works')))?>>
                    <?php echo $this->lang->line('menu.works'); ?>
            </a>
        </li>
        <li>
            <a href="<?php echo site_url($this->lang->line('menu.contact')); ?>" title="<?php echo ucfirst($this->lang->line('menu.contact')); ?>" <?=is_current(site_url($this->lang->line('menu.contact')))?>>
                    <?php echo $this->lang->line('menu.contact'); ?>
            </a>
        </li>
      </ul>
  </div>
</div>
<div class="clear"></div>
<div id="paper">
