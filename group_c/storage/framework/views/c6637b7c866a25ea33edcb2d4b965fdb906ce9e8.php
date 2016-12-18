<?php $__env->startSection('title'); ?>
    List Factory
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadscrumb'); ?>
    <?php echo $__env->make('group_c.list.breadscrumb_list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_list'); ?>
    <?php echo $__env->make('group_c.list.content_list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('group_c.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>