<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offresmart[]|\Cake\Collection\CollectionInterface $offresmarts
 */
?>
<div class="offresmarts index content">
    <?= $this->Html->link(__('New Offresmart'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Offresmarts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('prix') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($offresmarts as $offresmart): ?>
                <tr>
                    <td><?= $this->Number->format($offresmart->id) ?></td>
                    <td><?= h($offresmart->name) ?></td>
                    <td><?= h($offresmart->prix) ?></td>
                    <td><?= h($offresmart->created) ?></td>
                    <td><?= h($offresmart->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $offresmart->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offresmart->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offresmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresmart->id)]) ?>
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
