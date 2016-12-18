<?php $__env->startSection('title'); ?>
    Edit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
   <?php echo $__env->make('admin.edit.edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>