<div class="form content">
 <h3>Adicionar um usuário</h3>
 <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adicionar Novo Contato') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>