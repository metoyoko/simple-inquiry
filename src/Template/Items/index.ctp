<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $items
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php //= __('Actions') ?></li>
        <li><?php //= $this->Html->link(__('New Item'), ['action' => 'add']) ?></li>
        <li><?php //= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?php //= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<style type="text/css">
    body, .container    {
        width: 100%;
        padding: 0px;
        margin: 0px;
    }
    div.input.text input {
        padding: 0px;
        text-indent: 10px;
    }
    div.input.text {
        padding: 0px;
    }

</style>

<?php 
    // echo $this->Form->create(null, ['valueSources' => 'query']);
    // // You'll need to populate $authors in the template from your controller
    // echo $this->Form->input('name');
    // // Match the search param in your table configuration
    // echo $this->Form->input('q');
    // echo $this->Form->button('Filter', ['type' => 'submit']);
    // echo $this->Html->link('Reset', ['action' => 'index']);
    // echo $this->Form->end();
?>


<div class="search-bar box" style="left:-510px;top:0px;">
        <label style="width: 100%; padding:10px;background: #DDD; margin-bottom: 10px">SEARCH BAR </label><span id="closeBar" class="pull-right" style="margin-top: -50px;margin-right: 4px; color:#888">X</span>
        <?= $this->Form->create(null, ['valueSources' => 'query']) ?>
        
        <?= $this->Form->input('aton_type_like',['label'=>'Aton Type','class'=>'search-input']) ?>
        <?= $this->Form->input('class_like',['label'=>'Class','class'=>'search-input']) ?>
        <?= $this->Form->input('type_of_ship_like',['label'=>'Type of Ship','class'=>'search-input']) ?>
        <?= $this->Form->input('mmsi_like',['label'=>'MMSI','class'=>'search-input']) ?>
        <?= $this->Form->input('imo_number_like',['label'=>'IMO Number','class'=>'search-input']) ?>
        <?= $this->Form->input('call_sign_like',['label'=>'Call Sign','class'=>'search-input']) ?>
        <?= $this->Form->input('name_like',['label'=>'Name','class'=>'search-input']) ?>
        <?= $this->Form->input('destination_like',['label'=>'Destination','class'=>'search-input']) ?>
        <?= $this->Form->input('electronic_fixing_device_like',['label'=>'Electronic Fixing Device','class'=>'search-input']) ?>
        <?= $this->Form->input('eta_like',['label'=>'ETA','class'=>'search-input']) ?>
        <?= $this->Form->input('max_draught_like',['label'=>'Max Draught','class'=>'search-input']) ?>
        <?= $this->Form->input('latitude_like',['label'=>'Latitude','class'=>'search-input']) ?>
        <?= $this->Form->input('longitude_like',['label'=>'Longitude','class'=>'search-input']) ?>
        <?= $this->Form->input('sog_like',['label'=>'Sog','class'=>'search-input']) ?>
        <?= $this->Form->input('rot_like',['label'=>'Rot','class'=>'search-input']) ?>
        <?= $this->Form->input('cog_like',['label'=>'Cog','class'=>'search-input']) ?>
        <?= $this->Form->input('true_heading_like',['label'=>'True Heading','class'=>'search-input']) ?>
        <?= $this->Form->input('navigation_status_like',['label'=>'Navigation Status','class'=>'search-input']) ?>
        <?= $this->Form->input('dimension_a_like',['label'=>'Dimension A','class'=>'search-input']) ?>
        <?= $this->Form->input('dimension_b_like',['label'=>'Dimension B','class'=>'search-input']) ?>
        <?= $this->Form->input('dimension_c_like',['label'=>'Dimension C','class'=>'search-input']) ?>
        <?= $this->Form->input('dimension_d_like',['label'=>'Dimension D','class'=>'search-input']) ?>
        <?= $this->Form->input('msg_type_like',['label'=>'Msg Type','class'=>'search-input']) ?>
        <?= $this->Form->input('port_like',['label'=>'Port','class'=>'search-input']) ?>
        <?= $this->Form->input('date_time_stamp_like',['label'=>'Date Time Stamp','class'=>'search-input']) ?>

        <!-- <div style="margin-top: 10px;"><button>Search</button></div> -->
        <?= $this->Form->button('Search', ['type' => 'submit']) ?>
        <?= $this->Html->link('Reset', ['action' => 'index']) ?>
        <?= $this->Form->end() ?>
    
</div>
<div class="items index col-md-12 columns content" style="color:#1f6c97">
    <div style="background: #FFF;width: 100%; padding-left: 20px; padding-right: 20px">
        <!-- <span style="font-size: 20px;margin-right: 20px;"><?php //= __('Mariweb List') ?></span> -->
<!--         <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span>
        <span><span>Aton Type: </span><input></span> -->
    </div>

    <div id="searched" class="pull-right small-box-container hidden">Searched item: </div>
    <div id="hiddenColumn" class="pull-left small-box-container" style="opacity: 0; height: 20px;">Show Hidden : </div>










<?php if(count($items) != 0){ ?>

<div class="col-md-12 flexcroll" style="overflow: auto;">
<div class="table-container" style="">
    <table id="mariwebList" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="width: 100px!important"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" style="width: 140px!important"><?= $this->Paginator->sort('aton_type') ?></th>
                <th scope="col" style="width: 130px!important"><?= $this->Paginator->sort('class') ?></th>
                <th scope="col" style="width: 160px!important"><?= $this->Paginator->sort('type_of_ship') ?></th>
                <th scope="col" style="width: 160px!important"><?= $this->Paginator->sort('mmsi') ?></th>
                <th scope="col" style="width: 160px!important"><?= $this->Paginator->sort('imo_number') ?></th>
                <th scope="col" style="width: 160px!important"><?= $this->Paginator->sort('call_sign') ?></th>
                <th scope="col" style="width: 160px!important"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" style="width: 160px!important"><?= $this->Paginator->sort('destination') ?></th>
                <th scope="col" style="width: 230px!important"><?= $this->Paginator->sort('electronic_fixing_device') ?></th>
                <th scope="col" style="width: 110px!important"><?= $this->Paginator->sort('eta') ?></th>
                <th scope="col" style="width: 160px!important"><?= $this->Paginator->sort('max_draught') ?></th>
                <th scope="col" style="width: 130px!important"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col" style="width: 130px!important"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col" style="width: 130px!important"><?= $this->Paginator->sort('sog') ?></th>
                <th scope="col" style="width: 130px!important"><?= $this->Paginator->sort('rot') ?></th>
                <th scope="col" style="width: 130px!important"><?= $this->Paginator->sort('cog') ?></th>
                <th scope="col" style="width: 160px!important"><?= $this->Paginator->sort('true_heading') ?></th>
                <th scope="col" style="width: 180px!important"><?= $this->Paginator->sort('navigation_status') ?></th>
                <th scope="col" style="width: 150px!important"><?= $this->Paginator->sort('dimension_a') ?></th>
                <th scope="col" style="width: 150px!important"><?= $this->Paginator->sort('dimension_b') ?></th>
                <th scope="col" style="width: 150px!important"><?= $this->Paginator->sort('dimension_c') ?></th>
                <th scope="col" style="width: 150px!important"><?= $this->Paginator->sort('dimension_d') ?></th>
                <th scope="col" style="width: 130px!important"><?= $this->Paginator->sort('msg_type') ?></th>
                <th scope="col" style="width: 130px!important"><?= $this->Paginator->sort('port') ?></th>
                <th scope="col" style="width: 180px!important"><?= $this->Paginator->sort('date_time_stamp') ?></th>
                <!-- <th scope="col"><?php //= $this->Paginator->sort('user_id') ?></th> -->
                <!-- <th scope="col"><?php //= $this->Paginator->sort('created') ?></th> -->
                <!-- <th scope="col" class="actions"><?php //= __('Actions') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
            <tr>
                <td><?= $this->Number->format($item->id) ?></td>
                <td><?= h($item->aton_type) ?></td>
                <td><?= h($item->class) ?></td>
                <td><?= h($item->type_of_ship) ?></td>
                <td><?= h($item->mmsi) ?></td>
                <td><?= h($item->imo_number) ?></td>
                <td><?= h($item->call_sign) ?></td>
                <td><?= h($item->name) ?></td>
                <td><?= h($item->destination) ?></td>
                <td><?= h($item->electronic_fixing_device) ?></td>
                <td><?= h($item->eta) ?></td>
                <td><?= h($item->max_draught) ?></td>
                <td><?= h($item->latitude) ?></td>
                <td><?= h($item->longitude) ?></td>
                <td><?= h($item->sog) ?></td>
                <td><?= h($item->rot) ?></td>
                <td><?= h($item->cog) ?></td>
                <td><?= h($item->true_heading) ?></td>
                <td><?= h($item->navigation_status) ?></td>
                <td><?= h($item->dimension_a) ?></td>
                <td><?= h($item->dimension_b) ?></td>
                <td><?= h($item->dimension_c) ?></td>
                <td><?= h($item->dimension_d) ?></td>
                <td><?= h($item->msg_type) ?></td>
                <td><?= h($item->port) ?></td>
                <td><?= h($item->date_time_stamp) ?></td>
          <!--       <td><?php //= $item->has('user') ? $this->Html->link($item->user->id, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
                <td><?php //= h($item->created) ?></td> -->
<!--                 <td class="actions">
                    <?php //= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                    <?php //= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                    <?php //= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
                </td> -->
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

        <span class="pull-left" style="font-size: 12px; margin-left: 10px"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></span>
    <div class="paginator">
        <ul class="pagination pull-left">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
<!--         <p><?php//= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p> -->
    </div>
<?php }else{ ?>
<h1 style="margin-left: 20px;">No Records Found!</h1>
<?php } ?>
</div>
<!-- <div class="box" style="right: 0px">sss</div> -->
<script type="text/javascript">
    $(document).ready(function(){
        window.history.forward(1);
        $('#mariwebList th').each(function(i){
            // alert('hey');
            $(this).append('<div class="pull-right small-button">hide</div>');
            $('#hiddenColumn').append('<span class="button hideThis hidden" id="'+i+'">'+$(this).text().slice(0,-4)+'</span>');
        });
        $('body').on('click','.hideThis', function(){
            
            currentIndex = $(this).attr('id');
            $('th:eq('+currentIndex+')').removeClass('hidden');
            $('tbody tr').each(function(){
                $(this).children('td:eq('+currentIndex+')').removeClass('hidden');

            });
            $('#'+currentIndex).addClass('hidden');
            // alert($(this).attr('id'));

        })
        $('table').on('click','.small-button',function(){
            $('#hiddenColumn').css('opacity',1);
            $(this).parents('th').addClass('hidden');
            thIndex =$(this).parents('th').index();
            $('tbody tr').each(function(){
                $(this).children('td:eq('+thIndex+')').addClass('hidden');
                $('#'+thIndex).removeClass('hidden');
                // alert($(this).children('td:eq(1)').text());
            });
        })
        $('.item-inquiry').addClass('active');
        $('.search-input').each(function(i){
            // alert($(this).attr('class'));
            $('#hiddenColumn').append(
                    '<span class="hidden">'+$(this).siblings('label').text()+'</span>'
                );
            
            if($(this).val().length != 0){
                $('#searched').removeClass('hidden');
                // alert($(this).siblings('label').text());
                $('#searched').append(
                    '<span>'+$(this).siblings('label').text()+' : '+$(this).val() +'</span>'

                    );
                // alert($(this).val());
                // console.log($(this).val().length);
            }
        })

        // $('.search-bar').css('left','-510px');
        $('#closeBar').on('click', function(){
            $('.search-bar').animate({left: '-510px'});
        })
        $('#showBar').on('click', function(){
            $('.search-bar').animate({left: '0px'});
        })
        // alert('hey');
    });

</script>