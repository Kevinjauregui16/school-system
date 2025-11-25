<div class="space-y-6">
    
    <div>
        <x-input-label for="user_id" :value="__('User Id')"/>
        <x-text-input id="user_id" name="user_id" type="text" class="mt-1 block w-full" :value="old('user_id', $teacher?->user_id)" autocomplete="user_id" placeholder="User Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('user_id')"/>
    </div>
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $teacher?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="phone" :value="__('Phone')"/>
        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $teacher?->phone)" autocomplete="phone" placeholder="Phone"/>
        <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
    </div>
    <div>
        <x-input-label for="group_id" :value="__('Group Id')"/>
        <x-text-input id="group_id" name="group_id" type="text" class="mt-1 block w-full" :value="old('group_id', $teacher?->group_id)" autocomplete="group_id" placeholder="Group Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('group_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>