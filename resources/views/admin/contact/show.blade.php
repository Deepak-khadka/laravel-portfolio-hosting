@extends('admin.layouts.master')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote.css') }}">
@endpush

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        @include('admin.layouts.partials.breadcrumb', ['panel' => 'Contact'])


        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-primary">
                                <center>
                                    <i class="fas fa-user"></i>
                                    {{ $contact['full_name'] }}
                                </center>
                            </h3>

                            <hr>
                            <div class="text-muted">
                                <p class="text-sm">Subject
                                    <b class="d-block">{{ $contact['subject'] }}</b>
                                </p>
                                <p class="text-sm">Description
                                    <b class="d-block">{{ $contact['description'] }}</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Compose New Message</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <input class="form-control" placeholder="To:" value="{{ $contact['email'] }}">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Subject:">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft
                                </button>
                                <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send
                                </button>
                            </div>
                            <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>

    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/admin/plugins/summernote/summernote.js') }}"></script>
    <script>
        $('#message').summernote()
    </script>
@endpush