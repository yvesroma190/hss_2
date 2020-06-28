<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptiontele $souscriptiontele
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Souscriptionteles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="souscriptionteles form content">
            <?= $this->Form->create($souscriptiontele) ?>
            <fieldset>
                <legend><?= __('Add Souscriptiontele') ?></legend>
                <?php
                    echo $this->Form->control('offretele_id', ['options' => $offreteles, 'empty' => true]);
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
