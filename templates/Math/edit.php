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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $math->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $math->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Math'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="math form content">
            <?= $this->Form->create($math) ?>
            <fieldset>
                <legend><?= __('Edit Math') ?></legend>
                <?php
                    echo $this->Form->control('Number1');
                    echo $this->Form->control('Number2');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
