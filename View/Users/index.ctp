
<?php $this->start('contentarea'); ?>
<style>
    .paging {
        margin-bottom: 100px;
    }
</style>
    <!--<h1 class="page-header">Dashboard</h1>-->

    <div class="users index">
        <h2><?php echo __('Users index'); ?></h2>
        <?php if ($currentUser['role'] === 'admin') : ?>
            <p class="text-right"><?php echo $this->Html->link(__('Add New User'), array('action' => 'add')); ?></p>
        <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-striped">
<!--<table cellpadding="0" cellspacing="0">-->
                <thead>
                    <tr>
                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                        <th><?php echo $this->Paginator->sort('username'); ?></th>

                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                        <th><?php echo $this->Paginator->sort('role'); ?></th>
                                <!--<th><?php echo $this->Paginator->sort('created'); ?></th>-->
                        <!--<th><?php echo $this->Paginator->sort('modified'); ?></th>-->
                        <?php if ($currentUser['role'] === 'admin') : ?>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo h($user['User']['id']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['username']); ?>&nbsp;</td>
                            <!--<td><?php echo h($user['User']['password']); ?>&nbsp;</td>-->
                            <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                            <td><?php echo h($user['User']['role']); ?>&nbsp;</td>
                        <!--<td><?php echo h($user['User']['created']); ?>&nbsp;</td>-->
                            <!--<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>-->
                            <?php if ($currentUser['role'] === 'admin') : ?>

                                <td class="actions">
                                    <button type="button" class="btn btn-info"><?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?></button>
                                    <button type="button" class="btn btn-warning"><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?></button>
                                    <button type="button" class="btn btn-danger"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?></button>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
<!--        <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            ));
            ?>	</p>-->
        <div class="paging">
            <ul class="pager">
            <li><?php echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled')); ?></li>
            <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
            <li><?php echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled')); ?></li>
                </ul>
        </div>
    </div>

    
<?php $this->end(); ?>
