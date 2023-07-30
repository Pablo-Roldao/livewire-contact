<x-mail::message>
    # New Message

    You received a new contact message from Livewire Contact.

    ## Message from:
    __Name:__ {{ $data['name'] }}<br>
    __Email:__ {{ $data['email'] }}<br>

    ## Message content:
    {{ $data['message'] }}

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
