<x-mail::message>
# {{ __('New Contact Form Submission from :site', ['site' => env('APP_NAME')]) }}
**{{ __('You have received a new message from your website\'s contact form.') }}**

<x-mail::panel>
**{{ __('Name:') }}**
{{ $name }}
</x-mail::panel>

<x-mail::panel>
**{{ __('Email:') }}**
{{ $email }}
</x-mail::panel>

<x-mail::panel>
**{{ __('Message:') }}**
{{ $text }}
</x-mail::panel>

{{ __('This message was sent from your website\'s contact form.') }}
{{ __('You can reply directly to this email to respond to :name.', ['name' => $name]) }}
</x-mail::message>