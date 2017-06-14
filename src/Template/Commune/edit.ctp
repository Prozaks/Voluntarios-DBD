<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commune->COM_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commune->COM_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Commune'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="commune form large-9 medium-8 columns content">
    <?= $this->Form->create($commune) ?>
    <fieldset>
        <legend><?= __('Edit Commune') ?></legend>
        <?php
            echo $this->Form->input('PRO_ID');
            echo $this->Form->input('COM_NOMBRE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
