<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit In Charge'), ['action' => 'edit', $inCharge->IN_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete In Charge'), ['action' => 'delete', $inCharge->IN_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $inCharge->IN_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List In Charge'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New In Charge'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inCharge view large-9 medium-8 columns content">
    <h3><?= h($inCharge->IN_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IN NOMBRE1') ?></th>
            <td><?= h($inCharge->IN_NOMBRE1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN NOMBRE2') ?></th>
            <td><?= h($inCharge->IN_NOMBRE2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN APELLIDO2') ?></th>
            <td><?= h($inCharge->IN_APELLIDO2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN EMAIL') ?></th>
            <td><?= h($inCharge->IN_EMAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN UBICACION') ?></th>
            <td><?= h($inCharge->IN_UBICACION) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN ID') ?></th>
            <td><?= $this->Number->format($inCharge->IN_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ADD ID') ?></th>
            <td><?= $this->Number->format($inCharge->ADD_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN TELEFONO') ?></th>
            <td><?= $this->Number->format($inCharge->IN_TELEFONO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN IDUSER') ?></th>
            <td><?= $this->Number->format($inCharge->IN_IDUSER) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IN DISPONIBILIDAD') ?></th>
            <td><?= $inCharge->IN_DISPONIBILIDAD ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
