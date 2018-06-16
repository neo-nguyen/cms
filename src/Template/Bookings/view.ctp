<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $booking
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Booking'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookings view large-9 medium-8 columns content">
    <h3><?= h($booking->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($booking->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($booking->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Id') ?></th>
            <td><?= $this->Number->format($booking->item_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Update') ?></th>
            <td><?= h($booking->date_update) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Borrow') ?></th>
            <td><?= h($booking->date_borrow) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Due Return') ?></th>
            <td><?= h($booking->date_due_return) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Return') ?></th>
            <td><?= h($booking->date_return) ?></td>
        </tr>
    </table>
</div>
