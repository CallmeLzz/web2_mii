<?php $__env->startSection('title'); ?>
    Search
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
   <?php echo $__env->make('admin.search.footer_posts.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('search_right'); ?>
    <?php echo $__env->make('admin.search.footer_posts.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('admin.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>