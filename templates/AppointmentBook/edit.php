<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AppointmentBook $appointmentBook
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Menu de Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Apagar'),
                ['action' => 'delete', $appointmentBook->id],
                ['confirm' => __('Deseja realmente deletar ' . $appointmentBook->name . ' dos seus contatos?', $appointmentBook->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Contatos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appointmentBook form content">
            <?= $this->Form->create($appointmentBook) ?>
            <fieldset>
                <legend><?= __('Editar Contato') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
