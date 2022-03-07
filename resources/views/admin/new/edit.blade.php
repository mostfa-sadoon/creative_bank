@extends('admin_temp')
@section('styles')
<link href="{{asset('assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/dropify/dist/css/dropify.min.css')}}">
@endsection
@section('content')
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{trans('admin.creative_bank')}}</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">add new</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">new</a></li>
                        <li class="breadcrumb-item active">Dashboard 2</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->

                <form action="{{route('news.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$new->id}}">
                    <div class="row">
                        <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">upload img</h4>
                                        <input type="file" name="img" id="input-file-now-custom-1" class="dropify" data-default-file="{{$new->img}}" />
                                    </div>
                                    @if ($errors->has('img'))
                                        <span class="text-danger">{{ $errors->first('img')}}</span>
                                    @endif
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">header in arabic</h4>
                                        <input type="text" value="{{$new->header_ar}}" name="header_ar" class="form-control" />
                                    </div>
                                    @if ($errors->has('header_ar'))
                                        <span class="text-danger">{{ $errors->first('header_ar')}}</span>
                                    @endif
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">description in arabic</h4>
                                        <textarea type="text" name="desc_ar" class="form-control">{{$new->desc_ar}}</textarea>
                                    </div>
                                    @if ($errors->has('desc_ar'))
                                        <span class="text-danger">{{ $errors->first('desc_ar')}}</span>
                                    @endif
                                </div>
                                   <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">news in arabic</h4>
                                                <textarea id="mymce"   name="news_ar">{{$new->news_ar}}</textarea>
                                                @if ($errors->has('news_ar'))
                                                    <span class="text-danger">{{ $errors->first('news_ar')}}</span>
                                                @endif
                                        </div>
                                    </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">header in english</h4>
                                        <input type="text" value="{{$new->header_en}}" name="header_en" class="form-control" />
                                    </div>
                                    @if ($errors->has('header_en'))
                                        <span class="text-danger">{{ $errors->first('header_en')}}</span>
                                    @endif
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">description in english</h4>
                                        <textarea type="text"  name="desc_en" class="form-control">{{$new->desc_en}}</textarea>
                                    </div>
                                    @if ($errors->has('desc_en'))
                                        <span class="text-danger">{{ $errors->first('desc_en')}}</span>
                                    @endif
                                </div>
                                   <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">news in arabic</h4>
                                                <textarea  id="mymce"  name="news_en">{{$new->news_en}}</textarea>
                                                @if ($errors->has('news_en'))
                                                    <span class="text-danger">{{ $errors->first('news_en')}}</span>
                                                @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control"   name="category_id" id="exampleFormControlSelect1">
                                            <option value="{{$category->id}}" selected >{{$category->name}}</option>
                                            @foreach ($newcategories as $NewCategory)
                                                @if ($category->id != $NewCategory->id)
                                                   <option value="{{$NewCategory->id}}">{{$NewCategory->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                     </div>

                                <div class="d-flex justify-content-center">
                                   <input type="submit" class="btn btn-success" value="{{trans('admin.edit')}}">
                                </div>
                        </div>
                    </div>
                </form>
@endsection
@section('scripts')
    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{asset('assets/plugins/tinymce/tinymce.min.js')}}"></script>
    <script>
    $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Plugins for this page -->
    <!-- ============================================================== -->
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
@endsection
