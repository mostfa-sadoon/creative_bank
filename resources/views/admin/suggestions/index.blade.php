@extends('admin_temp')
@section('content')  
    @foreach($contact as $contacts)
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-start">
                        <!-- show -->
                        <a href="{{ route('suggestions.show',$contacts->id) }}">
                         <h4>{{$contacts->subject}}</h4>
                        </a>
                    </div>
                    <blockquote class="blockquote mb-0">
                    <p>{{$contacts->message}}</p>
                    </blockquote>
                </div>
    @endforeach
@endsection
