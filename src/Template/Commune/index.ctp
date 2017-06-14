<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Commune'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="commune index large-9 medium-8 columns content">
    <h3><?= __('Commune') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('COM_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PRO_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COM_NOMBRE') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commune as $commune): ?>
            <tr>
                <td><?= $this->Number->format($commune->COM_ID) ?></td>
                <td><?= $this->Number->format($commune->PRO_ID) ?></td>
                <td><?= h($commune->COM_NOMBRE) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $commune->COM_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commune->COM_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commune->COM_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $commune->COM_ID)]) ?>
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
