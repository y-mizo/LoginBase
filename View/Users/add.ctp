<?php $this->assign('title', '新規登録'); ?>

<div class="row">  
    <div class="col-md-4 col-md-offset-4">  
        <?= $this->element('Users/form', ['submitLabel' => 'Submit', 'legend' => 'Add user']); ?>
    </div>
</div>