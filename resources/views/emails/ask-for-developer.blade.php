@component('mail::message')
# Introduction

Hey Gabriel, {{ $email  }} asked for you

Thanks,<br>
{{ config('app.name') }}
@endcomponent
