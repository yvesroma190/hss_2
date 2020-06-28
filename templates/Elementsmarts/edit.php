<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementsmart $elementsmart
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $elementsmart->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmart->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Elementsmarts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="elementsmarts form content">
            <?= $this->Form->create($elementsmart) ?>
            <fieldset>
                <legend><?= __('Edit Elementsmart') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('offresmart_id', ['options' => $offresmarts, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
