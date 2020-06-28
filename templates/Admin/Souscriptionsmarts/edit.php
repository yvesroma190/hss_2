<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptionsmart $souscriptionsmart
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $souscriptionsmart->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionsmart->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Souscriptionsmarts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="souscriptionsmarts form content">
            <?= $this->Form->create($souscriptionsmart) ?>
            <fieldset>
                <legend><?= __('Edit Souscriptionsmart') ?></legend>
                <?php
                    echo $this->Form->control('offresmart_id', ['options' => $offresmarts, 'empty' => true]);
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
