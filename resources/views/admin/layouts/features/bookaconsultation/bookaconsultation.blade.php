@extends('admin.layouts.admin_master')
@section('title')
    Book Consultation
@endsection
@section('admin')
    <style>
        .input-group {
            margin-bottom: 10px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".add-more").click(function() {
                var html = '<div class="col-lg-6 input-group">' +
                    '<label for="inputDefault">aim to achieve:</label>' +
                    '<input type="text" class="form-control" name="aim_by[]" id="inputDefault">' +
                    '<button type="button" class="btn btn-danger remove">Remove</button>' +
                    '</div>';
                $(".input-group:last").after(html);
            });

            $(document).on("click", ".remove", function() {
                if ($('.input-group').length > 1) {
                    $(this).parent().remove();
                }
            });
        });
    </script>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('site-store-bookaconsultation') }}" method="POST" id="myForm" enctype="multipart/form-data">
                @csrf
                <section class="card">
                    <header class="card-header">
                        <h2 class="card-title">Book A Consultation</h2>
                    </header>
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="">Title</label>
                                <input class="form-control" name="title" placeholder="Title">
                                @error('title')
                                    <span class="btn btn-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label for=""></label>
                                <textarea class="form-control" name="body" rows="8" placeholder="Type your message"></textarea>
                                @error('body')
                                    <span class="btn btn-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>
                            <div class="col-lg-6 input-group">
                                <label for="inputDefault">aim to achieve:</label>
                                <input type="text" class="form-control" name="aim_by[]" id="inputDefault">
                                <button type="button" class="btn btn-success add-more">Add More</button>
                                <button type="button" class="btn btn-danger remove">Remove</button>
                            </div>
                            <div class="col-lg-12">
                                <label for=""></label>
                                <textarea class="form-control" name="book_a_consultation_process" rows="8" placeholder="Type your message"></textarea>
                                @error('book_a_consultation_process')
                                    <span class="btn btn-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer text-end" style="display: block;">
                        <button class="btn btn-primary" type="submit">Add Comment</button>
                    </footer>
                </section>
            </form>
        </div>
    </div>
@endsection
