@include("admin.components.input", [
  "name" => "name",
  "old"  => isset($city) ? $city -> name : "",

])

@include("admin.components.select", [
  "name" => "country_id",
  "options" => $countries,
  "label" => "Countries",
  "class" => "removable-select-input-select"
])

<div>

</div>