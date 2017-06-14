<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $areaVolunteer->AREA_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $areaVolunteer->AREA_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Area Volunteer'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="areaVolunteer form large-9 medium-8 columns content">
    <?= $this->Form->create($areaVolunteer) ?>
    <fieldset>
        <legend><?= __('Edit Area Volunteer') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
