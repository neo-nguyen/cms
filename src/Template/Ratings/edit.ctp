<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $rating
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rating->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rating->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ratings'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ratings form large-9 medium-8 columns content">
    <?= $this->Form->create($rating) ?>
    <fieldset>
        <legend><?= __('Edit Rating') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('item_id');
            echo $this->Form->control('stars');
            echo $this->Form->control('created_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
