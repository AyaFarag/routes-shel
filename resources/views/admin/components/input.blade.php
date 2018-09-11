<div class="input-field{{ isset($class) ? ' ' . $class : '' }}">
  @php
    $trimmed_input_name = rtrim($name, "_confirmation");
  @endphp
  <input
    id="{{ $name }}"
    name="{{ $name }}"
    @if (!empty($type) && strtolower($type) === 'date')
      type="text"
    @else
      type="{{ empty($type) ? 'text' : $type }}"
    @endif
    autocomplete="off"
    class="{{ isset($class) ? $class : '' }}{{ $errors -> has($trimmed_input_name) ? 'invalid' : '' }}{{ !empty($type) && strtolower($type) === 'date' ? ' datepicker' : '' }}"
    value="{{
      !empty($old)
        ? $old
        : (
          isset($dontFlash) && $dontFlash
            ? ""
            : old($name)
        )
    }}"
    @if (isset($attributes))
      @foreach ($attributes as $attribute => $attribute_value)
        {{ $attribute }}="{{ $attribute_value }}"
      @endforeach
    @endif
  >
  <label for="{{ $name }}">{{ empty($label) ? ucfirst($name) : $label }}</label>
  @if ($errors -> has($trimmed_input_name))
    <span class="helper-text is-danger">{{ $errors -> first($trimmed_input_name) }}</span>
  @endif
</div>