@extends('admin.layouts.admin_master')
@section('title')
    Contact Us
@endsection
@section('admin')
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">Contact Lists</h2>
                </header>
                <div class="card-body">
                    <div id="datatable-default_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mb-0 dataTable no-footer" id="example"
                                role="grid" style="width: 852px;">
                                <thead>
                                    <tr role="row">
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Country Of Residence</th>
                                        <th>Nationality</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Date and Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $list)
                                        <tr role="row" class="odd">
                                            <td>{{ ($data->currentPage() - 1) * $data->perPage() + $key + 1 }}</td>
                                            <td>{{ $list->full_name }}</td>
                                            <td>{{ $list->email }}</td>
                                            <td>{{ $list->country_of_residence }}</td>
                                            <td>{{ $list->nationality }}</td>
                                            <td>{{ $list->subject }}</td>
                                            <td>{{ $list->message }}</td>
                                            <td>{{ $list->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
