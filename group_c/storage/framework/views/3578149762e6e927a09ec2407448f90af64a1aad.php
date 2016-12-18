<?php $__env->startSection('title'); ?>
    Detail Factory
<?php $__env->stopSection(); ?>



<?php $__env->startSection('detail'); ?>
    <?php echo $__env->make('group_c.detail.detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('group_c.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>