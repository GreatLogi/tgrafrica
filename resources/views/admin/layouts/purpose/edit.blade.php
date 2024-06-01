@extends('admin.layouts.admin_master')
@section('title')
    Purpose
@endsection
@section('admin')
    <div class="row">
        <div class="col">
            <section class="card card-modern card-big-info">
                <div class="card-body"style="background-color: burlywood;">
                    <form action="{{ route('site-update-purpose') }}" method="POST">
                        @csrf
                        <input type="hidden" name="uuid" value="{{ $purposes->uuid }}">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-3">
                                <i class="card-big-info-icon bx bx-box"></i>
                                <h2 class="card-big-info-title">PURPOSE INFO</h2>
                                <p class="card-big-info-desc">Edit here the Purpose Statement.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row pb-4">
                                    <label
                                        class="col-lg-2 col-xl-3 control-label text-lg-end pt-2 mt-1 mb-0">Purpose</label>
                                    <div class="col-lg-9 col-xl-9">
                                        <textarea class="form-control form-control-modern" name="purpose" rows="12">{{ $purposes->purpose }}</textarea>
                                        @error('vision')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-info" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
