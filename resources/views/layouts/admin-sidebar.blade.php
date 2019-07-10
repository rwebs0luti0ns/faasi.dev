@switch($active)

    @case('franchisee-page')

    @break

    @default
    {{-- DASHBOARD SIDEBAR PAGE --}}

    <li class="active">
        <a href="{{ url('admin/dashboard') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
    </li>

@endswitch
