<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptionsmart[]|\Cake\Collection\CollectionInterface $souscriptionsmarts
 */
?>
<div class="souscriptionsmarts index content">
    <?= $this->Html->link(__('New Souscriptionsmart'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Souscriptionsmarts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('offresmart_id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($souscriptionsmarts as $souscriptionsmart): ?>
                <tr>
                    <td><?= $this->Number->format($souscriptionsmart->id) ?></td>
                    <td><?= $souscriptionsmart->has('offresmart') ? $this->Html->link($souscriptionsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $souscriptionsmart->offresmart->id]) : '' ?></td>
                    <td><?= $souscriptionsmart->has('client') ? $this->Html->link($souscriptionsmart->client->name, ['controller' => 'Clients', 'action' => 'view', $souscriptionsmart->client->id]) : '' ?></td>
                    <td><?= h($souscriptionsmart->created) ?></td>
                    <td><?= h($souscriptionsmart->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $souscriptionsmart->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $souscriptionsmart->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $souscriptionsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionsmart->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
