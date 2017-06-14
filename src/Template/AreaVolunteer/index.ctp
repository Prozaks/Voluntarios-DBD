<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Area Volunteer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areaVolunteer index large-9 medium-8 columns content">
    <h3><?= __('Area Volunteer') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('AREA_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('VOL_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areaVolunteer as $areaVolunteer): ?>
            <tr>
                <td><?= $this->Number->format($areaVolunteer->AREA_ID) ?></td>
                <td><?= $this->Number->format($areaVolunteer->VOL_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areaVolunteer->AREA_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areaVolunteer->AREA_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areaVolunteer->AREA_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $areaVolunteer->AREA_ID)]) ?>
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
