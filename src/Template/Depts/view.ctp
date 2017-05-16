<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dept'), ['action' => 'edit', $dept->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dept'), ['action' => 'delete', $dept->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dept->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Depts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dept'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="depts view large-9 medium-8 columns content">
    <h3><?= h($dept->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($dept->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dept->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= $this->Number->format($dept->capacity) ?></td>
        </tr>
    </table>
</div>
