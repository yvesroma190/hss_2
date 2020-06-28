<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Souscriptiontele[]|\Cake\Collection\CollectionInterface $souscriptionteles
 */
?>
<div class="souscriptionteles index content">
    <?= $this->Html->link(__('New Souscriptiontele'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Souscriptionteles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('offretele_id') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($souscriptionteles as $souscriptiontele): ?>
                <tr>
                    <td><?= $this->Number->format($souscriptiontele->id) ?></td>
                    <td><?= $souscriptiontele->has('offretele') ? $this->Html->link($souscriptiontele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $souscriptiontele->offretele->id]) : '' ?></td>
                    <td><?= $souscriptiontele->has('client') ? $this->Html->link($souscriptiontele->client->name, ['controller' => 'Clients', 'action' => 'view', $souscriptiontele->client->id]) : '' ?></td>
                    <td><?= h($souscriptiontele->created) ?></td>
                    <td><?= h($souscriptiontele->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $souscriptiontele->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $souscriptiontele->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $souscriptiontele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptiontele->id)]) ?>
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
