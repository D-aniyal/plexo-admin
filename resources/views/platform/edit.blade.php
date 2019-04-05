@extends('layouts.app')
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
                <a href="{{ route("platforms") }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Create new</h5>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('platforms.update', $resource->id) }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                            {{ method_field("PUT") }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="{{ old("name", $resource->name) }}" required placeholder="Enter name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                    <button class="btn btn-danger" type="submit">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
@endpush