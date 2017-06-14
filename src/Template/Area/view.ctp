<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->AREA_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->AREA_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $area->AREA_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Area'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Volunteer'), ['controller' => 'Volunteer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Volunteer'), ['controller' => 'Volunteer', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="area view large-9 medium-8 columns content">
    <h3><?= h($area->AREA_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('AREA NOMBRE') ?></th>
            <td><?= h($area->AREA_NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AREA ID') ?></th>
            <td><?= $this->Number->format($area->AREA_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AREA NUMERO') ?></th>
            <td><?= $this->Number->format($area->AREA_NUMERO) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Volunteer') ?></h4>
        <?php if (!empty($area->volunteer)): ?>
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
            <?php foreach ($area->volunteer as $volunteer): ?>
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
