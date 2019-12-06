@component('mail::message')
# Seja Bem Vindo!!

Esse app é o resultado de uma aula online, onde a ideia
era reproduzir as funcionalidades básicas de um aplicativo
conhecido.

Espero que tenha gostado de aprender, tanto quanto eu gostei!

Grande abraço

@component('mail::button', ['url' => ''])
Não clique
@endcomponent

Thanks,<br>
# Eduardo Capela<br>
{{ config('app.name') }}
@endcomponent
