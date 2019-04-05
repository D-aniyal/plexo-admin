@extends('layouts.app')
@push("styles")
    <style type="text/css">
        .flex {
            display: inline-flex;
        }
        .align-right {
            text-align: right;
        }
        .btn-warning {
            margin-right: 5px;
        }
    </style>
@endpush
@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Platforms</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Platforms</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <a href="{{ route("platforms.create") }}" class="btn btn-primary">Create New</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>List</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th class="align-right">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($resources as $resource)
                                    <tr>
                                        <td>{{ $resource->name }}</td>
                                        <td>{{ $resource->slug }}</td>
                                        <td>
                                            <div class="flex pull-right">
                                                <a href="{{ route("platforms.edit", $resource->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route("platforms.destroy", $resource->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });
        });
    </script>
@endpush