<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New In Charge'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inCharge index large-9 medium-8 columns content">
    <h3><?= __('In Charge') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('IN_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADD_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_NOMBRE1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_NOMBRE2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_APELLIDO2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_TELEFONO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_EMAIL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_UBICACION') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_DISPONIBILIDAD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_IDUSER') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inCharge as $inCharge): ?>
            <tr>
                <td><?= $this->Number->format($inCharge->IN_ID) ?></td>
                <td><?= $this->Number->format($inCharge->ADD_ID) ?></td>
                <td><?= h($inCharge->IN_NOMBRE1) ?></td>
                <td><?= h($inCharge->IN_NOMBRE2) ?></td>
                <td><?= h($inCharge->IN_APELLIDO2) ?></td>
                <td><?= $this->Number->format($inCharge->IN_TELEFONO) ?></td>
                <td><?= h($inCharge->IN_EMAIL) ?></td>
                <td><?= h($inCharge->IN_UBICACION) ?></td>
                <td><?= h($inCharge->IN_DISPONIBILIDAD) ?></td>
                <td><?= $this->Number->format($inCharge->IN_IDUSER) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inCharge->IN_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inCharge->IN_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inCharge->IN_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $inCharge->IN_ID)]) ?>
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
