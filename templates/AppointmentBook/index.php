<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AppointmentBook[]|\Cake\Collection\CollectionInterface $appointmentBook
 */
?>
<div class="appointmentBook index content">
    <?= $this->Html->link(__('Novo Contato'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Agenda de Contatos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th class="actions"><?= __('Menu de Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointmentBook as $appointmentBook): ?>
                <tr>
                    <td><?= $this->Number->format($appointmentBook->id) ?></td>
                    <td><?= h($appointmentBook->name) ?></td>
                    <td><?= h($appointmentBook->email) ?></td>
                    <td><?= h($appointmentBook->phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $appointmentBook->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $appointmentBook->id]) ?>
                        <?= $this->Form->postLink(__('Apagar'), ['action' => 'delete', $appointmentBook->id], ['confirm' => __('Deseja realmente deletar ' . $appointmentBook->name . ' dos seus contatos?', $appointmentBook->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div>
</div>
