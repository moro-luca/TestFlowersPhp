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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $opportunity->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $opportunity->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Opportunities'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="opportunities form content">
            <?= $this->Form->create($opportunity) ?>
            <fieldset>
                <legend><?= __('Edit Opportunity') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
