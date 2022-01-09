@extends('admin_temp')
@section('content')

    <div class=" d-flex justify-content-start">
         <a  href="{{route('field.create')}}" class="btn btn-success">{{trans('admin.add_new_field')}}</a>
    </div>   
        <table class="mt-2 table color-table info-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{trans('admin.field_in_arabic')}}</th>
                    <th>{{trans('admin.field_in_english')}}</th>
                    <th>{{trans('admin.measure')}}</th>
                </tr>
            </thead>
            <tbody>
            @foreach($fields as $key=>$field)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$field->name_ar}}</td>
                    <td>{{$field->name_en}}</td>
                    <td>   
                        <a href="{{route('field.show',$field->id)}}"><i class="far fa-eye text-success"></i></a>  
                        <a href="{{route('field.edit',$field->id)}}"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                @endforeach            
            </tbody>
        </table>
@endsection