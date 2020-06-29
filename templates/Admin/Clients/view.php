<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<!--<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients view content">
            <h3><?= h($client->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($client->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cel') ?></th>
                    <td><?= h($client->cel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($client->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($client->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Web') ?></th>
                    <td><?= h($client->web) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bp') ?></th>
                    <td><?= h($client->bp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($client->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($client->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($client->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($client->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Localisation Site') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->localisation_site)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Commentaires') ?></h4>
                <?php if (!empty($client->commentaires)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Article Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->commentaires as $commentaires) : ?>
                        <tr>
                            <td><?= h($commentaires->id) ?></td>
                            <td><?= h($commentaires->comment) ?></td>
                            <td><?= h($commentaires->article_id) ?></td>
                            <td><?= h($commentaires->client_id) ?></td>
                            <td><?= h($commentaires->created) ?></td>
                            <td><?= h($commentaires->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commentaires', 'action' => 'view', $commentaires->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commentaires', 'action' => 'edit', $commentaires->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commentaires', 'action' => 'delete', $commentaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaires->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Comptes') ?></h4>
                <?php if (!empty($client->comptes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Login') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->comptes as $comptes) : ?>
                        <tr>
                            <td><?= h($comptes->id) ?></td>
                            <td><?= h($comptes->login) ?></td>
                            <td><?= h($comptes->password) ?></td>
                            <td><?= h($comptes->created) ?></td>
                            <td><?= h($comptes->modified) ?></td>
                            <td><?= h($comptes->client_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Comptes', 'action' => 'view', $comptes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Comptes', 'action' => 'edit', $comptes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comptes', 'action' => 'delete', $comptes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comptes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Souscriptionsmarts') ?></h4>
                <?php if (!empty($client->souscriptionsmarts)) : ?>
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
                        <?php foreach ($client->souscriptionsmarts as $souscriptionsmarts) : ?>
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
            <div class="related">
                <h4><?= __('Related Souscriptionteles') ?></h4>
                <?php if (!empty($client->souscriptionteles)) : ?>
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
                        <?php foreach ($client->souscriptionteles as $souscriptionteles) : ?>
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
</div>-->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Gestion des clients</h1>
    </div>
    <hr class="sidebar-divider d-none d-md-block">

        <!-- Sous Menu -->
        <div class="row">
            <div class="lg-12">
            <?= $this->Html->link(__('Liste des Clients'), ['action' => 'index'], ['class' => 'btn btn-info']) ?>
            <?= $this->Html->link(__('Ajouter un Client'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $client->id], ['class' => 'btn btn-success']) ?>
            <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $client->id], ['confirm' => __('Voulez-vous supprimer le client? # {0}?', $client->id), 'class' => 'btn btn-danger']) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= h($client->name) ?></h6>
        </div>
        <div class="card-body">
        <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($client->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cel') ?></th>
                    <td><?= h($client->cel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tel') ?></th>
                    <td><?= h($client->tel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($client->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Web') ?></th>
                    <td><?= h($client->web) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bp') ?></th>
                    <td><?= h($client->bp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($client->adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($client->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($client->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($client->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Localisation Site') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->localisation_site)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Commentaires') ?></h4>
                <?php if (!empty($client->commentaires)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Comment') ?></th>
                            <th><?= __('Article Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->commentaires as $commentaires) : ?>
                        <tr>
                            <td><?= h($commentaires->id) ?></td>
                            <td><?= h($commentaires->comment) ?></td>
                            <td><?= h($commentaires->article_id) ?></td>
                            <td><?= h($commentaires->client_id) ?></td>
                            <td><?= h($commentaires->created) ?></td>
                            <td><?= h($commentaires->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Commentaires', 'action' => 'view', $commentaires->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Commentaires', 'action' => 'edit', $commentaires->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Commentaires', 'action' => 'delete', $commentaires->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaires->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Comptes') ?></h4>
                <?php if (!empty($client->comptes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Login') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->comptes as $comptes) : ?>
                        <tr>
                            <td><?= h($comptes->id) ?></td>
                            <td><?= h($comptes->login) ?></td>
                            <td><?= h($comptes->password) ?></td>
                            <td><?= h($comptes->created) ?></td>
                            <td><?= h($comptes->modified) ?></td>
                            <td><?= h($comptes->client_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Comptes', 'action' => 'view', $comptes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Comptes', 'action' => 'edit', $comptes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comptes', 'action' => 'delete', $comptes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comptes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Souscriptions') ?></h4>
                <?php if (!empty($client->souscriptions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Offre Id') ?></th>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->souscriptions as $souscriptions) : ?>
                        <tr>
                            <td><?= h($souscriptions->id) ?></td>
                            <td><?= h($souscriptions->offre_id) ?></td>
                            <td><?= h($souscriptions->client_id) ?></td>
                            <td><?= h($souscriptions->created) ?></td>
                            <td><?= h($souscriptions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Souscriptions', 'action' => 'view', $souscriptions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Souscriptions', 'action' => 'edit', $souscriptions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Souscriptions', 'action' => 'delete', $souscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $souscriptions->id)]) ?>
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