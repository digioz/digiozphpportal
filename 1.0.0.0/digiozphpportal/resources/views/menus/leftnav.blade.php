
<ul>
    @foreach ($menus as $menu)
        @if ($menu->url != null)
            <li><a href="{{ action('PagesController@index', $menu->url, array($menu->url)) }}">{{ $menu->name }}</a></li>
        @else
            <li><a href="{{ url(strtolower($menu->controller . '/'. $menu->action)) }}">{{ $menu->name }}</a></li>
        @endif
    @endforeach
</ul>
