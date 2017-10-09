<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Add Item') ?></legend>
        <?php
            echo $this->Form->control('aton_type');
            echo $this->Form->control('class');
            echo $this->Form->control('type_of_ship');
            echo $this->Form->control('mmsi');
            echo $this->Form->control('imo_number');
            echo $this->Form->control('call_sign');
            echo $this->Form->control('name');
            echo $this->Form->control('destination');
            echo $this->Form->control('electronic_fixing_device');
            echo $this->Form->control('eta');
            echo $this->Form->control('max_draught');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
            echo $this->Form->control('sog');
            echo $this->Form->control('rot');
            echo $this->Form->control('cog');
            echo $this->Form->control('true_heading');
            echo $this->Form->control('navigation_status');
            echo $this->Form->control('dimension_a');
            echo $this->Form->control('dimension_b');
            echo $this->Form->control('dimension_c');
            echo $this->Form->control('dimension_d');
            echo $this->Form->control('msg_type');
            echo $this->Form->control('port');
            echo $this->Form->control('date_time_stamp');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
