<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($user->items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Aton Type') ?></th>
                <th scope="col"><?= __('Class') ?></th>
                <th scope="col"><?= __('Type Of Ship') ?></th>
                <th scope="col"><?= __('Mmsi') ?></th>
                <th scope="col"><?= __('Imo Number') ?></th>
                <th scope="col"><?= __('Call Sign') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Destination') ?></th>
                <th scope="col"><?= __('Electronic Fixing Device') ?></th>
                <th scope="col"><?= __('Eta') ?></th>
                <th scope="col"><?= __('Max Draught') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Sog') ?></th>
                <th scope="col"><?= __('Rot') ?></th>
                <th scope="col"><?= __('Cog') ?></th>
                <th scope="col"><?= __('True Heading') ?></th>
                <th scope="col"><?= __('Navigation Status') ?></th>
                <th scope="col"><?= __('Dimension A') ?></th>
                <th scope="col"><?= __('Dimension B') ?></th>
                <th scope="col"><?= __('Dimension C') ?></th>
                <th scope="col"><?= __('Dimension D') ?></th>
                <th scope="col"><?= __('Msg Type') ?></th>
                <th scope="col"><?= __('Port') ?></th>
                <th scope="col"><?= __('Date Time Stamp') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->aton_type) ?></td>
                <td><?= h($items->class) ?></td>
                <td><?= h($items->type_of_ship) ?></td>
                <td><?= h($items->mmsi) ?></td>
                <td><?= h($items->imo_number) ?></td>
                <td><?= h($items->call_sign) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->destination) ?></td>
                <td><?= h($items->electronic_fixing_device) ?></td>
                <td><?= h($items->eta) ?></td>
                <td><?= h($items->max_draught) ?></td>
                <td><?= h($items->latitude) ?></td>
                <td><?= h($items->longitude) ?></td>
                <td><?= h($items->sog) ?></td>
                <td><?= h($items->rot) ?></td>
                <td><?= h($items->cog) ?></td>
                <td><?= h($items->true_heading) ?></td>
                <td><?= h($items->navigation_status) ?></td>
                <td><?= h($items->dimension_a) ?></td>
                <td><?= h($items->dimension_b) ?></td>
                <td><?= h($items->dimension_c) ?></td>
                <td><?= h($items->dimension_d) ?></td>
                <td><?= h($items->msg_type) ?></td>
                <td><?= h($items->port) ?></td>
                <td><?= h($items->date_time_stamp) ?></td>
                <td><?= h($items->user_id) ?></td>
                <td><?= h($items->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
