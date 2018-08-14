<div class="input-field">
  <input
    id="{{ $name }}"
    name="{{ $name }}"
    type="{{ empty($type) ? 'text' : $type }}"
    autocomplete="off"
    class="{{ $errors -> has($name) ? 'invalid' : '' }}"
  >
  <label for="{{ $name }}">{{ $label }}</label>
  @if ($errors -> has($name))
    <span class="helper-text is-danger">{{ $errors -> first($name) }}</span>
  @endif
</div>