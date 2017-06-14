<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->REG_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->REG_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $region->REG_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Region'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Region'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="region view large-9 medium-8 columns content">
    <h3><?= h($region->REG_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('REG NOMBRE') ?></th>
            <td><?= h($region->REG_NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('REG ID') ?></th>
            <td><?= $this->Number->format($region->REG_ID) ?></td>
        </tr>
    </table>
</div>
