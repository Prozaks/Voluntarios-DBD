<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mission->MIS_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mission->MIS_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mission'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mission form large-9 medium-8 columns content">
    <?= $this->Form->create($mission) ?>
    <fieldset>
        <legend><?= __('Edit Mission') ?></legend>
        <?php
            echo $this->Form->input('IN_ID');
            echo $this->Form->input('EMER_ID');
            echo $this->Form->input('MIS_NOMBRE');
            echo $this->Form->input('MIS_DESCRIPCION');
            echo $this->Form->input('MIS_ESTADO');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
