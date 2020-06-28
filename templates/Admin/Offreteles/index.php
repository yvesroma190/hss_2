<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offretele[]|\Cake\Collection\CollectionInterface $offreteles
 */
?>
<div class="offreteles index content">
    <?= $this->Html->link(__('New Offretele'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Offreteles') ?></h3>
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
                <?php foreach ($offreteles as $offretele): ?>
                <tr>
                    <td><?= $this->Number->format($offretele->id) ?></td>
                    <td><?= h($offretele->name) ?></td>
                    <td><?= h($offretele->prix) ?></td>
                    <td><?= h($offretele->created) ?></td>
                    <td><?= h($offretele->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $offretele->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offretele->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offretele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offretele->id)]) ?>
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
