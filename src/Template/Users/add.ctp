<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Profile Meis'), ['controller' => 'ProfileMeis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Profile Mei'), ['controller' => 'ProfileMeis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Usuário') ?></legend>
        <?php
            
            echo $this->Form->control('Nome');
            echo $this->Form->control('email');
            echo $this->Form->control('Senha');
            echo $this->Form->control('Confirmar Senha',['type'=>'password']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>