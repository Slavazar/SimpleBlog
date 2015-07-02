<div class="posts index large-12 medium-12 columns">
    <table cellpadding="0" cellspacing="0">
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $this->Number->format($post->id) ?></td>
            <td><?= h($post->name) ?></td>
            <td><?= h($post->slug) ?></td>
            <td><?= h($post->image) ?></td>
            <td><?= h($post->published) ?></td>
            <td><?= h($post->created) ?></td>
            <td><?= h($post->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Show'), ['action' => 'show', $post->slug]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
