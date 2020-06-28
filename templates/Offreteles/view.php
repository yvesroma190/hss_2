<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Offretele $offretele
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Offretele'), ['action' => 'edit', $offretele->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Offretele'), ['action' => 'delete', $offretele->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offretele->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Offreteles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Offretele'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="offreteles view content">
            <h3><?= h($offretele->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($offretele->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prix') ?></th>
                    <td><?= h($offretele->prix) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($offretele->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($offretele->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($offretele->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($offretele->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Elementteles') ?></h4>
                <?php if (!empty($offretele->elementteles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Offretele Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offretele->elementteles as $elementteles) : ?>
                        <tr>
                            <td><?= h($elementteles->id) ?></td>
                            <td><?= h($elementteles->name) ?></td>
                            <td><?= h($elementteles->created) ?></td>
                            <td><?= h($elementteles->modified) ?></td>
                            <td><?= h($elementteles->offretele_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Elementteles', 'action' => 'view', $elementteles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Elementteles', 'action' => 'edit', $elementteles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Elementteles', 'action' => 'delete', $elementteles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $elementteles->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Souscriptionteles') ?></h4>
                <?php if (!empty($offretele->souscriptionteles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Offretele Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($offretele->souscriptionteles as $souscriptionteles) : ?>
                        <tr>
                            <td><?= h($souscriptionteles->id) ?></td>
                            <td><?= h($souscriptionteles->offretele_id) ?></td>
                            <td><?= h($souscriptionteles->client_id) ?></td>
                            <td><?= h($souscriptionteles->created) ?></td>
                            <td><?= h($souscriptionteles->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Souscriptionteles', 'action' => 'view', $souscriptionteles->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptionteles', 'action' => 'edit', $souscriptionteles->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptionteles', 'action' => 'delete', $souscriptionteles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptionteles->id)]) ?>
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
