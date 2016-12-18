<meta charset="UTF-8">   
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/header.less', 'css/header.css');
$less->compileFile('less/footer.less', 'css/footer.css');
$less->compileFile('less/content-list.less', 'css/content-list.css');
$less->compileFile('less/sidebar-left.less', 'css/sidebar-left.css');
$less->compileFile('less/type-C-4.less', 'css/type-C-4.css');
$less->compileFile('less/slider.less', 'css/slider.css');
$less->compileFile('less/type-C-4-detail.less', 'css/type-C-4-detail.css');
?>
<link href="css/header.css" rel="stylesheet" type="text/css"/>
<link href="css/footer.css" rel="stylesheet" type="text/css"/>
<link href="css/content-list.css" rel="stylesheet" type="text/css"/>
<link href="css/sidebar-left.css" rel="stylesheet" type="text/css"/>
<link href="css/type-C-4.css" rel="stylesheet" type="text/css"/>
<link href="less/slider.less" rel="stylesheet" type="text/css"/>
<link href="css/type-C-4-detail.css" rel="stylesheet" type="text/css"/>

<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/type-C-4.js" type="text/javascript"></script>
<script src="js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="js/filter.js" type="text/javascript"></script>
<script src="js/fixed.js" type="text/javascript"></script>