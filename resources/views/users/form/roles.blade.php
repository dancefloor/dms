<h2 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Roles</h2>
@foreach ($roles as $role)
<div>
    <input type="checkbox" name="roles[]" id="{{ $role->name }}" value="{{ $role->id }}"
        {{ $user->hasRole($role->id) ? 'checked': '' }}>
    <label for="{{ $role->name }}">{{ $role->name }}</label>
</div>
@endforeach