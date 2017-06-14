<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administrator'), ['action' => 'edit', $administrator->ADM_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administrator'), ['action' => 'delete', $administrator->ADM_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->ADM_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrator'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrator'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administrator view large-9 medium-8 columns content">
    <h3><?= h($administrator->ADM_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ADM NOMBRE1') ?></th>
            <td><?= h($administrator->ADM_NOMBRE1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM NOMBRE2') ?></th>
            <td><?= h($administrator->ADM_NOMBRE2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM APELLIDO1') ?></th>
            <td><?= h($administrator->ADM_APELLIDO1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM APELLIDO2') ?></th>
            <td><?= h($administrator->ADM_APELLIDO2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM MAIL') ?></th>
            <td><?= h($administrator->ADM_MAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM UBICACION') ?></th>
            <td><?= h($administrator->ADM_UBICACION) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM ID') ?></th>
            <td><?= $this->Number->format($administrator->ADM_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM TELEFONO') ?></th>
            <td><?= $this->Number->format($administrator->ADM_TELEFONO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM IDUSER') ?></th>
            <td><?= $this->Number->format($administrator->ADM_IDUSER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADM DISPONIBILIDAD') ?></th>
            <td><?= $administrator->ADM_DISPONIBILIDAD ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
