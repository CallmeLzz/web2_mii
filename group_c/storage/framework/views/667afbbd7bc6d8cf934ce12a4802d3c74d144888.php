<body>
    <div class="type-C-4">
        <div class="content_1">
            <div class="border_content">
                <?php foreach ($contents as $content): ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 CT1-1">
                        <div class="">
                            <img src="<?php echo $content->content_img ?>" alt="icon">
                            <a href="#">
                                <h4> <?php echo $content->content_title ?> </h4>
                            </a>   
                            <p><?php echo $content->content_description ?></p>
                            <div class="clear"></div>
                        </div>
                    </div>
                <?php endforeach ?> 
                <div class="clear"></div>
            </div>
        </div>

        <div class="content_2">
            <div class="border_content">
                <?php foreach ($contents_nd as $content_nd): ?>
                    <div class="col-md-4 col-sm-4 col-xs-12 CT1-1">
                        <div class="">
                            <img src="<?php echo $content_nd->content_img; ?>" alt="icon">
                            <a href="#">
                                <h4><?php echo $content_nd->content_title; ?></h4>
                            </a>   
                            <p><?php echo $content_nd->content_description; ?></p>
                            <div class="clear"></div>
                        </div>
                    </div>
                <?php endforeach ?>

                <div class="col-md-4 col-sm-4 col-xs-12 CT1-1">
                    <?php foreach ($contents_sml as $content_sml): ?>
                        <div class="CT2-1">
                            <a class="left" href="#">
                                <img src="<?php echo $content_sml->content_sml_img ?>" style="width: 100; height: 70;" alt="services-2">
                                <div class="clear"></div>
                            </a>
                            <div class="">
                                <h6> 
                                    <?php echo $content_sml->content_sml_title ?>
                                </h6>
                                <p>
                                    <?php echo $content_sml->content_sml_description ?>
                                </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="content_3">
            <div class="CT3-1">
                <h2> OUR PROJECTS </h2>
                <div class="carousel slide" id="myCarousel">
                    <div class="carousel-inner">
                        <?php $position = 0; ?>
                        <?php foreach ($contents_project as $content_project): ?>
                            <?php $position++; ?>
                            <div class="item <?php if ($position == 1) echo "active"; ?>">
                                <div class="CT3-2">
                                    <div class="hovereffect">       
                                        <img src="<?php echo $content_project->content_project_img1 ?>" class="img-responsive">
                                        <div class="carousel-icon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div class="overlay">
                                            <a href="#"><?php echo $content_project->content_project_title ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="CT3-2 hidden2">
                                    <div class="hovereffect">       
                                        <img src="<?php echo $content_project->content_project_img2 ?>" class="img-responsive">
                                        <div class="carousel-icon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div class="overlay">
                                            <a href="#"><?php echo $content_project->content_project_title ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="CT3-2 hidden1">
                                    <div class="hovereffect">       
                                        <img src="<?php echo $content_project->content_project_img3 ?>" class="img-responsive">
                                        <div class="carousel-icon">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div class="overlay">
                                            <a href="#"><?php echo $content_project->content_project_title ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <!--<div class="item">
                            <div class="CT3-2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_3.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_4.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden1">
                                <div class="hovereffect">       
                                    <img src="images/content_3_5.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>


                        </div> 
                        <div class="item">
                            <div class="CT3-2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_4.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_5.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden1">
                                <div class="hovereffect">       
                                    <img src="images/content_3_6.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>


                        </div>  
                        <div class="item">
                            <div class="CT3-2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_5.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_6.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden1">
                                <div class="hovereffect">       
                                    <img src="images/content_3_7.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="item">
                            <div class="CT3-2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_6.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_7.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden1">
                                <div class="hovereffect">       
                                    <img src="images/content_3_8.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="CT3-2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_7.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_8.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden1">
                                <div class="hovereffect">       
                                    <img src="images/content_3_2.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="CT3-2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_8.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden2">
                                <div class="hovereffect">       
                                    <img src="images/content_3_2.png" class="img-responsive">

                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                            <div class="CT3-2 hidden1">
                                <div class="hovereffect">       
                                    <img src="images/content_3_3.png" class="img-responsive">
                                    <div class="carousel-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="overlay">
                                        <a href="#">MORBI NON SEM A LACUS PORTA</a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <a class="left carousel-control btn-left" href="#myCarousel" data-slide="prev">‹</a>
                    <a class="right carousel-control btn-right" href="#myCarousel" data-slide="next">›</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>     

        <div class="content_4">
            <div class="border_content">
                <?php foreach ($tabs_content as $tab_content): ?>
                    <div class="col-lg-6 col-md-6 CT4-1">
                        <div class="tabberlive">
                            <ul class="tabbernav_product nav-pills  ">
                                <li class="active"><a   data-toggle="tab" title="tab_product" href="#newproducts"  data-text="Latest"><?php echo $tab_content->tab_content_title_1 ?></a></li>
                                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts2"  data-text="Best Seller"><?php echo $tab_content->tab_content_title_2 ?></a></li>
                            </ul>
                            <div class="tabs-live">
                                <div class="tab-content" >
                                    <div id="newproducts" class="tab-pane fade in active ">                                    
                                        <p><?php echo $tab_content->tab_content_description_1 ?></p>
                                    </div>
                                    <div id="newproducts2" class="tab-pane fade  ">                                 
                                        <p><?php echo $tab_content->tab_content_description_2 ?></p>
                                    </div>                                                                                          
                                </div>
                            </div>
                        </div>
                        
                    </div>
                <?php endforeach ?>

                <div class="col-lg-6 col-md-6 CT4-2">
                    <div id="accordion">
                        <?php $position = 0; ?>
                        <?php foreach ($tabs_content_right as $tab_content_right): ?>
                            <?php $position++; ?>
                            <div class="panel CT4-2-1">
                                <div class="CT4-2-pannel">
                                    <h4 class="panel-title-CT4 CT4-2-pannel-1 <?php if ($position == 1) echo "active"; ?>" id="quality" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $position; ?>" aria-expanded="false" aria-controls="collapse<?php echo $position; ?>">
                                        <a>
                                            
                                            <i class="vc_tta-icon fa fa-life-ring"></i>
                                            <span> <?php echo $tab_content_right->tab_content_right_title ?>  </span>                                    
                                           
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $position; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p><?php echo $tab_content_right->tab_content_right_description ?> </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <!--<div class="panel CT4-2-1">
                            <div class="CT4-2-pannel CT-margin">
                                <h4 class="panel-title-CT4 CT4-2-pannel-1 active" id="safety" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <a>                                   
                                        <i class="vc_tta-icon fa fa-life-ring"></i>                                               
                                        <span> SAFETY </span>
                                        <i class="CT4-right vc_tta-icon fa fa-life-ring"></i> 
                                    </a>                               
                                </h4>                            
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>A personal and professional commitment to proactively protecting the well-being of our employees, our contractors, our customers and the people of the communities in which we operate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel CT4-2-1">
                            <div class="CT4-2-pannel">
                                <h4 class="panel-title-CT4 CT4-2-pannel-1" id="integrity" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <a>
                                        <i class="vc_tta-icon fa fa-balance-scale"></i>                                  
                                        <span>  INTEGRITY </span>                                   
                                        <i class="CT4-right vc_tta-icon fa fa-balance-scale"></i>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="content_5">
            <div class="border_content">
                <?php foreach ($contents_number as $content_number): ?>
                    <div class="col-lg-4 col-md-4 CT5-1">
                        <h5 class="" data-file="250"><?php echo $content_number->content_number_num ?></h5>
                        <h2><?php echo $content_number->content_number_title ?></h2>
                    </div>
                <?php endforeach ?>
                <!--                
                <div class="col-lg-4 col-md-4 CT5-1">
                    <h5 class="" data-file="2500">2500</h5>
                    <h2>Huppy clients</h2>
                </div>
                <div class="col-lg-4 col-md-4 CT5-1">
                    <h5 class="" data-file="15">15</h5>
                    <h2>Years in the indistry</h2>
                </div>-->
                <div class="clear"></div>
            </div>
        </div>

        <div class="content_6">
            <div class="border_content">
                <div class="">
                    <h2>COMPANY NEWS</h2>
                    <?php foreach ($news as $news): ?>
                        <div class="col-lg-4 CT6-2 demo1">
                            <div class="">
                                <img src="<?php echo $news->news_img ?>">
                                <div class="content">
                                    <h3>
                                        <a href="#"> <?php echo $news->news_title ?> </a>
                                    </h3>
                                    <p> <?php echo $news->news_decription ?> </p>
                                    <div class="btnRead">
                                        <a href="#" class="read">Read More</a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div> 
                    <?php endforeach ?>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="content_7">
            <div class="border_content">
                <div class="carousel slide" id="myCarousel7">
                    <?php $position = 0; ?>
                    <?php foreach ($sentences as $sentence): ?>
                        <?php $position++; ?>
                        <div class="carousel-inner CT7-1">
                            <div class="item <?php if ($position == 1) echo "active"; ?>">
                                <blockquote>
                                    <div class="test">                                  
                                        <?php echo $sentence->sentence_description ?>                
                                    </div>
                                    <h6> <?php echo $sentence->sentence_author ?> </h6>
                                </blockquote>
                            </div>

                            <div class="item"> 
                                <blockquote>
                                    <div class="test">                                  
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident                
                                    </div>
                                    <h6> STROMBACH MICHAEL  </h6> 
                                </blockquote>
                            </div>

                        </div>
                    <?php endforeach ?>
                    <div class="CT7-2">
                        <a class="CT7-prev-next" href="#myCarousel7" data-slide="prev">‹</a>
                        <?php foreach ($sentences as $sentence): ?>
                            <img class="CT7-img" src="<?php echo $sentence->sentence_image ?>">
                        <?php endforeach ?>
                        <a class="CT7-prev-next" href="#myCarousel7" data-slide="next">›</a>
                    </div> 

                    <div class="clear"></div>
                </div>
            </div>
        </div>

        <div class="content_8">
            <div class="border_content">
                <div class="carousel slide" id="myCarousel1">
                    <div class="carousel-inner">
                        <?php $position = 0; ?>
                        <?php foreach ($logo_images as $logo_image): ?>
                            <?php $position++; ?>
                            <div class="item <?php if ($position == 1) echo "active"; ?>">
                                <div class="CT8-1"><a class="logo" href="#"><img src="<?php echo $logo_image->logo_image_pic1 ?>" class="img-responsive"></a></div>
                                <div class="CT8-1 hidden2"><a class="logo" href="#"><img src="<?php echo $logo_image->logo_image_pic2 ?>" class="img-responsive"></a></div>
                                <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="<?php echo $logo_image->logo_image_pic3 ?>" class="img-responsive"></a></div>
                                <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="<?php echo $logo_image->logo_image_pic4 ?>" class="img-responsive"></a></div>
                                <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="<?php echo $logo_image->logo_image_pic5 ?>" class="img-responsive"></a></div>
                            </div>
                        <?php endforeach ?>

                        <!--<div class="item">
                            <div class="CT8-1"><a class="logo" href="#"><img src="images/logo-2.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden2"><a class="logo" href="#"><img src="images/logo-3.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-4.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-5.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-6.jpg" class="img-responsive"></a></div>                           
                        </div> 
                        <div class="item">
                            <div class="CT8-1"><a class="logo" href="#"><img src="images/logo-3.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden2"><a claol-lg-2 col-md-2 col-sm-4 col-xs-12 ss="logo" href="#"><img src="images/logo-4.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-5.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-6.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-1.jpg" class="img-responsive"></a></div>                           
                        </div>  
                        <div class="item">
                            <div class="CT8-1"><a class="logo" href="#"><img src="images/logo-4.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden2"><a class="logo" href="#"><img src="images/logo-5.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-6.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-1.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-2.jpg" class="img-responsive"></a></div>                           
                        </div>
                        <div class="item">
                            <div class="CT8-1"><a class="logo" href="#"><img src="images/logo-5.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden2"><a class="logo" href="#"><img src="images/logo-6.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-1.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-2.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-3.jpg" class="img-responsive"></a></div>                           
                        </div>
                        <div class="item">
                            <div class="CT8-1"><a class="logo" href="#"><img src="images/logo-6.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden2"><a class="logo" href="#"><img src="images/logo-1.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-2.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-3.jpg" class="img-responsive"></a></div>
                            <div class="CT8-1 hidden1"><a class="logo" href="#"><img src="images/logo-4.jpg" class="img-responsive"></a></div>                           
                        </div>-->
                    </div>
                    <a class="left carousel-control btn-left" href="#myCarousel1" data-slide="prev">‹</a>
                    <a class="right carousel-control btn-right" href="#myCarousel1" data-slide="next">›</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>


</body>