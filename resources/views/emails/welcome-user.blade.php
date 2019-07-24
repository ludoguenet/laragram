@component('mail::message')
# Bienvenue

Merci, {{ $data->username }} de vous être inscrit sur notre application avec l'email {{ $data->email }}

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
