<x-mail::message>
# Exception Occurred

You received this email because an exception has occurred in your application.

<x-mail::button :url="''">
Check Exception
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
