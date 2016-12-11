<?= $this->Form->create('User'); ?>
<?= $this->Form->input('username'); ?>
<?= $this->Form->input('password'); ?>
<?= $this->Form->input('password_confirm', ['type' => 'password']); ?>
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('role', [
    'empty' => 'choose one',
    'type' => 'select',
    'options' => [
        'admin' => 'Admin',
        'author' => 'Author']
]); ?>
<?php if (!empty($this->request->data)) : ?>
    <?= $this->Form->hidden('id'); ?>
<?php endif; ?>
<?= $this->Form->end(__($submitLabel)); ?>