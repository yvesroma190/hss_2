<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementtele $elementtele
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $elementtele->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $elementtele->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Elementteles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="elementteles form content">
            <?= $this->Form->create($elementtele) ?>
            <fieldset>
                <legend><?= __('Edit Elementtele') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('offretele_id', ['options' => $offreteles, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
