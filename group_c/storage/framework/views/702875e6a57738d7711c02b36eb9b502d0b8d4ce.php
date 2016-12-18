
<div class="type-C-26">
    <section class="l-footer-columns columns">
        <div class="border_content">
            <div class="row">
                <section class="block">
                    <div class="col-md-3 col-xs-12">
                        <?php foreach ($footer_abouts as $footer_about): ?>
                            <h2 class="block-title"><?php echo $footer_about->footer_about_title ?></h2>			
                            <div class="textwidget">
                                <?php echo $footer_about->footer_about_description ?>
                            </div>
                        <?php endforeach ?>
                    </div>	
                    <div class="col-md-3 col-xs-12">           
                        <h2 class="block-title">Contact</h2> 
                        <?php foreach ($footer_contacts as $footer_contact): ?>
                            <section class="contact-details">
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="<?php echo $footer_contact->footer_contact_icon ?>"></i>
                                        <span><?php echo $footer_contact->footer_contact_content ?></span>
                                    </li>
                                   
                                </ul>
                            </section>
                        <?php endforeach ?>
                    </div>
                    <div class="col-md-3 col-xs-12">  
                        <h2 class="block-title">Latest posts</h2>
                        <?php foreach ($footer_posts as $footer_post): ?>
                        <div class="latest-posts">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="blog-image left">
                                        <a href="#"><img src="<?php echo $footer_post->footer_post_img ?>" alt="post-4"></a>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="#"><?php echo $footer_post->footer_post_title ?></a>
                                    </h3>
                                    <div class="subheader">
                                        <?php echo $footer_post->footer_post_date ?>                  
                                    </div>
                                </li>
      
                            </ul>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <h2 class="block-title">EXTRA NAVIGATION</h2>
                        <div>
                            <ul class="list-unstyled menu">
                                <li class="menu-item"><a href="#">Home</a></li>
                                <li class="menu-item"><a href="#">About</a></li>
                                <li class="menu-item"><a href="#">Services</a></li>
                                <li class="menu-item"><a href="#">Shop</a></li>
                                <li class="menu-item"><a href="#">Blog</a></li>
                                <li class="menu-item"><a href="#">Contact</a></li>
                            </ul>
                        </div>						 		
                    </div>
                </section>
            </div>
        </div>
    </section>
    <footer class="l-footer columns">
        <div class="border_content">
            <div class="row">
                <div class="footer col-md-4 col-xs-12">
                    <section class="block">
                        <span>Powered by <a href="#">Your Company</a></span>
                    </section>
                </div>
                <div class="col-md-4 col-xs-12">

                </div>
                <div class="copyright text-right col-md-4 col-xs-12">
                    <p>© 2016 Factory All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</div>
