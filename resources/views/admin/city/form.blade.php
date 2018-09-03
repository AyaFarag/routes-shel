@include("admin.components.select", [
  "label" => "Countries",
  "name" => "country_id",
  "options" => $countries,
  "class" => "removable-select-input-select"
])

@include("admin.components.input", [
  "label" => "City Name",
  "name" => "name",
  "old"  => isset($city) ? $city -> name : "",
<<<<<<< HEAD
 
=======

])

@include("admin.components.select", [
  "name" => "country_id",
  "options" => $countries,
  "label" => "Countries",
  "class" => "removable-select-input-select"
>>>>>>> refs/remotes/origin/countries_cities
])

<div>

</div>