@include("admin.components.input", [
  "name" => "title",
  "label" => "Title",
  "old"  => isset($page) ? $page -> title : ""
])

@include("admin.components.input", [
  "name" => "content",
  "label" => "Content",
  "old"  => isset($page) ? $page -> content : ""
])

<div>

</div>