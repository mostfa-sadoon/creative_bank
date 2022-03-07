@extends('admin_temp')
@section('content')

<div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{trans('admin.users')}}</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>{{trans('admin.number')}}</th>
                                                <th>{{trans('admin.name')}}</th>
                                                <th>{{trans('admin.email')}}</th>
                                                <th>{{trans('admin.phone')}}</th>
                                                <th>{{trans('admin.joining_date')}}</th>
                                                <!--  -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $counter = 0 ?>
                                            @foreach($users as  $user)
                                            <?php $counter = $counter+ 1?>
                                                <tr>
                                                    <td>{{$counter}}</td>
                                                    <td>
                                                        <!-- <a href=""> -->
                                                            <img src="{{$user->img}}" alt="user" width="40" class="img-circle" /> 
                                                            Genelia Deshmukh
                                                        <!-- </a> -->
                                                    </td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="d-flex justify-content-center">
                                        {{ $users->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection
