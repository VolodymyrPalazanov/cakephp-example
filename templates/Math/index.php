<?php declare(strict_types=1);

/**
 * @var \App\View\AppView                $this
 * @var iterable<\App\Model\Entity\Math> $math
 */
?>
<div class="math index content">
    <?php echo $this->Html->link(__('New Math'), ['action' => 'add'], ['class' => 'button float-right']); ?>
    <h3><?php echo __('Math'); ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('Number1'); ?></th>
                    <th><?php echo $this->Paginator->sort('Number2'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th><?php echo $this->Paginator->sort('addedNums'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($math as $math) { ?>
                <tr>
                    <td><?php echo $this->Number->format($math->id); ?></td>
                    <td><?php echo $this->Number->format($math->Number1); ?></td>
                    <td><?php echo $this->Number->format($math->Number2); ?></td>
                    <td><?php echo h($math->created); ?></td>
                    <td><?php echo h($math->modified); ?></td>
                    <td><?php echo $this->Number->format($math->addedNums); ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), ['action' => 'view', $math->id]); ?>
                        <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $math->id]); ?>
                        <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $math->id], ['confirm' => __('Are you sure you want to delete # {0}?', $math->id)]); ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->Paginator->first('<< '.__('first')); ?>
            <?php echo $this->Paginator->prev('< '.__('previous')); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next(__('next').' >'); ?>
            <?php echo $this->Paginator->last(__('last').' >>'); ?>
        </ul>
        <p><?php echo $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')); ?></p>
    </div>
</div>
