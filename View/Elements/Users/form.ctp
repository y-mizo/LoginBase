<?= $this->Form->create('User'); ?>
<?= $this->Form->input('username', ['required' => false]); ?>
<?= $this->Form->input('password', ['required' => false]); ?>
<?= $this->Form->input('password_confirm', ['required' => false, 'type' => 'password']); ?>
<?= $this->Form->input('email', ['required' => false]); ?>
<?= $this->Form->input('role', [
    'required' => false,
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