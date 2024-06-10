@extends('admin.layouts.admin_master')

@section('title', 'BrainStorm Chat')

@section('admin')
    <style>
        .input-group {
            margin-bottom: 10px;
        }

        #chat-box {
            height: 300px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .chat-message {
            margin-bottom: 10px;
        }

        .chat-message strong {
            display: block;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">BrainStorm Chat</h2>
                </div>
                <div class="card-body">
                    <div id="chat-box">
                        <!-- Messages will be appended here -->
                    </div>
                    <form id="chat-form">
                        @csrf
                        <div class="input-group">
                            <textarea id="message-input" class="form-control" rows="3" placeholder="Type your message"></textarea>
                        </div>
                        <div class="input-group text-end">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            const chatBox = $('#chat-box');

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
                cluster: '{{ env('PUSHER_APP_CLUSTER') }}'
            });

            var channel = pusher.subscribe('chat');
            channel.bind('App\\Events\\MessageSent', function(data) {
                chatBox.append('<div class="chat-message"><strong>' + data.user.name + ':</strong> ' + data
                    .message.message + '</div>');
                chatBox.scrollTop(chatBox.prop("scrollHeight"));
            });
            $('#chat-form').on('submit', function(e) {
                e.preventDefault();
                const message = $('#message-input').val();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('site-store-chat-tgrbrainstorm') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        message: message
                    },
                    success: function() {
                        $('#message-input').val('');
                    }
                });
            });
        });
    </script>
@endsection
