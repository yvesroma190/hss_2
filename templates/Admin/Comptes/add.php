<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Compte $compte
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Comptes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="comptes form content">
            <?= $this->Form->create($compte) ?>
            <fieldset>
                <legend><?= __('Add Compte') ?></legend>
                <?php
                    echo $this->Form->control('login');
                    echo $this->Form->control('password');
                    echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
