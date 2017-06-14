<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Province'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="province index large-9 medium-8 columns content">
    <h3><?= __('Province') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('PRO_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('REG_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PRO_NOMBRE') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($province as $province): ?>
            <tr>
                <td><?= $this->Number->format($province->PRO_ID) ?></td>
                <td><?= $this->Number->format($province->REG_ID) ?></td>
                <td><?= h($province->PRO_NOMBRE) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $province->PRO_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $province->PRO_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $province->PRO_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $province->PRO_ID)]) ?>
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
