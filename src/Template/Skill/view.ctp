<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Skill'), ['action' => 'edit', $skill->SKILL_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Skill'), ['action' => 'delete', $skill->SKILL_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->SKILL_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Skill'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Task'), ['controller' => 'Task', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Task', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="skill view large-9 medium-8 columns content">
    <h3><?= h($skill->SKILL_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('SKILL NOMBRE') ?></th>
            <td><?= h($skill->SKILL_NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SKILL ID') ?></th>
            <td><?= $this->Number->format($skill->SKILL_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SKILL DIFICULTAD') ?></th>
            <td><?= $this->Number->format($skill->SKILL_DIFICULTAD) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('SKILL DESCRIPCION') ?></h4>
        <?= $this->Text->autoParagraph(h($skill->SKILL_DESCRIPCION)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Volunteer') ?></h4>
        <?php if (!empty($skill->volunteer)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('VOL ID') ?></th>
                <th scope="col"><?= __('ADD ID') ?></th>
                <th scope="col"><?= __('VOL NOMBRE1') ?></th>
                <th scope="col"><?= __('VOL NOMBRE2') ?></th>
                <th scope="col"><?= __('VOL APELLIDO1') ?></th>
                <th scope="col"><?= __('VOL APELLIDO2') ?></th>
                <th scope="col"><?= __('VOL TELEFONO') ?></th>
                <th scope="col"><?= __('VOL EMAIL') ?></th>
                <th scope="col"><?= __('VOL DISPONIBILIDAD') ?></th>
                <th scope="col"><?= __('VOL RANK') ?></th>
                <th scope="col"><?= __('VOL IDUSER') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skill->volunteer as $volunteer): ?>
            <tr>
                <td><?= h($volunteer->VOL_ID) ?></td>
                <td><?= h($volunteer->ADD_ID) ?></td>
                <td><?= h($volunteer->VOL_NOMBRE1) ?></td>
                <td><?= h($volunteer->VOL_NOMBRE2) ?></td>
                <td><?= h($volunteer->VOL_APELLIDO1) ?></td>
                <td><?= h($volunteer->VOL_APELLIDO2) ?></td>
                <td><?= h($volunteer->VOL_TELEFONO) ?></td>
                <td><?= h($volunteer->VOL_EMAIL) ?></td>
                <td><?= h($volunteer->VOL_DISPONIBILIDAD) ?></td>
                <td><?= h($volunteer->VOL_RANK) ?></td>
                <td><?= h($volunteer->VOL_IDUSER) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Volunteer', 'action' => 'view', $volunteer->VOL_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Volunteer', 'action' => 'edit', $volunteer->VOL_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Volunteer', 'action' => 'delete', $volunteer->VOL_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $volunteer->VOL_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Task') ?></h4>
        <?php if (!empty($skill->task)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('TASK ID') ?></th>
                <th scope="col"><?= __('MIS ID') ?></th>
                <th scope="col"><?= __('TASK NOMBRE') ?></th>
                <th scope="col"><?= __('TASK CANTIDAD') ?></th>
                <th scope="col"><?= __('TASK ESTADO') ?></th>
                <th scope="col"><?= __('TASK DESCRIPCION') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($skill->task as $task): ?>
            <tr>
                <td><?= h($task->TASK_ID) ?></td>
                <td><?= h($task->MIS_ID) ?></td>
                <td><?= h($task->TASK_NOMBRE) ?></td>
                <td><?= h($task->TASK_CANTIDAD) ?></td>
                <td><?= h($task->TASK_ESTADO) ?></td>
                <td><?= h($task->TASK_DESCRIPCION) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Task', 'action' => 'view', $task->TASK_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Task', 'action' => 'edit', $task->TASK_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Task', 'action' => 'delete', $task->TASK_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $task->TASK_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
