@include("admin.components.select", [
  "label" => "Products",
  "name" => "product_id",
  "options" => $product,
  "class" => "removable-select-input-select"
])

@include("admin.components.input", [
  "label" => "Discount",
  "name" => "discount",
  "old"  => isset($offer) ? $offer -> discount : ""
])

@include("admin.components.input", [
  "label" => "End Date",
  "name" => "ended_at",
  "type" => "date",
  "old"  => isset($offer) ? $offer -> ended_at : ""
])


<div>

</div>