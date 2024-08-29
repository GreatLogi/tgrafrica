@extends('admin.layouts.admin_master')

@section('title')
Dashboard
@endsection
@section('admin')
<!-- <div class="content">
  <main id="main-container">
    <h2 class="font-weight-bold text-6">Dashboard</h2>
    <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
  </main>
</div> -->
<!-- Main Container -->

<!-- Hero -->
<!-- <div class="right-wrapper"> -->


<!-- <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
    <div>
      <h1 class="h3 mb-1">
        Dashboard
      </h1>
      <p class="fw-medium mb-0 text-muted">
        Welcome, admin! You have <a class="fw-medium" href="javascript:void(0)">8 new notifications</a>.
      </p>
    </div>
    <div class="mt-4 mt-md-0">
      <a class="btn btn-sm btn-alt-primary" href="javascript:void(0)">
        <i class="fa fa-cog"></i>
      </a>
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-sm btn-alt-primary px-3" id="dropdown-analytics-overview" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Last 30 days <i class="fa fa-fw fa-angle-down"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end fs-sm" aria-labelledby="dropdown-analytics-overview">
          <a class="dropdown-item" href="javascript:void(0)">This Week</a>
          <a class="dropdown-item" href="javascript:void(0)">Previous Week</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)">This Month</a>
          <a class="dropdown-item" href="javascript:void(0)">Previous Month</a>
        </div>
      </div>
    </div>
  </div> -->

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