<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Elementtele[]|\Cake\Collection\CollectionInterface $elementteles
 */
?>
<div class="elementteles index content">
    <?= $this->Html->link(__('New Elementtele'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Elementteles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('offretele_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($elementteles as $elementtele): ?>
                <tr>
                    <td><?= $this->Number->format($elementtele->id) ?></td>
                    <td><?= h($elementtele->name) ?></td>
                    <td><?= h($elementtele->created) ?></td>
                    <td><?= h($elementtele->modified) ?></td>
                    <td><?= $elementtele->has('offretele') ? $this->Html->link($elementtele->offretele->name, ['controller' => 'Offreteles', 'action' => 'view', $elementtele->offretele->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $elementtele->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $elementtele->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $elementtele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementtele->id)]) ?>
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
