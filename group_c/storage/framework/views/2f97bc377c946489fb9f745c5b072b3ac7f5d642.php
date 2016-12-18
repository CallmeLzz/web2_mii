
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
                                        <?php echo $footer_contact->footer_contact_icon ?><span><?php echo $footer_contact->footer_contact_content ?></span>
                                    </li>
                                    <!--<li>
                                            <i class="fa fa-file-o"></i><span>Fax: +(048) 880 440 110</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope-o"></i>
                                            <span>Email: <a href="#">info (at) ourwebsite.com</a></span>
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker"></i><span>Adress: 124BP, Lacasa Ave New York</span>
                                        </li>-->
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
                            <!--<li>
                                    <div class="blog-image left">
                                        <a href="#"><img src="images/3-300x200.jpg" alt="3"></a>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="#">Need for growth and reliability</a>
                                    </h3>
                                    <div class="subheader">
                                        28 August,2014                  
                                    </div>
                                </li>-->
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
