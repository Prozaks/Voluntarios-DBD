<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Addres'), ['action' => 'edit', $addres->ADD_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Addres'), ['action' => 'delete', $addres->ADD_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $addres->ADD_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Addres'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="address view large-9 medium-8 columns content">
    <h3><?= h($addres->ADD_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ADD CALLE') ?></th>
            <td><?= h($addres->ADD_CALLE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADD ID') ?></th>
            <td><?= $this->Number->format($addres->ADD_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('COM ID') ?></th>
            <td><?= $this->Number->format($addres->COM_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADD NUMERO') ?></th>
            <td><?= $this->Number->format($addres->ADD_NUMERO) ?></td>
        </tr>
    </table>
</div>
