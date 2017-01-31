<?php $this->assign('title', '詳細表示'); ?>

<h1><?php echo __('詳細表示'); ?></h1>
<div class="actions">
    <ul class="list-inline text-right">
        <li><?php echo $this->Html->link(__('編集'), array('action' => 'edit', $user['User']['id']), ['class' => 'btn btn-warning']); ?></li>
        <li><?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?></li>
    </ul>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td><?php echo __('Id'); ?><td>
            <td>
                <?php echo h($user['User']['id']); ?>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td><?php echo __('Username'); ?><td>
            <td>
                <?php echo h($user['User']['username']); ?>
                &nbsp;
            </td>
        </tr>

<!--        <td><?php echo __('Password'); ?><td>
<td>
        <?php echo h($user['User']['password']); ?>
    &nbsp;
<td>-->
        <tr>

            <td><?php echo __('Email'); ?><td>
            <td>
                <?php echo h($user['User']['email']); ?>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td><?php echo __('Role'); ?><td>
            <td>
                <?php echo h($user['User']['role']); ?>
                &nbsp;
            </td>

        </tr>
        <tr>
            <td><?php echo __('Created'); ?><td>
            <td>
                <?php echo h($user['User']['created']); ?>
                &nbsp;
            </td>
        </tr>
        <tr>
            <td><?php echo __('Modified'); ?><td>
            <td>
                <?php echo h($user['User']['modified']); ?>
                &nbsp;
            </td>
        </tr>
    </table>

</div>



