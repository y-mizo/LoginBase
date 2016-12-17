<?php $this->start('contentarea'); ?>
<div class="container form-format">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <?php
            echo $this->Form->create('User', array(
                'inputDefaults' => array(
                    'div' => 'form-group',
                    'wrapInput' => false,
                    'class' => 'form-control'
                ),
                'class' => 'well'
            ));
            ?>
            <fieldset>
                <legend><b>Login</b></legend>
                <?php
                echo $this->Form->input('username', array(
                    'placeholder' => 'Username'
                ));
                ?>
                <?php
                echo $this->Form->input('password', array(
                    'placeholder' => 'Password'
                ));
                ?>
                <?php
                echo $this->Form->submit('Go', array(
                    'div' => 'form-group',
                    'class' => 'btn btn-default'             
                ));
                ?>
            </fieldset>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>
<?php $this->end(); ?>

<!--<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Login'); ?></legend>
<?php
echo $this->Form->input('username');
echo $this->Form->input('password');
?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
</div>-->
