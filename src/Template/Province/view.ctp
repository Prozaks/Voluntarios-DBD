<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Province'), ['action' => 'edit', $province->PRO_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Province'), ['action' => 'delete', $province->PRO_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $province->PRO_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Province'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="province view large-9 medium-8 columns content">
    <h3><?= h($province->PRO_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('PRO NOMBRE') ?></th>
            <td><?= h($province->PRO_NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PRO ID') ?></th>
            <td><?= $this->Number->format($province->PRO_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('REG ID') ?></th>
            <td><?= $this->Number->format($province->REG_ID) ?></td>
        </tr>
    </table>
</div>
