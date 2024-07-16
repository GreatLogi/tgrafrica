@extends('admin.layouts.admin_master')
@section('title', 'Blogs')
@section('admin')
    <header class="page-header page-header-left-inline-breadcrumb">
        <h2 class="font-weight-bold text-6">All Blogs</h2>
        <div class="right-wrapper">
            <ol class="breadcrumbs">
                <li><span>Home</span></li>
                <li><span>Blog</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col">
            <div class="card card-modern">
                <div class="card-body">
                    <div class="datatables-header-footer-wrapper mt-2">
                        <div class="datatable-header">
                            <div class="row align-items-center mb-3">
                                <div class="col-12 col-lg-auto mb-3 mb-lg-0">
                                    <a href="{{ route('admin.blogs.create') }}"
                                        class="btn btn-success btn-md font-weight-semibold btn-py-2 px-4">+ Add Blog</a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-ecommerce-simple table-striped mb-0" id="datatable-ecommerce-list"
                            style="min-width: 550px;">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Title</th>
                                    <th width="70%">Content</th>
                                    <th width="1O%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_blogs as $blog)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->content }}</td>
                                        <td>
                                            <a href="{{ route('admin.blogs.edit', $blog->uuid) }}"
                                                class="badge badge-primary text-white">Edit</a>

                                            <a class="badge badge-danger text-white" id="delete"
                                                href="{{ route('admin.blogs.destroy', $blog->uuid) }}">
                                                Delete
                                            </a>

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
@endsection
