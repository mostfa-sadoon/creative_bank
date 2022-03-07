@extends('admin_temp')
@section('content') 
<div class="col-lg-6 col-md-6">
    
                        <div class="card">
                            
                        <div class="card-body">
                            
                            <h4 class="card-title"></span> {{trans('admin.contact_us')}}</h4>
                            
                            <ul class="feeds">
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-envelope"></i></div> {{$info->email}} </li>
                                <li>
                                    <div class="bg-light-success"><i class="ti-headphone-alt"></i></div> {{$info->phone}}</li>
                                <li>
                                    <div class="bg-light-warning"><i class="ti-location-pin"></i></div> {{$info->address}}</li>
                                <li>
                                    <div class="bg-light-danger"><i class="ti-facebook"></i></div> {{$info->facebook}}</li>
                                <li>
                                    <div class="bg-light-inverse"><i class="ti-twitter"></i></div> {{$info->tweeter}}</li>
                                <li>
                                    <div class="bg-light-danger"><i class="ti-instagram"></i></div> {{$info->instagram}}</li>
                                <li>
                                    <div class="bg-light-inverse"><i class="ti-youtube"></i></div> {{$info->youtube}}</li>
                                <li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="d-flex justify-content-end">
              <a class="btn btn-success text-white" href="{{route('info.edit',$info->id)}}">{{trans('admin.edit')}}</a>
          </div>
                    @endsection