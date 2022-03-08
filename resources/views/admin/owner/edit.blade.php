@extends('admin_temp')
@section('styles')
<link rel="stylesheet" href="{{asset('assets/plugins/dropify/dist/css/dropify.min.css')}}">

<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('../assets/plugins/dropify/dist/css/dropify.min.css')}}">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- You can change the theme colors from here -->
<link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
@endsection

@section('content')
<!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.owner')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.owner')}}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{trans('admin.dashboard')}}</a></li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
    <!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<form action="{{route('owner.update')}}" method="post" enctype='multipart/form-data'>
 @csrf
 <input type="hidden" name="id" value="{{$owner->id}}">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">File owner</h4> -->
                    <input type="file" name="img" id="input-file-now-custom-3" class="dropify" data-height="500" data-default-file="{{$owner->img}}" />
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <textarea class="form-control" name="desc_ar" id="exampleFormControlTextarea1" rows="13" >
                {{$owner->desc_ar}}
            </textarea>
            <textarea class="form-control"  name="desc_en" id="exampleFormControlTextarea1" rows="13" >
                {{$owner->desc_en}}
            </textarea>
        </div>
    </div>


    <div class="d-flex justify-content-center">
        <input type="submit" class="btn btn-success" value="{{trans('admin.edit')}}">
    </div>
</form>


@endsection
@section('scripts')

    <!-- jQuery file upload -->
    <script src="{{asset('assets/plugins/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });
    </script>

</body>

@endsection
