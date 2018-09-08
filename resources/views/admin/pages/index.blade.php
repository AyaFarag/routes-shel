@extends("admin.layout.app")

@section("navbar")
  <h4>Pages</h4>
  @include("admin.components.navbar-search", [
    "route"       => route("admin.pages.index"),
    "placeholder" => "Search by name"
  ])
@stop

@section("content")
  <div class="padded-container">
    <div class="card">
      <div class="card-content no-padding">
        @include("admin.components.crud-table", [ // how can i override delete button to disable it ? 
          "baseRouteName" => "admin.pages",
          "notFound"      => "No Page were found!",
          "items"         => $page,
          "model"         => \App\Models\Page::class,
          "columns"       => [
            "title"  => ["label" => "Page Name"],
            
          ]
        ])
      </div>
    </div>
  </div>
  @can("create", \App\Models\Page::class)
    {{-- @include("admin.components.floating-fab", [
      "to"         => route("admin.pages.create"),
      "tooltip"    => "New Page",
      "attributes" => [
        "id" => "create-item"
      ]
    ]) --}}
    @include("admin.components.feature-discovery", [
      "target"  => "create-item",
      "title"   => "Create a new Page",
      "color"   => "secondary",
      "content" => "You can click on this floating fab to create a new Page.<br /> You'll only see this message once!"
    ])
  @endcan
@stop