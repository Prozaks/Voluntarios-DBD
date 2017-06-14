<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Commune'), ['action' => 'edit', $commune->COM_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commune'), ['action' => 'delete', $commune->COM_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $commune->COM_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Commune'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commune'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commune view large-9 medium-8 columns content">
    <h3><?= h($commune->COM_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('COM NOMBRE') ?></th>
            <td><?= h($commune->COM_NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COM ID') ?></th>
            <td><?= $this->Number->format($commune->COM_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PRO ID') ?></th>
            <td><?= $this->Number->format($commune->PRO_ID) ?></td>
        </tr>
    </table>
</div>
