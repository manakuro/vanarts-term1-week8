<?php 
    include('bootstrap.php');

    // set namespace
    use FS\Utility;

    // create navigation menu html
    // create social media html
    $navHTML = Utility::getNav($config['nav']);
    $socialHTML = Utility::getSocialLink($config['social_media']);

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $config['title']?></title>
        <meta name="description" content="<?php echo $config['meta']['desc']?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- perevent google search robots from indexing -->
        <meta name="robots" content="noindex" /> 

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link href='https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700,700italic|Lato:400,300,400italic,700' rel='stylesheet' type='text/css'>        
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/libs/normalize.css">
        <link rel="stylesheet" href="css/libs/magnific-popup.css">
        <link rel="stylesheet" href="css/main.min.css">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header -->
        <header class="page-header">
            
            <div class="page-nav row">

                <div class="logo span-l-3 columns">
                        <a href="./"><img src="img/logo.png"></a>                
                </div>               
                
                <div class="span-l-5 offset-l-4 columns">
                    <ul class="nav-list"><?php echo $navHTML; ?></ul>
                </div>

            </div>

        </header>
        <!-- /header -->
       

        
