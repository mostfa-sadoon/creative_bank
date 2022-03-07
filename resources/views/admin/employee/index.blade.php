@extends('admin_temp')
@section('content')
 <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
    <thead>
        <tr>
            <th>#</th>
            <th>{{trans('admin.name')}}</th>
            <th>{{trans('admin.email')}}</th>
            <th>{{trans('admin.action')}}</th>

        </tr>
    </thead>
    <tbody>
        <?php $counter = 0; ?>
        @foreach($employees as $key=>$employee)
        <?php $counter += 1; ?>
        
        <tr>
            <td>{{$counter}}</td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td><a href="{{route('employee.edit',$employee->id)}}"><i class="fas fa-edit"></i></a><a href="{{route('employee.delete',$employee->id)}}"class="m-5"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection