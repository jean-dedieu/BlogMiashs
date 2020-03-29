

<!--ici  la structure notre mail avec markdown mailables -->


@component('mail::message')
# Bonjour Admin

<strong>De: </strong>{{ $name }}<br>
<strong>Mail:</strong> {{ $email }}

@component('mail::panel')
{{ $msg }}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
