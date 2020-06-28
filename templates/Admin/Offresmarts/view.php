<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offresmart $offresmart
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Offresmart'), ['action' => 'edit', $offresmart->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Offresmart'), ['action' => 'delete', $offresmart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresmart->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Offresmarts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Offresmart'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offresmarts view content">
            <h3><?= h($offresmart->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($offresmart->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= h($offresmart->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($offresmart->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($offresmart->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($offresmart->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($offresmart->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Elementsmarts') ?></h4>
                <?php if (!empty($offresmart->elementsmarts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Offresmart Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offresmart->elementsmarts as $elementsmarts) : ?>
                        <tr>
                            <td><?= h($elementsmarts->id) ?></td>
                            <td><?= h($elementsmarts->name) ?></td>
                            <td><?= h($elementsmarts->created) ?></td>
                            <td><?= h($elementsmarts->modified) ?></td>
                            <td><?= h($elementsmarts->offresmart_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Elementsmarts', 'action' => 'view', $elementsmarts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Elementsmarts', 'action' => 'edit', $elementsmarts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Elementsmarts', 'action' => 'delete', $elementsmarts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementsmarts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Souscriptionsmarts') ?></h4>
                <?php if (!empty($offresmart->souscriptionsmarts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Offresmart Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offresmart->souscriptionsmarts as $souscriptionsmarts) : ?>
                        <tr>
                            <td><?= h($souscriptionsmarts->id) ?></td>
                            <td><?= h($souscriptionsmarts->offresmart_id) ?></td>
                            <td><?= h($souscriptionsmarts->client_id) ?></td>
                            <td><?= h($souscriptionsmarts->created) ?></td>
                            <td><?= h($souscriptionsmarts->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Souscriptionsmarts', 'action' => 'view', $souscriptionsmarts->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptionsmarts', 'action' => 'edit', $souscriptionsmarts->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptionsmarts', 'action' => 'delete', $souscriptionsmarts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionsmarts->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
