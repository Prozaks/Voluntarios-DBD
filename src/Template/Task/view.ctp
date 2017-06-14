<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Task'), ['action' => 'edit', $task->TASK_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Task'), ['action' => 'delete', $task->TASK_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $task->TASK_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Task'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skill'), ['controller' => 'Skill', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skill', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="task view large-9 medium-8 columns content">
    <h3><?= h($task->TASK_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('TASK NOMBRE') ?></th>
            <td><?= h($task->TASK_NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TASK ESTADO') ?></th>
            <td><?= h($task->TASK_ESTADO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TASK ID') ?></th>
            <td><?= $this->Number->format($task->TASK_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MIS ID') ?></th>
            <td><?= $this->Number->format($task->MIS_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TASK CANTIDAD') ?></th>
            <td><?= $this->Number->format($task->TASK_CANTIDAD) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('TASK DESCRIPCION') ?></h4>
        <?= $this->Text->autoParagraph(h($task->TASK_DESCRIPCION)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Skill') ?></h4>
        <?php if (!empty($task->skill)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('SKILL ID') ?></th>
                <th scope="col"><?= __('SKILL NOMBRE') ?></th>
                <th scope="col"><?= __('SKILL DIFICULTAD') ?></th>
                <th scope="col"><?= __('SKILL DESCRIPCION') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($task->skill as $skill): ?>
            <tr>
                <td><?= h($skill->SKILL_ID) ?></td>
                <td><?= h($skill->SKILL_NOMBRE) ?></td>
                <td><?= h($skill->SKILL_DIFICULTAD) ?></td>
                <td><?= h($skill->SKILL_DESCRIPCION) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Skill', 'action' => 'view', $skill->SKILL_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Skill', 'action' => 'edit', $skill->SKILL_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Skill', 'action' => 'delete', $skill->SKILL_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->SKILL_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Volunteer') ?></h4>
        <?php if (!empty($task->volunteer)): ?>
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
            <?php foreach ($task->volunteer as $volunteer): ?>
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
</div>
