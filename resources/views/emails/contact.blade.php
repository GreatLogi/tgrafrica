@extends('website.layouts.main')
@section('title')
Contact
@endsection
@section('content')
<h1>New Contact Message from {{ $messageContent['full_name'] }}</h1>
<p><strong>Email:</strong> {{ $messageContent['email'] }}</p>
<p><strong>Country of Residence:</strong> {{ $messageContent['country_of_residence'] }}</p>
<p><strong>Nationality:</strong> {{ $messageContent['nationality'] }}</p>
<p><strong>Subject:</strong> {{ $messageContent['subject'] }}</p>
<p><strong>Message:</strong> {{ $messageContent['message'] }}</p>
@endsection
