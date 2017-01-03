<?php
echo $this->Form->create('User', array(
    'inputDefaults' => array(
        'div' => 'form-group',
        'wrapInput' => false,
        'class' => 'form-control'
    ),
    'class' => 'well',
    'novalidate' => true,  // サーバ側バリデーション確認
));
?>
<fieldset>
    <legend><b><?= $legend; ?></b></legend>

    <?php
    echo $this->Form->input('username', array(
//    'placeholder' => 'Username'
    ));
    ?>
    <?php if ($this->action === 'add') : ?>
        <?php
        echo $this->Form->input('password', array(
//            'placeholder' => 'Password',
        ));
        ?>
        <?php
        echo $this->Form->input('password_confirm', array(
//            'placeholder' => 'Password_confirm',
            'type' => 'password',
        ));
        ?>
    <?php endif; ?>

    <?php
    echo $this->Form->input('email', array(
//    'placeholder' => 'email'
    ));
    ?>
    <?php
    echo $this->Form->input('role', array(
        'empty' => 'Choose one',
        'type' => 'select',
        'options' => [
            'admin' => 'Admin',
            'author' => 'Author']
    ));
    ?>

    <?php if (!empty($this->request->data)) : ?>
        <?= $this->Form->hidden('id'); ?>
    <?php endif; ?>
    <?php
    echo $this->Form->submit($submitLabel, array(
        'div' => 'form-group',
        'class' => 'btn btn-primary'
    ));
    ?>

</fieldset>
<?php echo $this->Form->end(); ?>
 