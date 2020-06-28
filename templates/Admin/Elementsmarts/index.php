<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementsmart[]|\Cake\Collection\CollectionInterface $elementsmarts
 */
?>
<div class="elementsmarts index content">
    <?= $this->Html->link(__('New Elementsmart'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Elementsmarts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('offresmart_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($elementsmarts as $elementsmart): ?>
                <tr>
                    <td><?= $this->Number->format($elementsmart->id) ?></td>
                    <td><?= h($elementsmart->name) ?></td>
                    <td><?= h($elementsmart->created) ?></td>
                    <td><?= h($elementsmart->modified) ?></td>
                    <td><?= $elementsmart->has('offresmart') ? $this->Html->link($elementsmart->offresmart->name, ['controller' => 'Offresmarts', 'action' => 'view', $elementsmart->offresmart->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $elementsmart->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $elementsmart->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $elementsmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmart->id)]) ?>
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
