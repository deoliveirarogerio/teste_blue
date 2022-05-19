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
            <?= $this->Html->link(__('Editar Contato'), ['action' => 'edit', $appointmentBook->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Apagar Contato'), ['action' => 'delete', $appointmentBook->id], ['confirm' => __('Deseja realmente deletar ' . $appointmentBook->name . ' dos seus contato?', $appointmentBook->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Contato'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Contato'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appointmentBook view content">
            <h3><?= h($appointmentBook->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($appointmentBook->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('E-mail') ?></th>
                    <td><?= h($appointmentBook->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telefone') ?></th>
                    <td><?= h($appointmentBook->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($appointmentBook->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
