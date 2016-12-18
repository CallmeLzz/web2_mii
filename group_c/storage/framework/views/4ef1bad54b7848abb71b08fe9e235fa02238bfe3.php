<?php if(isset($contents)): ?>
    <?php $__env->startSection('title'); ?>
        Edit Content
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($contents_sml)): ?>
    <?php $__env->startSection('title'); ?>
        Edit Content Sml
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.content_sml', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content_sml.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($contents_number)): ?>
    <?php $__env->startSection('title'); ?>
        Edit Content Number
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.content_number', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content_number.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($contents_new)): ?>
    <?php $__env->startSection('title'); ?>
        Edit Content News
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.content_news', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content_news.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($contents_sentences)): ?>
    <?php $__env->startSection('title'); ?>
        Edit Content Sentences
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.content_sentences', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.content_sentences.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
    
 <?php elseif(isset($list_top)): ?>
    <?php $__env->startSection('title'); ?>
        Edit List Top Product
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.list_top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.list_top.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
 <?php elseif(isset($list_product)): ?>
    <?php $__env->startSection('title'); ?>
        Edit List Product
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.list_products', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.list_product.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
    
 <?php elseif(isset($footer_contact)): ?>
    <?php $__env->startSection('title'); ?>
        Edit Footer Contacts
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.footer_contacts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.footer_contacts.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
    
  <?php elseif(isset($footer_abouts)): ?>
    <?php $__env->startSection('title'); ?>
        Edit Footer Contacts
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.footer_abouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.footer_abouts.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    
<?php elseif(isset($footer_posts)): ?>
    <?php $__env->startSection('title'); ?>
        Edit Footer Posts
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('main_content'); ?>
       <?php echo $__env->make('admin.edit.footer_posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('search_right'); ?>
        <?php echo $__env->make('admin.search.footer_posts.sidebar_right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php endif; ?>



<?php echo $__env->make('admin.masterpage.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>