@extends('admin_temp')
@section('content')  
    <h3>{{$contact->subject}}</h3>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-start">
                        <!-- show -->
                         <p>{{$contact->email}}</p>
                    </div>
                    <blockquote class="blockquote mb-0">
                    <p>{{$contact->message}}</p>
                    </blockquote>
                </div>
                <form action="{{ route('suggestions.destroy',$contact->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
           </div>
@endsection
