<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Skill'), ['controller' => 'Skill', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skill', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="task index large-9 medium-8 columns content">
    <h3><?= __('Task') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('TASK_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MIS_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TASK_NOMBRE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TASK_CANTIDAD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('TASK_ESTADO') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($task as $task): ?>
            <tr>
                <td><?= $this->Number->format($task->TASK_ID) ?></td>
                <td><?= $this->Number->format($task->MIS_ID) ?></td>
                <td><?= h($task->TASK_NOMBRE) ?></td>
                <td><?= $this->Number->format($task->TASK_CANTIDAD) ?></td>
                <td><?= h($task->TASK_ESTADO) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $task->TASK_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $task->TASK_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $task->TASK_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $task->TASK_ID)]) ?>
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
