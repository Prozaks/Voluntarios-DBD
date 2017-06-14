<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administrator'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administrator index large-9 medium-8 columns content">
    <h3><?= __('Administrator') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ADM_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_NOMBRE1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_NOMBRE2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_APELLIDO1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_APELLIDO2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_TELEFONO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_MAIL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_UBICACION') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_DISPONIBILIDAD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ADM_IDUSER') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administrator as $administrator): ?>
            <tr>
                <td><?= $this->Number->format($administrator->ADM_ID) ?></td>
                <td><?= h($administrator->ADM_NOMBRE1) ?></td>
                <td><?= h($administrator->ADM_NOMBRE2) ?></td>
                <td><?= h($administrator->ADM_APELLIDO1) ?></td>
                <td><?= h($administrator->ADM_APELLIDO2) ?></td>
                <td><?= $this->Number->format($administrator->ADM_TELEFONO) ?></td>
                <td><?= h($administrator->ADM_MAIL) ?></td>
                <td><?= h($administrator->ADM_UBICACION) ?></td>
                <td><?= h($administrator->ADM_DISPONIBILIDAD) ?></td>
                <td><?= $this->Number->format($administrator->ADM_IDUSER) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administrator->ADM_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administrator->ADM_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administrator->ADM_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->ADM_ID)]) ?>
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
