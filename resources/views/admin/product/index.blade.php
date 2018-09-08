@extends("admin.layout.app")

@section("navbar")
  <h4>Products</h4>
  @include("admin.components.navbar-search", [
    "route"       => route("admin.product.index"),
    "placeholder" => "Search by name"
  ])
@stop

@section("content")
  <div class="padded-container">
    <div class="card">
      <div class="card-content no-padding">
        @include("admin.components.crud-table", [
          "baseRouteName" => "admin.product",
          "notFound"      => "No product were found!",
          "items"         => $product,
          "model"         => \App\Models\Product::class,
          "columns"       => [
            "name"  => ["label" => "Name"],
            "category"  => [
              "label" => "Category",
              "transform" => function($value, $category){
                return $product->category->name;
              }
            ],
          ]
        ])
      </div>
    </div>
  </div>
  @can("create", \App\Models\Product::class)
    @include("admin.components.floating-fab", [
      "to"         => route("admin.product.create"),
      "tooltip"    => "New Product",
      "attributes" => [
        "id" => "create-item"
      ]
    ])
    @include("admin.components.feature-discovery", [
      "target"  => "create-item",
      "title"   => "Create a new product",
      "color"   => "secondary",
      "content" => "You can click on this floating fab to create a new product.<br /> You'll only see this message once!"
    ])
  @endcan
@stop