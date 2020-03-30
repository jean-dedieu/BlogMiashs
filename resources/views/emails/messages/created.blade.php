

<!--ici  la structure notre mail avec markdown mailables -->


@component('mail::message')
# Bonjour Admin

<strong>De: </strong>{{ $msg->name }}<br>
<strong>Mail:</strong> {{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
