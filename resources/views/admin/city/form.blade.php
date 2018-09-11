@include("admin.components.select", [
  "label" => "Country",
  "name" => "country_id",
  "options" => $countries,
  "class" => "removable-select-input-select"
])

@include("admin.components.input", [
  "label" => "City Name",
  "name" => "name",
  "old"  => isset($city) ? $city -> name : ""
])