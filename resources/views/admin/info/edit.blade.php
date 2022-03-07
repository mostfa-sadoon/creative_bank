@extends('admin_temp')
@section('content') 
<div class="row">
    <div class="col-sm-12">
        <div class="card">
                <h4 class="card-title">{{trans('admin.edit')}} {{trans('admin.contact_info')}}</h4>

                <form class="form" method="POST" action="{{route('info.update')}}" >
                    @csrf
                    <input type="hidden" name="id" value="{{$info->id}}" >
                    <div class="form-group row">
                        <label for="example-email-input" class="col-2 col-form-label">{{trans('admin.email')}}</label>
                        <div class="col-10">
                            <input class="form-control" type="email" name="email" value="{{$info->email}}" id="example-email-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-tel-input" class="col-2 col-form-label">{{trans('admin.phone')}}</label>
                        <div class="col-10">
                            <input class="form-control" type="tel" name="phone" value="{{$info->phone}}" id="example-tel-input" required>
                        </div>
                    </div>
                    <div class="form-group m-t-40 row">
                        <label for="example-text-input" class="col-2 col-form-label">{{trans('admin.address')}}</label>
                        <div class="col-10">
                            <input class="form-control" type="text" name = "address" value="{{$info->address}}" id="example-text-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-2 col-form-label">Facebook</label>
                        <div class="col-10">
                            <input class="form-control" type="url" name="facebook" value="http://{{$info->facebook}}" id="example-url-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-2 col-form-label">Instagram</label>
                        <div class="col-10">
                            <input class="form-control" type="url" name="instagram" value="http://{{$info->instagram}}" id="example-url-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-2 col-form-label">Twitter</label>
                        <div class="col-10">
                            <input class="form-control" type="url" name="tweeter" value="http://{{$info->tweeter}}" id="example-url-input" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-url-input" class="col-2 col-form-label">Youtube</label>
                        <div class="col-10">
                            <input class="form-control" type="url" name="youtube" value="http://{{$info->youtube}}" id="example-url-input" required>
                        </div>
                    </div>
                <button class="btn btn-info btn-sm pull-right collapsed" type="submit"> {{trans('admin.edit')}} </button>

                </form>
            </div>
        </div>
</div>
@endsection