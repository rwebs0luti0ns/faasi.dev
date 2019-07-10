@switch($active)

    @case('category-page')


    @break

    @default

    <li class="active">
        <a href="{{ url('user/dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
    </li>

@endswitch

