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
            <?= $this->Html->link(__('Edit Elementsmart'), ['action' => 'edit', $elementsmart->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Elementsmart'), ['action' => 'delete', $elementsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmart->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Elementsmarts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Elementsmart'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="elementsmarts view content">
            <h3><?= h($elementsmart->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($elementsmart->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offresmart') ?></th>
                    <td><?= $elementsmart->has('offresmart') ? $this->Html->link($elementsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $elementsmart->offresmart->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($elementsmart->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($elementsmart->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($elementsmart->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
