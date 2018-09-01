<div class="input-field">
    <select
        @if (isset($name)) name="{{ $name }}" @endif
        @if (isset($class)) class="{{ $class }}" @endif
    >
        <option value="" disabled selected>Choose your option</option>
        @foreach ($options as $option => $title)
            <option
                value="{{ $option }}"
                @if (isset($old) && $old === $option)
                    selected
                @elseif (isset($dontFlash) && !$dontFlash && !empty(old($name)) && old($name) === $option)
                    selected
                @endif
            >{{ $title }}</option>
        @endforeach
    </select>
    <label>{{ $label }}</label>
</div>