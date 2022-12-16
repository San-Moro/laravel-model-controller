@php
    $menuLinks = [
        [
            'item_text' => 'Movies',
            'route_name' => 'movies',
        ],
        [
            'item_text' => 'Link',
            'route_name' => '',
        ],
        [
            'item_text' => 'Link',
            'route_name' => '',
        ],
        [
            'item_text' => 'Link',
            'route_name' => '',
        ],
        
    ];
@endphp

<header>
    <div class="container d-flex justify-content-between my-3">
        <div class="logo"><h1>LOGO</h1></div>
        <nav class="menu-header d-flex align-items-center">
            <ul class="nav">
                @foreach ($menuLinks as $menuLink)
                    <li>
                        <a class="{{ Route::currentRouteName() === $menuLink['route_name'] ? 'active' : '' }}"
                            href="{{ $menuLink['route_name'] != '' ? route($menuLink['route_name']) : '' }}">{{ $menuLink['item_text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>