<!------------------------------------>
<?php if(isset($content)): ?>
    <?php $__env->startSection('title'); ?>
        Add Content
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php elseif(isset($content_sml)): ?>
    <?php $__env->startSection('title'); ?>
        Add Content_sml
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.content_sml', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($content_number)): ?>
    <?php $__env->startSection('title'); ?>
        Add Content_number
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.content_number', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($content_news)): ?>
    <?php $__env->startSection('title'); ?>
        Add Content_news
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.content_news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($content_sentences)): ?>
    <?php $__env->startSection('title'); ?>
        Add Content_Sentences
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.content_sentences', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
  
<?php elseif(isset($list_top)): ?>
    <?php $__env->startSection('title'); ?>
        Add Content_Sentences
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.list_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
 <?php elseif(isset($list_product)): ?>
    <?php $__env->startSection('title'); ?>
        Add Content Sentences
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.list_product', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>   
    
<?php elseif(isset($footer_contacts)): ?>
    <?php $__env->startSection('title'); ?>
        Add Footer Contacts
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.footer_contacts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>   


<?php elseif(isset($footer_abouts)): ?>
    <?php $__env->startSection('title'); ?>
        Add Footer Abouts
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.footer_abouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>   
  

<?php elseif(isset($footer_posts)): ?>
    <?php $__env->startSection('title'); ?>
        Add Footer Posts
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.add.footer_posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>   
    
<?php endif; ?>

<!-------------------------------------->

<?php echo $__env->make('admin.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>