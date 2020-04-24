<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Opportunity $opportunity
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Opportunity'), ['action' => 'edit', $opportunity->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Opportunity'), ['action' => 'delete', $opportunity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunity->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Opportunities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Opportunity'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="opportunities view content">
            <h3><?= h($opportunity->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($opportunity->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($opportunity->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($opportunity->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($opportunity->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($opportunity->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Flowers') ?></h4>
                <?php if (!empty($opportunity->flowers)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Opportunity Id') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Quantity') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($opportunity->flowers as $flowers) : ?>
                        <tr>
                            <td><?= h($flowers->id) ?></td>
                            <td><?= h($flowers->name) ?></td>
                            <td><?= h($flowers->opportunity_id) ?></td>
                            <td><?= h($flowers->price) ?></td>
                            <td><?= h($flowers->quantity) ?></td>
                            <td><?= h($flowers->created) ?></td>
                            <td><?= h($flowers->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Flowers', 'action' => 'view', $flowers->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Flowers', 'action' => 'edit', $flowers->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flowers', 'action' => 'delete', $flowers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flowers->id)]) ?>
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
