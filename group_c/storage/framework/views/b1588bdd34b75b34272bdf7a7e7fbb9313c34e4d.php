<?php if(isset($contents)): ?>
    <?php $__env->startSection('title'); ?>
        List Content
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($contents_sml)): ?>
    <?php $__env->startSection('title'); ?>
        List Content Sml
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.content_sml', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content_sml.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php elseif(isset($contents_number)): ?>
    <?php $__env->startSection('title'); ?>
        List Content Number
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.content_number', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content_number.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php elseif(isset($contents_new)): ?>
    <?php $__env->startSection('title'); ?>
        List Content New
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.content_news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content_news.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($contents_sentences)): ?>
    <?php $__env->startSection('title'); ?>
        List Content Sentences
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.content_sentences', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content_sentences.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($list_product)): ?>
    <?php $__env->startSection('title'); ?>
        List Top Product
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.list_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.list_top.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
  
<?php elseif(isset($list_product_main)): ?>
    <?php $__env->startSection('title'); ?>
        List Product
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.list_products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.list_product.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($footer_contact)): ?>
    <?php $__env->startSection('title'); ?>
        Footer Contact
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.footer_contacts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
    <?php echo $__env->make('admin.search.footer_contacts.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>  
    
<?php elseif(isset($footer_abouts)): ?>
    <?php $__env->startSection('title'); ?>
        Footer About
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.footer_abouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
    <?php echo $__env->make('admin.search.footer_abouts.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?> 
    
    
<?php elseif(isset($footer_posts)): ?>
    <?php $__env->startSection('title'); ?>
        Footer Posts
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.list.footer_posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
    <?php echo $__env->make('admin.search.footer_posts.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?> 
    
    
<?php endif; ?>



<?php echo $__env->make('admin.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>