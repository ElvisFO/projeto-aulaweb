<?php
require './_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title><?= $pg_title; ?></title>
        <meta name="description" content="<?= $pg_desc; ?>" />
        <meta name="robots" content="index, follow" />
        
        <link rel="canonical" href="<?= $pg_url; ?>" />

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>   
        <link rel="stylesheet" href=" <?= INCLUDE_PATH ; ?>/css/boot.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH ; ?>/css/style.css"/>
        
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.js"></script>
        <script type="text/javascript" src="js/efeito.js"></script>
       
        
        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/shorticon/favicon.jpg"/>
        
    </head>
    <body>
        <header class="container">
            <div class="content">
                <h1 class="main_logo fl-left fontzero">
                    <a title="Home" href="<?= HOME; ?>">
                       <?= $pg_title; ?>
                    </a>
                </h1>

                <ul class="main_nav fl-right">
                    <?php require REQUIRE_PATH. '/inc/main_nav.php';?>
                </ul>
                <div class="clear"></div>
            </div>
        </header>
        
        <!--CONTEUDO-->
        <?php 
            $Url[1] = (empty( $Url[1]) ? null :  $Url[1]);
            if(file_exists(REQUIRE_PATH . '/' .  $Url[0] . '.php')):
                require REQUIRE_PATH . '/' .  $Url[0]  . '.php';
            elseif (file_exists(REQUIRE_PATH . '/' .  $Url[0] . '/' . $Url[1] . '.php')):
                require REQUIRE_PATH . '/' .  $Url[0] . '/' . $Url[1] . '.php';
            else:
                require REQUIRE_PATH . '/404.php';
                
            endif;
        
        
        ?>
        <!--CONTEUDO-->

        <footer class="container bg-light">
            <section class="main_footer">
                <h1 class="al-center ">SuportInfor</h1> 
                <hr>
                <p class="al-center">&copy; 2014 - <?= date('Y'); ?> - SuportInfor, Todos Os Direitos Reservados!  -  Developed by <a  target="_blank" rel="nofollow" title="Elvis Fernandes" href="https://www.linkedin.com/in/elvis-fernandes-24190186" >Elvis Fernandes</a></p>
            </section>
        </footer>
    </body>
</html>
