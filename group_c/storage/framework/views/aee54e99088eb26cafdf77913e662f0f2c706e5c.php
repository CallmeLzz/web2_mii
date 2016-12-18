<?php $__env->startSection('title'); ?>
    Home Factory
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('group_c.home.partial.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('group_c.home.partial.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('group_c.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>