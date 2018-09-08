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
@include("admin.components.input", [
  "name" => "description",
  "label" => "description",
  "old"  => isset($product) ? $product -> description : ""
])
{{--  images  --}}
@include("admin.components.input", [
  "label" => "images",
  "multiple" => "multiple",
  "name" => "images[]",
  "type" => "file",
  "old"  => isset($product) ? $product -> images : ""
])
{{--  quantity  --}}
@include("admin.components.input", [
  "name" => "quantity",
  "label" => "quantity",
  "old"  => isset($product) ? $product -> quantity : ""
])
{{--  height  --}}
@include("admin.components.input", [
  "name" => "height",
  "label" => "height",
  "old"  => isset($product) ? $product -> height : ""
])
{{--  width  --}}
@include("admin.components.input", [
  "name" => "width",
  "label" => "width",
  "old"  => isset($product) ? $product -> width : ""
])
{{--  categories  --}}
@include("admin.components.select", [
  "label" => "Categories",
  "name" => "category_id",
  "options" => $category,
  "class" => "removable-select-input-select"
])

  <div>
</div>