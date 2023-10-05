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
            <?php echo $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $math->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $math->id), 'class' => 'side-nav-item']
            ); ?>
            <?php echo $this->Html->link(__('List Math'), ['action' => 'index'], ['class' => 'side-nav-item']); ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="math form content">
            <?php echo $this->Form->create($math); ?>
            <fieldset>
                <legend><?php echo __('Edit Math'); ?></legend>
                <?php
                                echo $this->Form->control('Number1');
echo $this->Form->control('Number2');
echo $this->Form->control('addedNums');
?>
            </fieldset>
            <?php echo $this->Form->button(__('Submit')); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>
