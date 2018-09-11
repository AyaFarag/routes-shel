{{--  name  --}}
@include("admin.components.input", [
  "name" => "name",
  "label" => "Name",
  "old"  => isset($product) ? $product -> name : ""
])
{{--  price  --}}
@include("admin.components.input", [
  "name" => "price",
  "label" => "Price",
  "old"  => isset($product) ? $product -> price : ""
])
{{--  description  --}}
@include("admin.components.textarea", [
  "name" => "description",
  "label" => "description",
  "rows" => 7,
  "oldValue"  => isset($product) ? $product -> description : ""
])
{{--  images  --}}
@include("admin.components.input", [
  "label" => "images",
  "name" => "images",
  "type" => "file",
  "attributes" => ["multiple" => "multiple"],
  "old"  => isset($product) ? $product -> images : ""
])
{{--  quantity  --}}
@include("admin.components.input", [
  "name" => "quantity",
  "label" => "Quantity",
  "old"  => isset($product) ? $product -> quantity : ""
])
{{--  height  --}}
@include("admin.components.input", [
  "name" => "height",
  "label" => "Height",
  "old"  => isset($product) ? $product -> height : ""
])
{{--  width  --}}
@include("admin.components.input", [
  "name" => "width",
  "label" => "Width",
  "old"  => isset($product) ? $product -> width : ""
])
{{--  categories  --}}
@include("admin.components.select", [
  "label" => "Categories",
  "name" => "category_id",
  "options" => $categories,
  "old" => isset($product) ? $product -> category_id : "",
  "class" => "removable-select-input-select"
])

{{--  images  --}}
@include("admin.components.file", [
  "label" => "Images",
  "name" => "images[]",
  "multiple" => true
])