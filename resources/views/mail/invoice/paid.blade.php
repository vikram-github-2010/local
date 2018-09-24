@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'www.facebook.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
