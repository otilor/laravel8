@component('mail::message')
# Introduction

Your payment is being processed!

@component('mail::button', ['url' => ''])
Yikes!!!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
