<ul class="nav navbar-nav menu-inline">
@foreach($items as $menu_item)
    
    @php
        $submenu = $menu_item->children;
    @endphp
    
    <li @if(isset($submenu) && count($submenu)>0) class="dropdown" @endif>
        <a class="text-center" href="{{ $menu_item->url }}">{{ $menu_item->title }}
        </a>
        

        @if(isset($submenu) && count($submenu)>0)
            <span data-toggle="dropdown" class="dropdown-toggle">
				<i class="ion-arrow-down-b"></i>
			</span>
            <ul class="dropdown-menu">
                @foreach($submenu as $item)
                    <li><a href="{{$item->url}}">{{$item->title}} </a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach
</ul>