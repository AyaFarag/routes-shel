<ul id="slide-out" class="sidenav sidenav-fixed">
  <li>
    <div>
      <div class="nav-logo">
        <img class="responsive-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Firefox_Logo%2C_2017.svg/1200px-Firefox_Logo%2C_2017.svg.png" />
      </div>
    </div>
  </li>
  <li>
    <ul class="collapsible">
      @foreach (config("admin-nav")["items"] as $item)
        @if (!empty($item["submenu"]))
          <li>
            <div class="collapsible-header">
              @if (!empty($item["icon"]))
                <i class="material-icons">{{ $item["icon"] }}</i>
              @endif
              {{ $item["label"] }}
            </div>
            <div class="collapsible-body">
              <ul>
                @foreach ($item["submenu"] as $subItem)
                  <li>
                    <a href="{{ $subItem['route'] }}">
                      @if (!empty($subItem["icon"]))
                        <i class="material-icons">{{ $subItem["icon"] }}</i>
                      @endif
                      {{ $subItem["label"] }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </li>
        @else
          <li
            @if ($item["route"] === url() -> current())
              class="active"
            @endif
          >
            <a href="{{ $item['route'] }}">
              @if (!empty($item["icon"]))
                <i class="material-icons">{{ $item["icon"] }}</i>
              @endif
              {{ $item["label"] }}
            </a>
          </li>
        @endif
      @endforeach
    </ul>
  </li>
</ul>
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>