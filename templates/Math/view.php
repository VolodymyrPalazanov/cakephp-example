<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Math $math
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Math'), ['action' => 'edit', $math->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Math'), ['action' => 'delete', $math->id], ['confirm' => __('Are you sure you want to delete # {0}?', $math->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Math'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Math'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="math view content">
            <h3><?= h($math->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($math->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number1') ?></th>
                    <td><?= $this->Number->format($math->Number1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number2') ?></th>
                    <td><?= $this->Number->format($math->Number2) ?></td>
                </tr>
                <tr>
                    <th><?= __('AddedNums') ?></th>
                    <td><?= $this->Number->format($math->addedNums) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($math->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($math->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
