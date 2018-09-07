@include("admin.components.input", [
  "name" => "name",
  "label" => "category",
  "old"  => isset($category) ? $category -> name : "",
 
])

@include("admin.components.select", [
  "name" => "parent_id",
  "options" => $categories,
  "label" => "Categories",
  "class" => "removable-select-input-select"
])

<div>

</div>