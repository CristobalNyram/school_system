@switch(Auth::user()->role_id)
    @case(1)
    @case(2)
    @case(3)
    @include('dashboard.admin_info')

    @case(4)
<<<<<<< HEAD
    @case(5)
    @include('dashboard.student_info')
=======
    {{-- @include('dashboard.student_info') --}}
>>>>>>> e34c7049456cd23cd4cb47fac4457b9c170c8b03

        @break


    @case(6)

        @break
    @case(7)

        @break

    @default
         @include('dashboard.general_info')

        @break

@endswitch

