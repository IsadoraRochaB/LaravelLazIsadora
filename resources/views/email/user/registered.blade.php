@component('mail::message')
# Oii {{$user->name}}

Acredita que sua conta...foi criada?? Legal...nãO?

@component('mail::button', ['url' => ''])
Clique aqui para ativar sua conta!
@endcomponent

Obrigada!,<br>
{{ config('app.name') }}
@endcomponent
