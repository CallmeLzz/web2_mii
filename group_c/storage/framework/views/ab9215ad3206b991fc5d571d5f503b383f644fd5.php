<html>
    <head>
        <title> <?php echo $__env->yieldContent('title'); ?> </title>
        <?php echo $__env->make('admin.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <div class="menu">
            <?php echo $__env->make('admin.layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="clear"></div>
        </div>
        <div class="content">
            <div class="col-md-3">
                <?php echo $__env->make('admin.layouts.sidebar_left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="col-md-6">
                <?php echo $__env->yieldContent('main_content'); ?> 
            </div>
            <div class="col-md-3">
                <?php echo $__env->yieldContent('search_right'); ?> 
               <!--<?php echo $__env->make('admin.layouts.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> -->
            </div>
            <div class="clear"></div>
        </div>
    </body>
    
    
</html>
