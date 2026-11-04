@php $editing = isset($user) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.text
            name="name"
            label="Nombre"
            value="{{ old('name', ($editing ? $user->name : '')) }}" 
            maxlength="255"
            required autofocus autocomplete="name"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.email
            name="email" 
            label="Correo electrónico"
            value="{{ old('email', ($editing ? $user->email : '')) }}"
            required
        ></x-inputs.email>
    </x-inputs.group>

    <x-inputs.group class="w-full lg:w-6/12">
        <x-inputs.select name="rol" id="rol" label="Rol" required>
                @php $selected = old('rol', ($editing ? $user->rol : '')) @endphp
                <option hidden {{ empty($selected) ? 'selected' : '' }}>Seleccione rol</option>
                @foreach($roles as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
                @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>