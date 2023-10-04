<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Math> $math
 */
?>
<div class="math index content">
    <?= $this->Html->link(__('New Math'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Math') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Number1') ?></th>
                    <th><?= $this->Paginator->sort('Number2') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('addedNums') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($math as $math): ?>
                <tr>
                    <td><?= $this->Number->format($math->id) ?></td>
                    <td><?= $this->Number->format($math->Number1) ?></td>
                    <td><?= $this->Number->format($math->Number2) ?></td>
                    <td><?= h($math->created) ?></td>
                    <td><?= h($math->modified) ?></td>
                    <td><?= $this->Number->format($math->addedNums) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $math->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $math->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $math->id], ['confirm' => __('Are you sure you want to delete # {0}?', $math->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
