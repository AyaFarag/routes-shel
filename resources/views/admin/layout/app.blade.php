@extends("admin.layout.base")

@section("body")
<div class="row">
  <div class="col s3">
    @include("admin.layout.nav")
  </div>

  <div class="col s9">
    <div class="card">
      <div class="card-content">
        @section("content")

        @show
      </div>
    </div>
  </div>

</div>

@stop