<div class="space-y-6">
    
    <div>
        <x-input-label for="first_name" :value="__('First Name')"/>
        <x-text-input id="first_name" name="first_name" type="text" class="mt-1 block w-full" :value="old('first_name', $student?->first_name)" autocomplete="first_name" placeholder="First Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('first_name')"/>
    </div>
    <div>
        <x-input-label for="last_name" :value="__('Last Name')"/>
        <x-text-input id="last_name" name="last_name" type="text" class="mt-1 block w-full" :value="old('last_name', $student?->last_name)" autocomplete="last_name" placeholder="Last Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('last_name')"/>
    </div>
    <div>
        <x-input-label for="birth_date" :value="__('Birth Date')"/>
        <x-text-input id="birth_date" name="birth_date" type="text" class="mt-1 block w-full" :value="old('birth_date', $student?->birth_date)" autocomplete="birth_date" placeholder="Birth Date"/>
        <x-input-error class="mt-2" :messages="$errors->get('birth_date')"/>
    </div>
    <div>
        <x-input-label for="gender" :value="__('Gender')"/>
        <x-text-input id="gender" name="gender" type="text" class="mt-1 block w-full" :value="old('gender', $student?->gender)" autocomplete="gender" placeholder="Gender"/>
        <x-input-error class="mt-2" :messages="$errors->get('gender')"/>
    </div>
    <div>
        <x-input-label for="status" :value="__('Status')"/>
        <x-text-input id="status" name="status" type="text" class="mt-1 block w-full" :value="old('status', $student?->status)" autocomplete="status" placeholder="Status"/>
        <x-input-error class="mt-2" :messages="$errors->get('status')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>