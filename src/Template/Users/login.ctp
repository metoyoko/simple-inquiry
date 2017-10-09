<style type="text/css">
	fieldset div label {
		color: #EEE;
	}
	button {
		color: #444;
		background: rgba(110,110,110,.1);
	}
</style>
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset style="margin-top: 100px; background: #1f6c97;border-radius: 10px;">
        <legend style="text-decoration: none;border:1px solid #1f6c97; border-radius: 10px;text-align: center;"><?= __('Mariweb Vessel Finder') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>
</div>
<div class="col-md-3">