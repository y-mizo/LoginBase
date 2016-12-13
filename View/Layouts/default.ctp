<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

//        echo $this->Html->css('cake.generic');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('front');
        echo $this->Html->css('subpage');
        echo $this->Html->script('jquery.min');
        echo $this->Html->script('bootstrap.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">

                <!--Logo-->
                <span class="navbar-brand"><?= $this->Html->link('LoginBase', '/'); ?></span>

                <!--toggle button-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-content">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div id="nav-content" class="collapse navbar-collapse">

                <!--menu-->
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
                                <li><?= $this->Html->link('Admin Page', ['controller' => 'users', 'action' => 'index']); ?></li>                                            
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

        <div id="container">

            <!--            <div id="header">
                        </div>-->
            <div id="content">

                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Session->flash('auth'); ?>

                <?php echo $this->fetch('content'); ?>
            </div>

            <footer class="footer">
                <div class="container">
                    <p class="text-muted">Copyright (C) 2016 y-mizo All Rights Reserved.</p>
                </div>
            </footer>

        </div>
    </div>
    <?php echo $this->element('sql_dump'); ?>
</body>
</html>
