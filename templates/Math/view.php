<?php declare(strict_types=1);

/**
 * @var \App\View\AppView      $this
 * @var \App\Model\Entity\Math $math
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?php echo __('Actions'); ?></h4>
            <?php echo $this->Html->link(__('Edit Math'), ['action' => 'edit', $math->id], ['class' => 'side-nav-item']); ?>
            <?php echo $this->Form->postLink(__('Delete Math'), ['action' => 'delete', $math->id], ['confirm' => __('Are you sure you want to delete # {0}?', $math->id), 'class' => 'side-nav-item']); ?>
            <?php echo $this->Html->link(__('List Math'), ['action' => 'index'], ['class' => 'side-nav-item']); ?>
            <?php echo $this->Html->link(__('New Math'), ['action' => 'add'], ['class' => 'side-nav-item']); ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="math view content">
            <h3><?php echo h($math->id); ?></h3>
            <table>
                <tr>
                    <th><?php echo __('Id'); ?></th>
                    <td><?php echo $this->Number->format($math->id); ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Number1'); ?></th>
                    <td><?php echo $this->Number->format($math->Number1); ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Number2'); ?></th>
                    <td><?php echo $this->Number->format($math->Number2); ?></td>
                </tr>
                <tr>
                    <th><?php echo __('AddedNums'); ?></th>
                    <td><?php echo $this->Number->format($math->addedNums); ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Created'); ?></th>
                    <td><?php echo h($math->created); ?></td>
                </tr>
                <tr>
                    <th><?php echo __('Modified'); ?></th>
                    <td><?php echo h($math->modified); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
