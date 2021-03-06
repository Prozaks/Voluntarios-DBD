<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $region->REG_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $region->REG_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Region'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="region form large-9 medium-8 columns content">
    <?= $this->Form->create($region) ?>
    <fieldset>
        <legend><?= __('Edit Region') ?></legend>
        <?php
            echo $this->Form->input('REG_NOMBRE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
