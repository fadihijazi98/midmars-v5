@component('mail::message')
# Email Verification

Hello and welcome in midmars, you have to verification your email, by click in button bellow ( Verification now )

@component('mail::button', ['url' => 'http://127.0.0.1:8000/email_verification?api_token=@'])
    Verification now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
