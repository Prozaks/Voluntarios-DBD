<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $province->PRO_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $province->PRO_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Province'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="province form large-9 medium-8 columns content">
    <?= $this->Form->create($province) ?>
    <fieldset>
        <legend><?= __('Edit Province') ?></legend>
        <?php
            echo $this->Form->input('REG_ID');
            echo $this->Form->input('PRO_NOMBRE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
