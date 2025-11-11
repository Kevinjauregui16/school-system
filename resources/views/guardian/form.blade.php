<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $guardian?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="phone" :value="__('Phone')"/>
        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $guardian?->phone)" autocomplete="phone" placeholder="Phone"/>
        <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $guardian?->email)" autocomplete="email" placeholder="Email"/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>
    <div>
        <x-input-label for="address" :value="__('Address')"/>
        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $guardian?->address)" autocomplete="address" placeholder="Address"/>
        <x-input-error class="mt-2" :messages="$errors->get('address')"/>
    </div>
    <div>
        <x-input-label for="relationship" :value="__('Relationship')"/>
        <x-text-input id="relationship" name="relationship" type="text" class="mt-1 block w-full" :value="old('relationship', $guardian?->relationship)" autocomplete="relationship" placeholder="Relationship"/>
        <x-input-error class="mt-2" :messages="$errors->get('relationship')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>