@extends('admin_temp')
@section('content')
 <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>date</th>
            <th>measure</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $key=>$employee)
        
        <tr>
            <td></td>
            <td>{{$employee->name}}</td>
            <td>{{$employee->email}}</td>
            <td><a href="{{route('employee.edit',$employee->id)}}"><i class="fas fa-edit"></i></a><a href="{{route('employee.delete',$employee->id)}}"class="m-5"><i class="fas fa-trash-alt"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection