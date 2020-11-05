
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Iniciar sesión</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('Usuario', ['required' => true]) ?>
        <?= $this->Form->control('Contraseña', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

</div>