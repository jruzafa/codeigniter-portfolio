<div class="panel">
    <div class="panel-wrapper">
        <div class="home-content">
            <div class="not_found_box">
            <h1>404 page not found</h1>
            <br />
            Alternative:
            <br />
            <p>
                <?php echo $error; ?>
            </p>
            <br />
                <ul>
                    <li>
                        <a href="<?php echo site_url();?>" title="Index">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('works');?>" title="Works">Works</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('contact');?>" title="Contact">Contact</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>