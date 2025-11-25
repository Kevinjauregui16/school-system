<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $group?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="grade_level" :value="__('Grade Level')"/>
        <x-text-input id="grade_level" name="grade_level" type="text" class="mt-1 block w-full" :value="old('grade_level', $group?->grade_level)" autocomplete="grade_level" placeholder="Grade Level"/>
        <x-input-error class="mt-2" :messages="$errors->get('grade_level')"/>
    </div>
    <div>
        <x-input-label for="teacher_id" :value="__('Teacher Id')"/>
        <x-text-input id="teacher_id" name="teacher_id" type="text" class="mt-1 block w-full" :value="old('teacher_id', $group?->teacher_id)" autocomplete="teacher_id" placeholder="Teacher Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('teacher_id')"/>
    </div>
    <div>
        <x-input-label for="student_id" :value="__('Student Id')"/>
        <x-text-input id="student_id" name="student_id" type="text" class="mt-1 block w-full" :value="old('student_id', $group?->student_id)" autocomplete="student_id" placeholder="Student Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('student_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>