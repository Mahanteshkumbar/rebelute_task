
@if(isset ($errors) && count($errors) > 0)
    <div class="alert alert-danger alert-dismissible alert-message">
        <ul>
            @foreach($errors->all() as $error)
                <li class="text-left">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::get('success', false))
    <?php $data = Session::get('success');?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-success alert-dismissible alert-message">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="fa fa-check"></i>
                {{ $msg }}
            </div>
        @endforeach
    @else
        <div class="alert alert-success alert-dismissible alert-message">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="fa fa-check"></i>
            {{ $data }}
        </div>
    @endif
@endif


@section('after-scripts-end')
    <script type="text/javascript">
     $(document).ready(function() {
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-full-width",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
        // toastr.info('Page Loaded!');
        var errors = <?php echo json_encode($errors->all()); ?>;
        for (var i = errors.length - 1; i >= 0; i--) {
            toastr.error(errors[i]);
        };

        var data = <?php echo json_encode(Session::get('success')); ?>;
       // for (var i = data.length - 1; i >= 0; i--) {
        if(data){
            toastr.success(data);
            }
        //};
      });
    </script>
@stop
