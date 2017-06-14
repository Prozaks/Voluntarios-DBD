<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administrator->ADM_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->ADM_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administrator'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administrator form large-9 medium-8 columns content">
    <?= $this->Form->create($administrator) ?>
    <fieldset>
        <legend><?= __('Edit Administrator') ?></legend>
        <?php
            echo $this->Form->input('ADM_NOMBRE1');
            echo $this->Form->input('ADM_NOMBRE2');
            echo $this->Form->input('ADM_APELLIDO1');
            echo $this->Form->input('ADM_APELLIDO2');
            echo $this->Form->input('ADM_TELEFONO');
            echo $this->Form->input('ADM_MAIL');
            echo $this->Form->input('ADM_UBICACION');
            echo $this->Form->input('ADM_DISPONIBILIDAD');
            echo $this->Form->input('ADM_IDUSER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
