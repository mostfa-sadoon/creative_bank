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
                    <th>{{trans('admin.action')}}</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 0; ?>
            @foreach($fields as $key=>$field)
                <?php $counter += 1; ?>    
                <tr>
                    <td>{{$counter}}</td>
                    <td>{{$field->name_ar}}</td>
                    <td>{{$field->name_en}}</td>
                    <td>   
                    <a href="{{route('field.edit', $field->id)}}"><i class="fas fa-edit"></i></a>
                    <a href="{{route('field.destroy', $field->id)}}"><i class="fas fa-close text-danger"></i></a>
                </td>
                </tr>
                @endforeach            
            </tbody>
        </table>
@endsection