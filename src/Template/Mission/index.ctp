<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mission'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mission index large-9 medium-8 columns content">
    <h3><?= __('Mission') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('MIS_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('IN_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EMER_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MIS_NOMBRE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MIS_ESTADO') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mission as $mission): ?>
            <tr>
                <td><?= $this->Number->format($mission->MIS_ID) ?></td>
                <td><?= $this->Number->format($mission->IN_ID) ?></td>
                <td><?= $this->Number->format($mission->EMER_ID) ?></td>
                <td><?= h($mission->MIS_NOMBRE) ?></td>
                <td><?= h($mission->MIS_ESTADO) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mission->MIS_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mission->MIS_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mission->MIS_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $mission->MIS_ID)]) ?>
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
