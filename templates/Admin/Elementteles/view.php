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
            <?= $this->Html->link(__('Edit Elementtele'), ['action' => 'edit', $elementtele->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Elementtele'), ['action' => 'delete', $elementtele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementtele->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Elementteles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Elementtele'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="elementteles view content">
            <h3><?= h($elementtele->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($elementtele->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Offretele') ?></th>
                    <td><?= $elementtele->has('offretele') ? $this->Html->link($elementtele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $elementtele->offretele->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($elementtele->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($elementtele->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($elementtele->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
