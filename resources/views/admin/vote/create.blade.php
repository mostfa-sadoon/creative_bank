@extends('admin_temp')
@section('styles')
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- page CSS -->
    <link href="{{asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/switchery/dist/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')      
      <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.vote')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">creative bank</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">vote</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">create</a></li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <form action="{{route('vote.store')}}" method="post">
             @csrf
                 <!--/span-->
                 <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">name in arabic of vote</label>
                            <input type="text" name="name_ar" class="form-control " placeholder="name in arabic of vote">
                            @if ($errors->has('name_ar'))
                                <span class="text-danger">{{ $errors->first('name_ar')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">name in english of vote</label>
                            <input type="text" name="name_en" class="form-control " placeholder="name in english of vote">
                            @if ($errors->has('name_en'))
                                <span class="text-danger">{{ $errors->first('name_en')}}</span>
                            @endif
                        </div>
                    </div>
                 <!--/span-->
                 <div class="col-md-12">
                        <div class="form-group">
                            <select class="select2 m-b-10 select2-multiple" name="ideas[]" style="width: 100%" multiple="multiple" data-placeholder="Choose ideas">
                                <optgroup label="ideas">
                                    @foreach($ideas as $idea)
                                    <option value="{{$idea->id}}">{{$idea->name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                            @if ($errors->has('ideas'))
                                <span class="text-danger">{{ $errors->first('ideas')}}</span>
                            @endif
                        </div>  
                 </div>       

                <!--/span-->
                  <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Date of end vote</label>
                            <input type="datetime-local" name="end_vote" class="form-control " placeholder="dd/mm/yyyy">
                            @if ($errors->has('end_vote'))
                                <span class="text-danger">{{ $errors->first('end_vote')}}</span>
                            @endif
                        </div>
                    </div>
                 <!--/span-->
               <input type="submit" class="btn btn-success mt-3"  value="add vote">
            </form>
@endsection
@section('scripts')


    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/switchery/dist/switchery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
    <script>
    jQuery(document).ready(function() {
        // Switchery
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
        $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();
        //Bootstrap-TouchSpin
        $(".vertical-spin").TouchSpin({
            verticalbuttons: true,
            verticalupclass: 'ti-plus',
            verticaldownclass: 'ti-minus'
        });
        var vspinTrue = $(".vertical-spin").TouchSpin({
            verticalbuttons: true
        });
        if (vspinTrue) {
            $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
        }
        $("input[name='tch1']").TouchSpin({
            min: 0,
            max: 100,
            step: 0.1,
            decimals: 2,
            boostat: 5,
            maxboostedstep: 10,
            postfix: '%'
        });
        $("input[name='tch2']").TouchSpin({
            min: -1000000000,
            max: 1000000000,
            stepinterval: 50,
            maxboostedstep: 10000000,
            prefix: '$'
        });
        $("input[name='tch3']").TouchSpin();
        $("input[name='tch3_22']").TouchSpin({
            initval: 40
        });
        $("input[name='tch5']").TouchSpin({
            prefix: "pre",
            postfix: "post"
        });
        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function() {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
        $(".ajax").select2({
            ajax: {
                url: "https://api.github.com/search/repositories",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    // parse the results into the format expected by Select2
                    // since we are using custom formatting functions we do not need to
                    // alter the remote JSON data, except to indicate that infinite
                    // scrolling can be used
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            escapeMarkup: function(markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endsection