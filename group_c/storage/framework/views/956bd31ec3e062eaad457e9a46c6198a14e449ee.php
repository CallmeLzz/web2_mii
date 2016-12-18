<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/admin.less', 'css/admin.css');
?>
<link href="css/admin.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>