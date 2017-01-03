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
                 
        <ul class="nav navbar-nav navbar-right">
            <?php if ($currentUser) : ?>
                <li><?= $this->Html->link('管理画面へ', ['controller' => 'admins', 'action' => 'index']); ?></li>
            <?php else : ?>
                <li class="divider"></li>
                <li><?= $this->Html->link('ログイン', ['controller' => 'users', 'action' => 'login']); ?></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>