<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('username', ['required' => false]);
        echo $this->Form->input('password', ['required' => false]);
        echo $this->Form->input('password_confirm', ['required' => false, 'type' => 'password']);
        echo $this->Form->input('email', ['required' => false]);
        echo $this->Form->input('role', [
            'required' => false,
            'empty' => 'choose one',
            'type' => 'select',
            'options' => [
                'admin' => 'Admin',
                'author' => 'Author']
        ]);
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
    </ul>
</div>
