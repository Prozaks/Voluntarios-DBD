<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Volunteer'), ['action' => 'edit', $volunteer->VOL_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Volunteer'), ['action' => 'delete', $volunteer->VOL_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $volunteer->VOL_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Volunteer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Volunteer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Area'), ['controller' => 'Area', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Area', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emergency'), ['controller' => 'Emergency', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emergency'), ['controller' => 'Emergency', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Skill'), ['controller' => 'Skill', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['controller' => 'Skill', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Task'), ['controller' => 'Task', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Task', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="volunteer view large-9 medium-8 columns content">
    <h3><?= h($volunteer->VOL_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('VOL NOMBRE1') ?></th>
            <td><?= h($volunteer->VOL_NOMBRE1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL NOMBRE2') ?></th>
            <td><?= h($volunteer->VOL_NOMBRE2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL APELLIDO1') ?></th>
            <td><?= h($volunteer->VOL_APELLIDO1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL APELLIDO2') ?></th>
            <td><?= h($volunteer->VOL_APELLIDO2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL EMAIL') ?></th>
            <td><?= h($volunteer->VOL_EMAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL ID') ?></th>
            <td><?= $this->Number->format($volunteer->VOL_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADD ID') ?></th>
            <td><?= $this->Number->format($volunteer->ADD_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL TELEFONO') ?></th>
            <td><?= $this->Number->format($volunteer->VOL_TELEFONO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL RANK') ?></th>
            <td><?= $this->Number->format($volunteer->VOL_RANK) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL IDUSER') ?></th>
            <td><?= $this->Number->format($volunteer->VOL_IDUSER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL DISPONIBILIDAD') ?></th>
            <td><?= $volunteer->VOL_DISPONIBILIDAD ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Area') ?></h4>
        <?php if (!empty($volunteer->area)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('AREA ID') ?></th>
                <th scope="col"><?= __('AREA NOMBRE') ?></th>
                <th scope="col"><?= __('AREA NUMERO') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($volunteer->area as $area): ?>
            <tr>
                <td><?= h($area->AREA_ID) ?></td>
                <td><?= h($area->AREA_NOMBRE) ?></td>
                <td><?= h($area->AREA_NUMERO) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Area', 'action' => 'view', $area->AREA_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Area', 'action' => 'edit', $area->AREA_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Area', 'action' => 'delete', $area->AREA_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $area->AREA_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Emergency') ?></h4>
        <?php if (!empty($volunteer->emergency)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('EMER ID') ?></th>
                <th scope="col"><?= __('AREA ID') ?></th>
                <th scope="col"><?= __('ADM ID') ?></th>
                <th scope="col"><?= __('EMER NOMBRE') ?></th>
                <th scope="col"><?= __('EMER FECHA') ?></th>
                <th scope="col"><?= __('EMER ESTADO') ?></th>
                <th scope="col"><?= __('EMER DESCRIPCION') ?></th>
                <th scope="col"><?= __('EMER GRAVEDAD') ?></th>
                <th scope="col"><?= __('EMER RANGO') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($volunteer->emergency as $emergency): ?>
            <tr>
                <td><?= h($emergency->EMER_ID) ?></td>
                <td><?= h($emergency->AREA_ID) ?></td>
                <td><?= h($emergency->ADM_ID) ?></td>
                <td><?= h($emergency->EMER_NOMBRE) ?></td>
                <td><?= h($emergency->EMER_FECHA) ?></td>
                <td><?= h($emergency->EMER_ESTADO) ?></td>
                <td><?= h($emergency->EMER_DESCRIPCION) ?></td>
                <td><?= h($emergency->EMER_GRAVEDAD) ?></td>
                <td><?= h($emergency->EMER_RANGO) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Emergency', 'action' => 'view', $emergency->EMER_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Emergency', 'action' => 'edit', $emergency->EMER_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emergency', 'action' => 'delete', $emergency->EMER_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $emergency->EMER_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Skill') ?></h4>
        <?php if (!empty($volunteer->skill)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('SKILL ID') ?></th>
                <th scope="col"><?= __('SKILL NOMBRE') ?></th>
                <th scope="col"><?= __('SKILL DIFICULTAD') ?></th>
                <th scope="col"><?= __('SKILL DESCRIPCION') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($volunteer->skill as $skill): ?>
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
        <h4><?= __('Related Task') ?></h4>
        <?php if (!empty($volunteer->task)): ?>
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
            <?php foreach ($volunteer->task as $task): ?>
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
