<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mission'), ['action' => 'edit', $mission->MIS_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mission'), ['action' => 'delete', $mission->MIS_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $mission->MIS_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Mission'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mission'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mission view large-9 medium-8 columns content">
    <h3><?= h($mission->MIS_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('MIS NOMBRE') ?></th>
            <td><?= h($mission->MIS_NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MIS ESTADO') ?></th>
            <td><?= h($mission->MIS_ESTADO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MIS ID') ?></th>
            <td><?= $this->Number->format($mission->MIS_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN ID') ?></th>
            <td><?= $this->Number->format($mission->IN_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EMER ID') ?></th>
            <td><?= $this->Number->format($mission->EMER_ID) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('MIS DESCRIPCION') ?></h4>
        <?= $this->Text->autoParagraph(h($mission->MIS_DESCRIPCION)); ?>
    </div>
</div>
