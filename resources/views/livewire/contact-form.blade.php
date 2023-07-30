<form wire:submit.prevent="submit" class="space-y-4">
    <div>
        <x-label for="name" value="{{ __('Name') }}" />
        <x-input wire:model="name" name="name" id="name" type="text" class="w-full" autofocus />
        <x-input-error for="name" />
    </div>

    <div>
        <x-label for="email" value="{{ __('Email Address') }}" />
        <x-input wire:model="email" name="email" id="email" type="email" class="w-full" />
        <x-input-error for="email" />
    </div>

    <div>
        <x-label for="message" value="{{ __('Message') }}" />
        <textarea wire:model="message"
            class=" w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="message"
            id="message" cols="30" rows="10"></textarea>
        <x-input-error for="message" />
    </div>

    <x-button type="submit" class="mt-5">
        {{ _('Send') }}
    </x-button>

    <div wire:target="submit" wire:loading class="ml-2">
        <span>
            Sending...
        </span>
    </div>
</form>
