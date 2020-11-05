<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Product'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="product form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend><?= __('Nuevo Producto') ?></legend>
                <?php
                    echo $this->Form->control('category_id', ['options' => $category]);
                    echo $this->Form->control('descripcion');
                    echo $this->Form->control('precio');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
