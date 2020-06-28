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
            <?= $this->Html->link(__('Edit Souscriptionsmart'), ['action' => 'edit', $souscriptionsmart->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Souscriptionsmart'), ['action' => 'delete', $souscriptionsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionsmart->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Souscriptionsmarts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Souscriptionsmart'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="souscriptionsmarts view content">
            <h3><?= h($souscriptionsmart->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Offresmart') ?></th>
                    <td><?= $souscriptionsmart->has('offresmart') ? $this->Html->link($souscriptionsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $souscriptionsmart->offresmart->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $souscriptionsmart->has('client') ? $this->Html->link($souscriptionsmart->client->name, ['controller' => 'Clients', 'action' => 'view', $souscriptionsmart->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($souscriptionsmart->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($souscriptionsmart->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($souscriptionsmart->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
