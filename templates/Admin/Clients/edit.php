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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Edit Client') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('cel');
                    echo $this->Form->control('tel');
                    echo $this->Form->control('email');
                    echo $this->Form->control('web');
                    echo $this->Form->control('bp');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('localisation_site');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
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
                <a href=<?= $this->Url->build(['controller'=>'Clients', 'action'=>'index']) ?> class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-list"></i>
                    </span>
                    <span class="text">Liste des clients</span>
                </a>
                <?= $this->Form->postLink(
                __('Supprimer cet client'),
                ['action' => 'delete', $client->id],
                ['confirm' => __('Voulez-vous supprimer cet client? # {0}?', $client->id), 'class' => 'btn btn-danger']) ?>
            </div>
        </div>
    <hr class="sidebar-divider d-none d-md-block">

    <div class="card shadow mb-6">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Modifier le client</h6>
        </div>
        <div class="card-body">
            <?= $this->Form->create($client) ?>
                <div class="form-group">
                    <?= $this->Form->control('name', ['type'=>'text', 'class'=>'form-control', 'label'=>'Nom et prénoms:']);?>
                </div> 
                <div class="form-group">
                    <?= $this->Form->control('cel', ['type'=>'text', 'class'=>'form-control', 'label'=>'N° Cellulaire:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('tel', ['type'=>'text', 'class'=>'form-control', 'label'=>'N° Téléphone Fixe:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('email', ['type'=>'email', 'class'=>'form-control', 'label'=>'Email:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('web', ['type'=>'text', 'class'=>'form-control', 'label'=>'Site Web:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('bp', ['type'=>'text', 'class'=>'form-control', 'label'=>'Boîte postale:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('adresse', ['type'=>'text', 'class'=>'form-control', 'label'=>'Adresse:']);?>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('localisation_site', ['type'=>'textarea', 'class'=>'form-control', 'label'=>'Adresse du site à sécuriser:']);?>
                </div>

                <button class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">Modifier</span>
                </button>

                <button class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-times-circle "></i>
                </span>
                <span class="text">Annuler</span>
                </button>
            <?= $this->Form->end() ?>
        </div>
    </div>


</div>