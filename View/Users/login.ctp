<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Login'); ?></legend>
        <?php
        echo $this->Form->input('username', ['required' => false]);
        echo $this->Form->input('password', ['required' => false]);
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Login')); ?>
</div>
<div class="actions">
    <!--<h3><?php echo __('Actions'); ?></h3>-->
</div>