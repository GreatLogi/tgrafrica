@extends('admin.layouts.admin_master')

@section('title')
    Dashboard
@endsection

@section('admin')
    <header class="page-header page-header-left-inline-breadcrumb">
        <h2 class="font-weight-bold text-6">Dashboard</h2>
        <div class="right-wrapper">
            <ol class="breadcrumbs">
                <li><span>Home</span></li>
                <li><span>Dashboard</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
        </div>
    </header>

    <div class="row">
        <div class="col-4">
            <section class="card">
                <header class="card-header">
                    <h2 class="card-title">Website Visitors</h2>
                </header>
                <div class="card-body">
                    <h3>Total Visitors: {{ $visitorCount }}</h3>
                    <h4>Visitors This Month: {{ $monthlyVisitorCount }}</h4>
                    <h4>Last 10 Visitors:</h4>
                    <ul>
                        @foreach ($visitors as $visitor)
                            <li>{{ $visitor->visited_at }} - IP: {{ $visitor->ip_address }}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </div>
@endsection
