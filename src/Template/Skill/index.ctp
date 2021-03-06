<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Task'), ['controller' => 'Task', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Task', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="skill index large-9 medium-8 columns content">
    <h3><?= __('Skill') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('SKILL_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SKILL_NOMBRE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SKILL_DIFICULTAD') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($skill as $skill): ?>
            <tr>
                <td><?= $this->Number->format($skill->SKILL_ID) ?></td>
                <td><?= h($skill->SKILL_NOMBRE) ?></td>
                <td><?= $this->Number->format($skill->SKILL_DIFICULTAD) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $skill->SKILL_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $skill->SKILL_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $skill->SKILL_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->SKILL_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
