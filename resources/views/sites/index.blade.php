@extends('layouts.master')
@section('css')
    @toastr_css

@section('title')
    View Sites
@stop
@endsection
@section('page-header')

<h5 class="page-title "> View Sites </h5>
<div class="mt-3 mr-50 container-fluid">


    <div class="row">

        <div class="col-md-10 mb-30">

            <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                Add Site
            </button>
            <br><br>
            <div class="card card-statistics">
                <div class="card-body">

 @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

 @if(Session::has('success'))
    <div class="alert alert-success"> {{ Session::get('success') }}</div>
  @endif
                    <div class="table-responsive">
                        <table id="datatable" class="table p-0 table-hover table-sm table-bordered"
                            data-page-length="50" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="alert-success">Site Name</th>
                                    <th class="alert-success">PHP</th>
                                    <th class="alert-success">Storage</th>
                                    <th class="alert-success">Visits*</th>
                                    <th class="alert-success"> Action </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                  
                                        
                                  
                                    <td>  1</td>

                                    <td> Plateform </td>
                                    <td> 8.0 </td>
                                    <td> 50 GB </td>
                                    <td> 220 </td>

                                    <td>
                                        <a class="text-white btn btn-danger"> <i class="fa fa-trash"
                                                aria-hidden="true"></i> Delete </a>
                                        </td>
                                </tr>
                                {{-- @include('pages.Student.delete') --}}

                        </table>
                    </div>
                </div>
            </div>
        </div>

     <!-- add_modal_Grade -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                            id="exampleModalLabel">
                            Add Site
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="{{ route('sites.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="username"
                                           class="mr-sm-2">
                                        </label>Username :
                                    <input id="username" type="text" name="username" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="password"
                                           class="mr-sm-2"> 
                                        </label>Password :
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
<br>
<br>
<br>
                            <div class="row">
                                <label
                                    for="exampleFormControlTextarea1">
                                    :</label>
                                   <div class="col">
                                    <label for="subdomain"
                                           class="mr-sm-2"> 
                                        </label>Subdomain :
                                    <input type="subdomain" class="form-control" name="subdomain">
                                </div>

 <div class="col">
                                    <label for="domain"
                                           class="mr-sm-2"> 
                                        </label>Domain :
                                    <input type="text" class="form-control" name="domain">
                                </div>
                            </div>
                            <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close </button>
                        <button type="submit"
                                class="btn btn-success"> Submit </button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>
<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
