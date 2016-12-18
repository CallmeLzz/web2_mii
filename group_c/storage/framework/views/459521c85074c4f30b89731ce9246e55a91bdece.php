<html>
    <head>
        <title> <?php echo $__env->yieldContent('title'); ?> </title>
        <?php echo $__env->make('group_c.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('header_script'); ?>
    </head>
    <body>
        <?php /*-Header--*/ ?>
        <?php echo $__env->make('group_c.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
        
        <?php /*---Content--*/ ?>
        <?php echo $__env->yieldContent('content'); ?>  
        
        <?php /*---Breadscrumb List--*/ ?>
        <?php echo $__env->yieldContent('breadscrumb'); ?>
               
        <?php /*---Content List--*/ ?>
        <?php echo $__env->yieldContent('content_list'); ?>
        
        <?php /*---Detail Product--*/ ?>
        <?php echo $__env->yieldContent('detail'); ?>
        
        <?php /*---Footer---*/ ?>
        <?php echo $__env->make('group_c.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>       
    </body>
</html>

