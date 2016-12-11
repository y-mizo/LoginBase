<div class="users form">
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?= $this->element('Users/form', ['submitLabel' => 'Update']); ?>
    </fieldset>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('User.id')))); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
    </ul>
</div>
