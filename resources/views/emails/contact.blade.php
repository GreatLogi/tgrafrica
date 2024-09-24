@extends('website.layouts.main')
@section('title')
    Contact
@endsection
@section('content')
    <h1>New Contact Message from {{ $messageContent['full_name'] ?? 'N/A' }}</h1>
    <p><strong>Email:</strong> {{ $messageContent['email'] ?? 'N/A' }}</p>
    <p><strong>Country of Residence:</strong> {{ $messageContent['country_of_residence'] ?? 'N/A' }}</p>
    <p><strong>Nationality:</strong> {{ $messageContent['nationality'] ?? 'N/A' }}</p>
    <p><strong>Subject:</strong> {{ $messageContent['subject'] ?? 'N/A' }}</p>
    <p><strong>Message:</strong> {{ $messageContent['message'] ?? 'N/A' }}</p>
@endsection
