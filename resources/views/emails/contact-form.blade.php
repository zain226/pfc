@component('mail::message')
# {{$data['subject'] ?? ''}}

Name: {{$data['name'] ?? ''}}
Email: {{$data['email'] ?? ''}}
Phone: {{$data['phone'] ?? ''}}

{{$data['message'] ?? ''}}

{{ config('app.name') }}
@endcomponent
