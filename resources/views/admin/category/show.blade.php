@extends('admin_temp')
@section('content')
    <div class=" d-flex justify-content-start">
         <a  href="{{route('category.create')}}" class="btn btn-success">add new category</a>
    </div>
        <table class="mt-2 table color-table info-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name in arabic</th>
                    <th>name in english</th>
                    <th>measure</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $key=>$category)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name_ar}}</td>
                    <td>{{$category->name_en}}</td>
                    <td>
                        <a href="{{route('category.show',$category->id)}}"><i class="far fa-eye text-success"></i></a>
                        <a href="{{route('photos.edit',$category->id)}}"><i class="fas fa-edit"></i></a>
                        <a href="#"><i class="fas fa-trash-alt text-danger"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection
