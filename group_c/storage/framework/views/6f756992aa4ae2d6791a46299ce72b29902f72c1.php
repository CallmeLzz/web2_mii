<?php $__env->startSection('title'); ?>
    Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
   <?php echo $__env->make('admin.list.main_content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>