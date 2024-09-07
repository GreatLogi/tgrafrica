@extends('website.layouts.main')

@section('title')
Contact
@endsection

@section('content')

<h1>New Contact Form Submission</h1>
<p>Full Name: {{ $full_name }}</p>
<p>Email: {{ $email }}</p>
<p>Country of Residence: {{ $country_of_residence }}</p>
<p>Nationality: {{ $nationality }}</p>
<p>Subject: {{ $subject }}</p>
<p>Message: {{ $message }}</p>

@endsection