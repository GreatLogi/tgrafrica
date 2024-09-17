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



<div class="row">
        <h2 class="card-title mb-4 px-4">Website Visitors</h2>


  <div class="col-3 mb-3">
    <section class="card card-featured-left card-featured-info">
      <div class="card-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa-solid fa-paper-plane"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h1 class="title">Total Visitors</h1>
              <div class="info">
                <strong class="amount">{{$visitorCount}}</strong>
              </div>
            </div>
            <div class="summary-footer">
              {{-- <a class="text-muted text-uppercase" href="#">(withdraw)</a> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
	</div>


  <div class="col-3 mb-3">
    <section class="card card-featured-left card-featured-success">
      <div class="card-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa-solid fa-calendar-days"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h1 class="title">Visitors This Month</h1>
              <div class="info">
                <strong class="amount">{{$monthlyVisitorCount}}</strong>
              </div>
            </div>
            <div class="summary-footer">
              {{-- <a class="text-muted text-uppercase" href="#">(withdraw)</a> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
	</div>

  <div class="col-3 mb-3">
    <section class="card card-featured-left card-featured-danger">
      <div class="card-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
              <i class="fa-solid fa-user"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h1 class="title">Users</h1>
              <div class="info">
                <strong class="amount">{{$monthlyVisitorCount}}</strong>
              </div>
            </div>
            <div class="summary-footer">
              {{-- <a class="text-muted text-uppercase" href="#">(withdraw)</a> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
	</div>
  
  <div class="col-3 mb-3">
    <section class="card card-featured-left card-featured-warning">
      <div class="card-body">
        <div class="widget-summary">
          <div class="widget-summary-col widget-summary-col-icon">
            <div class="summary-icon bg-secondary">
             <i class="fa-solid fa-envelope"></i>
            </div>
          </div>
          <div class="widget-summary-col">
            <div class="summary">
              <h1 class="title">Email</h1>
              <div class="info">
                <strong class="amount">{{$monthlyVisitorCount}}</strong>
              </div>
            </div>
            <div class="summary-footer">
              {{-- <a class="text-muted text-uppercase" href="#">(withdraw)</a> --}}
            </div>
          </div>
        </div>
      </div>
    </section>
	</div>
</div>

<div class="row">
  <div class="col">
      <div class="row">
							<div class="col-md-12">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											
										</div>

										<h2 class="card-title">Last 10 Visits</h2>
										<p class="card-subtitle">This data shows the last 10 visits by Date, Time and I.P Address</p>
									</header>
									<div class="card-body">

										<table class="table table-bordered table-striped mb-0 dataTable no-footer" id="contact-us-lists"
                          role="grid" >
                          <thead>
                              <tr>
                                  <th class="sorting_asc" tabindex="0" aria-controls="datatable-default"
                                                      rowspan="1" colspan="1" aria-sort="ascending"
                                                      aria-label="Rendering engine: activate to sort column descending"
                                                      style="width: 236.667px;">Date & Time Visited</th>
                                  <th class="sorting_asc" tabindex="0" aria-controls="datatable-default"
                                                      rowspan="1" colspan="1" aria-sort="ascending"
                                                      aria-label="Rendering engine: activate to sort column descending"
                                                      style="width: 236.667px;">IP Address</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($visitors as $index => $visitor)
                                <tr>
                                    <td class="sorting_asc" tabindex="0" aria-controls="datatable-default"
                                                      rowspan="1" colspan="1" aria-sort="ascending"
                                                      aria-label="Rendering engine: activate to sort column descending"
                                                      style="padding: 10px; background-color: {{ $index % 2 == 0 ? '#f0f0f0' : 'transparent' }};">{{ $visitor->visited_at }}</td>
                                    <td class="sorting_asc" tabindex="0" aria-controls="datatable-default"
                                                      rowspan="1" colspan="1" aria-sort="ascending"
                                                      aria-label="Rendering engine: activate to sort column descending"
                                                      style="padding: 10px; background-color: {{ $index % 2 == 0 ? '#f0f0f0' : 'transparent' }};">{{ $visitor->ip_address }}</td>
                                </tr>
                              @endforeach

                          </tbody>
                     </table>

									</div>
								</section>
							</div>
						</div>
  </div>

  
  <div class="col">
      <div class="row">
							<div class="col-md-12">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
										</div>

										<h2 class="card-title">Bar Chart</h2>
										<p class="card-subtitle">A bar chart is a way of summarizing a set of categorical data.</p>
									</header>
									<div class="card-body">

										<!-- Morris: Bar -->
										<div class="chart chart-md" id="morrisBar"></div>
										<script type="text/javascript">

											var morrisBarData = [{
												y: '2004',
												a: 10,
												b: 30
											}, {
												y: '2005',
												a: 100,
												b: 25
											}, {
												y: '2006',
												a: 60,
												b: 25
											}, {
												y: '2007',
												a: 75,
												b: 35
											},{
												y: '2023',
												a: 60,
												b: 8
											}];

											// See: js/examples/examples.charts.js for more settings.

										</script>

									</div>
								</section>
							</div>
						</div>
  </div>
</div>
@endsection