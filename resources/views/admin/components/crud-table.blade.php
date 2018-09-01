@php
  $hasItems = $items -> count() > 0;
@endphp
@if ($hasItems)
  <table>
    <thead>
      <tr>
          <th></th>
          @foreach($columns as $columnKey => $column)
            <th>{{ $column["label"] }}</th>
          @endforeach
      </tr>
    </thead>

    <tbody>
      @foreach ($items as $item)
        <tr>
          <td class="action double">
            @if (isset($model) && Auth::guard("admin") -> user() -> can("update", $model))
              <a href="{{ route($baseRouteName . '.edit', $item -> id) }}">
                @include("admin.components.rounded-button", [
                  "icon"    => "edit",
                  "tooltip" => "Edit"
                ])
              </a>
            @endif
            @if (isset($model) && Auth::guard("admin") -> user() -> can("delete", $model))
              @component("admin.components.form", [
                "class"  => "delete-form",
                "method" => "DELETE",
                "action" => route($baseRouteName . ".destroy", $item -> id)
              ])
                @include("admin.components.rounded-button", [
                  "icon"    => "delete",
                  "tooltip" => "Delete"
                ])
              @endcomponent
            @endif
          </td>
          @foreach($columns as $columnKey => $column)
            @if (array_key_exists("transform", $column))
              <td>{{ $column["transform"]($item -> { $columnKey }, $item) }}</td>
            @else
              <td>{{ $item -> { $columnKey } }}</td>
            @endif
          @endforeach
        </tr>
      @endforeach
    </tbody>
  </table>
  @if ($items -> total() > $items -> perPage())
    <div class="text-centered vertical-padding tiny">
      {{ $items -> links() }}
    </div>
  @endif
@else
  <h4 class="text-centered text-danger vertical-padding big">{{ $notFound }}</h4>
@endif