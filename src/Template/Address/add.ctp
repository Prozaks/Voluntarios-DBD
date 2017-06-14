<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Address'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="address form large-9 medium-8 columns content">
    <?= $this->Form->create($addres) ?>
    <fieldset>
        <legend><?= __('Add Addres') ?></legend>
        <?php
            echo $this->Form->input('COM_ID');
            echo $this->Form->input('ADD_CALLE');
            echo $this->Form->input('ADD_NUMERO');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
