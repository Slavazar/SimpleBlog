<?php
$postHelper = $this->helpers()->load('SimpleBlog.Post');
?>
<div class="posts index large-12 medium-12 columns">
    <?php foreach ($posts as $post): ?>
        <h3><?= __('Name') ?></h3>
        <div><?= h($post->name) ?></div>
        <h3><?= __('Image') ?></h3>
        <div><?= h($post->image) ?></div>
        <h3><?= __('Excerpt') ?></h3>
        <div><?= h($postHelper->getShortText($post)) ?></div>
        <h3><?= __('Date') ?></h3>
        <div><?= h($post->created->format('Y-m-d H:i:s')) ?></div>
        <div class="actions">
            <?= $this->Html->link(__('Show'), ['plugin' => 'SimpleBlog', 'controller' => 'Posts', 'action' => 'show', $post->slug]) ?>
        </div>

    <?php endforeach; ?>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
