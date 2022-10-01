@switch(Auth::user()->role_id)
    @case(1)
    @case(2)
    @case(3)
    @include('dashboard.admin_info')

    @case(4)

        @break


    @case(6)

        @break
    @case(7)

        @break

    @default
         @include('dashboard.general_info')

        @break

@endswitch

