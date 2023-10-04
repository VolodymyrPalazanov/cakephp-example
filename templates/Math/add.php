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
            <?= $this->Html->link(__('List Math'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="math form content">
            <?= $this->Form->create($math) ?>
            <fieldset>
                <legend><?= __('Add Math') ?></legend>
                <?php
                    echo $this->Form->control('Number1');
                    echo $this->Form->control('Number2');
                    echo $this->Form->control('addedNums');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
