@extends('website.layouts.main')
@section('title')
Contact
@endsection
@section('content')
<h1>Thank You, {{ $messageContent['full_name'] }}!</h1>
<p>We have received your message and will get back to you as soon as possible.</p>
<!-- <p>Here's a copy of your message:</p>
    <p><strong>Subject:</strong> {{ $messageContent['subject'] }}</p>
    <p><strong>Message:</strong> {{ $messageContent['message'] }}</p> -->
<p>Best regards,<br>TGR Africa Team</p>
@endsection