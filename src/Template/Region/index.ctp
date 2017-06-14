<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="region index large-9 medium-8 columns content">
    <h3><?= __('Region') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('REG_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('REG_NOMBRE') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($region as $region): ?>
            <tr>
                <td><?= $this->Number->format($region->REG_ID) ?></td>
                <td><?= h($region->REG_NOMBRE) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $region->REG_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $region->REG_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $region->REG_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $region->REG_ID)]) ?>
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
