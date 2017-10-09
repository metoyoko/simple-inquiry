<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aton Type') ?></th>
            <td><?= h($item->aton_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Class') ?></th>
            <td><?= h($item->class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Of Ship') ?></th>
            <td><?= h($item->type_of_ship) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mmsi') ?></th>
            <td><?= h($item->mmsi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imo Number') ?></th>
            <td><?= h($item->imo_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Call Sign') ?></th>
            <td><?= h($item->call_sign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($item->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination') ?></th>
            <td><?= h($item->destination) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Electronic Fixing Device') ?></th>
            <td><?= h($item->electronic_fixing_device) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Eta') ?></th>
            <td><?= h($item->eta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Draught') ?></th>
            <td><?= h($item->max_draught) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($item->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($item->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sog') ?></th>
            <td><?= h($item->sog) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rot') ?></th>
            <td><?= h($item->rot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cog') ?></th>
            <td><?= h($item->cog) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('True Heading') ?></th>
            <td><?= h($item->true_heading) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Navigation Status') ?></th>
            <td><?= h($item->navigation_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dimension A') ?></th>
            <td><?= h($item->dimension_a) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dimension B') ?></th>
            <td><?= h($item->dimension_b) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dimension C') ?></th>
            <td><?= h($item->dimension_c) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dimension D') ?></th>
            <td><?= h($item->dimension_d) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Msg Type') ?></th>
            <td><?= h($item->msg_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Port') ?></th>
            <td><?= h($item->port) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Time Stamp') ?></th>
            <td><?= h($item->date_time_stamp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->id, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
    </table>
</div>
