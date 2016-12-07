<div class="users form">
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?= $this->element('Users/form', ['submitLabel' => 'Submit']); ?>
    </fieldset>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
    </ul>
</div>