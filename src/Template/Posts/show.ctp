<div class="posts view large-12 medium-12 columns">
    <h2><?= h($post->name) ?></h2>
    <div class="">
        <h6 class="subheader"><?= __('Name') ?></h6>
        <p><?= h($post->name) ?></p>
    </div>
    <div class="">
        <h6 class="subheader"><?= __('Image') ?></h6>
        <p><?= h($post->image) ?></p>
    </div>
    <div class="">
        <h6 class="subheader"><?= __('Created') ?></h6>
        <p><?= h($post->created) ?></p>
    </div>
    <div class="">
        <h6 class="subheader"><?= __('Modified') ?></h6>
        <p><?= h($post->modified) ?></p>
    </div>
    <div class="">
        <h6 class="subheader"><?= __('Content') ?></h6>
        <?= $this->Text->autoParagraph(h($post->content)) ?>
    </div>
</div>
<div class="actions columns large-12 medium-12">
    <div class="">
        <?= $this->Html->link(__('All Posts'), ['plugin' => 'SimpleBlog', 'controller' => 'Posts', 'action' => 'index']) ?>
    </div>
</div>
