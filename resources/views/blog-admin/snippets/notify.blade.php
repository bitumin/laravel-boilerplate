
<?php $data = session()->get('notify') ?>
<div id="notify" class="fixed-to-top">
    @include('admin.widgets.alert', ['class'=>$data[0], 'dismissable'=>true, 'message'=> $data[1], 'icon'=> 'check'])
</div>