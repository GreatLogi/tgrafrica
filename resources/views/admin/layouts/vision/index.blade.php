@extends('admin.layouts.admin_master')
@section('title')
    Vision
@endsection
@section('admin')
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header">
                    <div class="card-actions">
                        <a href="#" class="card-action card-action-toggle" data-card-toggle=""></a>
                        <a href="#" class="card-action card-action-dismiss" data-card-dismiss=""></a>
                    </div>
                    <h2 class="card-title">Basic</h2>
                </header>
                <div class="card-body">
                    <div id="datatable-default_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dataTables_length" id="datatable-default_length"><label><select
                                            name="datatable-default_length" aria-controls="datatable-default"
                                            class="form-select form-select-sm select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="10" data-select2-id="3">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select><span class="select2 select2-container select2-container--bootstrap"
                                            dir="ltr" data-select2-id="2" style="width: 60px;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-datatable-default_length-x1-container"><span
                                                        class="select2-selection__rendered"
                                                        id="select2-datatable-default_length-x1-container" role="textbox"
                                                        aria-readonly="true" title="10">10</span><span
                                                        class="select2-selection__arrow" role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span> records per
                                        page</label></div>
                            </div>
                            <div class="col-lg-6">
                                <div id="datatable-default_filter" class="dataTables_filter"><label><input type="search"
                                            class="form-control pull-right" placeholder="Search..."
                                            aria-controls="datatable-default"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mb-0 dataTable no-footer"
                                id="datatable-default" role="grid" style="width: 852px;">

                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="datatable-default"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending"
                                            style="width: 236.667px;">Rendering engine</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 230.333px;">Browser</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable-default" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 295.333px;">Platform(s)</th>
                                        <th class="d-lg-none sorting" tabindex="0" aria-controls="datatable-default"
                                            rowspan="1" colspan="1"
                                            aria-label="Engine version: activate to sort column ascending"
                                            style="width: 0px;">Engine version</th>
                                        <th class="d-lg-none sorting" tabindex="0" aria-controls="datatable-default"
                                            rowspan="1" colspan="1"
                                            aria-label="CSS grade: activate to sort column ascending" style="width: 0px;">
                                            CSS grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Firefox 1.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center d-lg-none">1.7</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Firefox 1.5</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center d-lg-none">1.8</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Firefox 2.0</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center d-lg-none">1.8</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Firefox 3.0</td>
                                        <td>Win 2k+ / OSX.3+</td>
                                        <td class="center d-lg-none">1.9</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Camino 1.0</td>
                                        <td>OSX.2+</td>
                                        <td class="center d-lg-none">1.8</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Camino 1.5</td>
                                        <td>OSX.3+</td>
                                        <td class="center d-lg-none">1.8</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Netscape 7.2</td>
                                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                                        <td class="center d-lg-none">1.7</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Netscape Browser 8</td>
                                        <td>Win 98SE+</td>
                                        <td class="center d-lg-none">1.7</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Netscape Navigator 9</td>
                                        <td>Win 98+ / OSX.2+</td>
                                        <td class="center d-lg-none">1.8</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Gecko</td>
                                        <td>Mozilla 1.0</td>
                                        <td>Win 95+ / OSX.1+</td>
                                        <td class="center d-lg-none">1</td>
                                        <td class="center d-lg-none">A</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-default_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="datatable-default_previous"><a
                                        href="#" aria-controls="datatable-default" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#"
                                        aria-controls="datatable-default" data-dt-idx="1" tabindex="0"
                                        class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="datatable-default" data-dt-idx="2" tabindex="0"
                                        class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="datatable-default" data-dt-idx="3" tabindex="0"
                                        class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="datatable-default" data-dt-idx="4" tabindex="0"
                                        class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="datatable-default" data-dt-idx="5" tabindex="0"
                                        class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#"
                                        aria-controls="datatable-default" data-dt-idx="6" tabindex="0"
                                        class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="datatable-default_next"><a href="#"
                                        aria-controls="datatable-default" data-dt-idx="7" tabindex="0"
                                        class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
