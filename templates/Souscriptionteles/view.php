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
            <?= $this->Html->link(__('Edit Souscriptiontele'), ['action' => 'edit', $souscriptiontele->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Souscriptiontele'), ['action' => 'delete', $souscriptiontele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptiontele->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Souscriptionteles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Souscriptiontele'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="souscriptionteles view content">
            <h3><?= h($souscriptiontele->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Offretele') ?></th>
                    <td><?= $souscriptiontele->has('offretele') ? $this->Html->link($souscriptiontele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $souscriptiontele->offretele->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $souscriptiontele->has('client') ? $this->Html->link($souscriptiontele->client->name, ['controller' => 'Clients', 'action' => 'view', $souscriptiontele->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($souscriptiontele->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($souscriptiontele->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($souscriptiontele->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
