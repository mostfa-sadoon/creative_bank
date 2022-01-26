@extends('admin_temp')
@section('content')  
    @foreach($suggestions as $suggestion)
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-start">
                         <a href="{{route('profile.show',$suggestion->user->id)}}">{{$suggestion->user->name}}</a>
                    </div>
                    <blockquote class="blockquote mb-0">
                    <p>{{$suggestion->suggestion}}</p>
                    </blockquote>
                </div>
           </div>
    @endforeach
       <div class="d-flex justify-content-center">
            {{ $suggestions->links('vendor.pagination.custom') }}
        </div>
@endsection