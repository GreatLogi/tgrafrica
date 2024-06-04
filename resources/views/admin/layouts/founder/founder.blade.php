@extends('admin.layouts.admin_master')
@section('title')
    Founder
@endsection
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="row">
        <div class="col-lg-12">
            <form action="#" method="POST" id="myForm" enctype="multipart/form-data">
                <section class="card">
                    <header class="card-header">
                        <h2 class="card-title">Founder`s Profile and Image</h2>

                    </header>
                    <div class="card-body" style="display: block;">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <img class="rounded-circle mt-5" id="showImage" width="250px"
                                    src="{{ url('upload/user.jpeg') }}" alt="Card image cap">
                                <div class="font-weight-bold mt-2">Profile Photo</div>
                                <input type="file" name="image" id="image" class="form-control mt-2">
                            </div>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="founder_profile" rows="12" placeholder="Type your message"></textarea>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
