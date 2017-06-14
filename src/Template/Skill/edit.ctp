<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $skill->SKILL_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $skill->SKILL_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Skill'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Task'), ['controller' => 'Task', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Task', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="skill form large-9 medium-8 columns content">
    <?= $this->Form->create($skill) ?>
    <fieldset>
        <legend><?= __('Edit Skill') ?></legend>
        <?php
            echo $this->Form->input('SKILL_NOMBRE');
            echo $this->Form->input('SKILL_DIFICULTAD');
            echo $this->Form->input('SKILL_DESCRIPCION');
            echo $this->Form->input('volunteer._ids', ['options' => $volunteer]);
            echo $this->Form->input('task._ids', ['options' => $task]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
