<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offresmart $offresmart
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Offresmarts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offresmarts form content">
            <?= $this->Form->create($offresmart) ?>
            <fieldset>
                <legend><?= __('Add Offresmart') ?></legend>
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
