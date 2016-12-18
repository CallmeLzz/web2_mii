<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  

    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-C-26.less', 'css/type-C-26.css');
    $less->compileFile('less/type-C-4.less', 'css/type-C-4.css');
    ?>
    <link href="css/type-C-26.css" rel="stylesheet" type="text/css"/>
    <link href="css/type-C-4.css" rel="stylesheet" type="text/css"/>
    
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>       
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/type-C-4.js" type="text/javascript"></script>
</head>

