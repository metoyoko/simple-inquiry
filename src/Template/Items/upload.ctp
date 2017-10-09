<div class="col-md-12" style="padding: 20px;">
<div class="col-md-3"></div>
<div class="col-md-6 box" style="background: #EEE; margin-top: 100px">

    <?= $this->Form->create($item, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <?php
            echo $this->Form->control('submittedfile', [
                    'type' => 'file','label'=>'','class'=>'file-upload','accept'=>'.csv'
                ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Html->link('Cancel',['action'=>'index'],['class'=>'button','style'=>'text-decoration:none']) ?>
    <?= $this->Form->end() ?>
</div>
<div class="col-md-3"></div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.item-upload').addClass('active');
    });
</script>