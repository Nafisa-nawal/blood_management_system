
@extends('user.layouts.master')
@section('content')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Blood Donate History</h1>
                    </div>
                </div>
            </div>
           
            

        </div>
        @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <th>SL</th>
                        <th>Receiver Name</th>
                        <th>Requested Blood Group</th>
                        <th>Requested Date</th>
                        <th>Purpose</th>
                        <th>Receiver's Phone Number</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                       @foreach ($history as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$row->user->name}}</td>
                            <td>{{$row->bloodGroup->group_name}}</td>
                            <td>{{$row->date}}</td>
                            <td>{{$row->purpose}}</td>
                            <td>{{$row->user->phone_number}}</td>

                            <td>
                                @if($row->status==1)
                                <div class="alert alert-success">Resolved</div>

                                @elseif($row->status==3)   
                                <div class="alert alert-info">Progress</div> 
                                @else
                                    

                                @endif

                              </td>
                           
                       </tr>
                        @endforeach
          
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection