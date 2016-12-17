<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'LoginBase');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $cakeDescription ?> |
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->charset();
        echo $this->Html->meta('icon');
        echo $this->Html->css('sample');

        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('sticky-footer-navbar.css');
        echo $this->Html->css('front');
        echo $this->Html->css('subpage');

//        echo $this->Html->css('subpage');
        echo $this->Html->script('jquery.min');
        echo $this->Html->script('bootstrap.min');
//        echo $scripts_for_layout;
        ?>
    </head>
    <body>
        <!--navbar-->
        <nav class="navbar navbar-inverse navbar-fixed-top">

            <div class="navbar-header">
                <!--Logo-->
                <a class="navbar-brand" href="/">LoginBase</a>
                <!--toggle button-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-content">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!--menu-->
            <div id="nav-content" class="collapse navbar-collapse">  
                <ul class="nav navbar-nav">                   
                    <li><?= $this->Html->link('Page1', ['controller' => 'pages', 'action' => 'page1']); ?></li>
                    <li><?= $this->Html->link('Page2', ['controller' => 'pages', 'action' => 'page2']); ?></li>
                    <li><?= $this->Html->link('Page3', ['controller' => 'pages', 'action' => 'page3']); ?></li>
                </ul>

                <!--dropdown list-->                  
                <ul class="nav navbar-nav navbar-right">    
                    <?php if ($currentUser) : ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $currentUser['username'] ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><?= $this->Html->link('Admin Page', ['controller' => 'users', 'action' => 'home']); ?></li>                                            
                                <li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></li>
                            </ul>   
                        </li>
                    <?php else : ?>
                        <li class="divider"></li>
                        <li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>

        <!--jumbotron-->
        <header class="jumbotron">
            <div class="container">
                <?php echo $this->fetch('desc'); ?>
            </div>
        </header>

        <!--contents area-->
        <div class="container-fruid">
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('contentarea'); ?>
            </div>
        </div>

        <!--footer-->
        <footer class="footer">
            <div class="container">
                <p class="text-muted">Copyright (C) 2016 y-mizo All Rights Reserved.</p>
            </div>
        </footer>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>