@extends('admin.layouts.layout')

{{-- @section('title')
All New Requests
@endsection --}}

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex flex-column">

                    <h3 class="card-title mb-3">{{$title}}</h3>
                    <div class="d-flex justify-content-between align-items-center" style="gap:15px">

                        <form action="">
                            <div class="input-group" style="width: 300px;">
                                <input type="text" name="search" class="form-control float-right w-25"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 61vh !important">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>


                                <th>Roll</th>
                                <th>Name</th>
                                <th>Mother Name</th>
                                <th>Father Name</th>
                                <th>Status</th>
                                <th>Applay Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newRequest as $item)
                                <tr>

                                    <td class="border border-slate-700 p-1.5 pl-10">{{ $item->id }}</td>
                                    <td class="border border-slate-700 p-1.5 pl-10">{{ $item->name }}</td>
                                    <td class="border border-slate-700 p-1.5 pl-10">{{ $item->mother_name }}</td>
                                    <td class="border border-slate-700 p-1.5 pl-10">{{ $item->father_name }}</td>
                                    <td class="border border-slate-700 p-1.5 pl-10">{{ $item->getStatus() }}</td>


                                    <td class="border border-slate-700 p-1.5 pl-10">
                                        {{ date('d M Y', strtotime($item->created_at)) }}
                                    </td>
                                    <td class="border border-slate-700 p-1.5  items-center justify-center flex btn-group"
                                        role="group">




                                        <!-- Example single danger button -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('admin.addmitionAccept',$item->id) }}">Addmission Accept</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                              
                                                
                                            </div>
                                        </div>
                                        <a data-toggle="modal" data-target="#view{{ $item->id }}" role="button"
                                            class=" btn btn-warning">View</a>



                </div>




                <div class="modal fade " id="view{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable " role="document">
                        <div class="modal-content" style="background: #eee">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Request Details ~ <span
                                        class="text-uppercase">{{ $item->owner_name }}</>
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="flex-row col-12">
                                    <table class="table">
                                        <tr>
                                            <th>id</th>
                                            <td class="text-uppercase">{{ $item->id }}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td class="text-uppercase">{{ $item->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Mother Name</th>
                                            <td class="text-uppercase">{{ $item->mother_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Father Name</th>
                                            <td class="text-uppercase">{{ $item->father_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>DOB</th>
                                            <td class="text-uppercase">{{ date('d M Y', strtotime($item->dob)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Contact</th>
                                            <td class="text-uppercase">{{ $item->contact }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td class="text-uppercase">{{ $item->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Class</th>
                                            <td class="text-uppercase">{{ $item->class }}</td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td class="text-uppercase">{{ $item->address }}</td>
                                        </tr>
                                        <tr>
                                            <th>Applay Date</th>
                                            <td>{{ $item->created_at ? date('d M Y', strtotime($item->created_at)) : 'N/A' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Addmition Data</th>
                                            <td>{{ $item->updated_at ? date('d M Y', strtotime($item->addmition_date)) : 'N/A' }}
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </tr>
                @endforeach
                </tbody>

                </table>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    </div>
    <div class=" " style="justify-items: center; display: flex; justify-content: center">
        {{-- {{$new->links()}} --}}
    </div>
@endsection
