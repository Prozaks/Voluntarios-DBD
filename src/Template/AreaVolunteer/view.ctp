<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area Volunteer'), ['action' => 'edit', $areaVolunteer->AREA_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area Volunteer'), ['action' => 'delete', $areaVolunteer->AREA_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $areaVolunteer->AREA_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Area Volunteer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area Volunteer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areaVolunteer view large-9 medium-8 columns content">
    <h3><?= h($areaVolunteer->AREA_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('AREA ID') ?></th>
            <td><?= $this->Number->format($areaVolunteer->AREA_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VOL ID') ?></th>
            <td><?= $this->Number->format($areaVolunteer->VOL_ID) ?></td>
        </tr>
    </table>
</div>
