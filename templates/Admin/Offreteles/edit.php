<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offretele $offretele
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offretele->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offretele->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Offreteles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offreteles form content">
            <?= $this->Form->create($offretele) ?>
            <fieldset>
                <legend><?= __('Edit Offretele') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('prix');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
