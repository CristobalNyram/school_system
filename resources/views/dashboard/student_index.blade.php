


@if (check_if_requested_package()!=true && check_if_requested_package_paid_out()!=true)
<div class="d-flex">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">

    <script>
            function fnSolicitarPaquete(package_id,package_name)
            {
                // alert();

            let url_enviar='';
            Swal.fire({
                    title: '¿Estás seguro de que quieres solicitar el paquete '+package_name+' ?',
                     showDenyButton: true,
                    icon:'question',
                    confirmButtonText: 'Si, si quiero solicitarlo',
                    denyButtonText: `Cancelar solicitud`,
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    let _token="{{ csrf_token()}}";
                    if (result.isConfirmed) {


                            let route = "{{ route('paymentRequest') }}";
                            let token = "{{ csrf_token()}}";
                            $.ajax({
                                url: route,
                                type: 'POST',
                                data: {
                                    _token:token,
                                    package_id:package_id,


                                },
                                success: function(response) {
                                    if(response['status']===2){
                                          Swal.fire({title:response['title'],text:response['message'],icon:"success"})
                                                        .then((value) => {

                                                            location.reload();

                                                        })

                                    }else{
                                        Swal.fire({title:response['title'],text:response['message'],icon:"error"})
                                                        .then((value) => {
                                                            location.reload();

                                                        })
                                    }


                                },
                                error: function(xhr) {
                                    alert('Error en el servidor...');
                                }});
                        // Swal.fire('Saved!', '', 'success')
                    } else if (result.isDenied) {
                        Swal.fire('Cancelado', '', 'error')
                    }
            })




            }


    </script>


    @foreach ($packages_available as $package)
    <div class="col-md-4 mt-3">

        <div class="card card-pricing bg-success border-0 text-center mb-4 col-12" >
        <div class="card-header bg-transparent">
        <h2 class="text-uppercase ls-1 text-white py-3 mb-0">Paquete: {{ $package->name }}</h2>
        </div>
        <div class="card-body">
        <div class="display-2 text-white">${{ $package->price }}</div>
        <br>
        <span class=" text-white">Por persona</span>
        <ul class="list-unstyled my-4">
            <li>
            <div class="d-flex align-items-center justify-content-center">
                <div>
                <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-success">
                    <i class="ni ni-book-bookmark"></i>
                </div>
                </div>
                <div class=' '>
                <span class="pl-2  pb-4 text-sm text-white">{{ $package->description }}</span>
                </div>
            </div>
            </li>
            <br>

        </ul>
        <button type="button" class="btn btn-link text-white mb-3" data-toggle="modal" data-target="#modal-notification" >Ver detalles</button>
        </div>
        <div class="card-footer bg-transparent">
        <a  onclick="fnSolicitarPaquete('{{$package->id }}','{{$package->name }}');" class=" text-white" style="cursor: -webkit-grab; cursor: grab;">Solicitar paquete</a>
        </div>
    </div>

</div>

    @endforeach

    <div class="row">

        <div class="col-md-4">
        <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-info">

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title-notification">Detalles del paquete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h2 class="text-white mt-4">¡Paquete XXX  XXXXX!</h2>

                    </div>
                    <div class="py-3 ">

                        <h2 class="heading mt-4">Descripción:</h2>

                    </div>
                    <div class="py-3 ">

                        <h2 class="heading mt-4">Tallerista:</h2>

                    </div>

                    <div class="py-3 ">

                        <h2 class="heading mt-4">Curso:</h2>

                    </div>
                    <div class="py-3 ">

                        <h2 class="heading mt-4">Descripción:</h2>

                    </div>
                    <div class="py-3 ">

                        <h2 class="heading mt-4">Requerimientos:</h2>

                    </div>

                    <div class="py-3 ">

                        <h2 class="heading mt-4">Precio:</h2>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-white  ml-auto" data-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
        </div>
        </div>

</div>



    <!-- Large modal -->

<!-- Small modal -->




</div>
@endif
@if (check_if_requested_package()==true && check_if_enrolled_in_course()==false)
<div class="container mt-2">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-inner--icon"><i class="ni ni-app"></i></span>
        <span class="alert-inner--text h3 text-white"><strong class="h1 text-white">¡Aviso!</strong> <br> Tu solicitud de pago se ha realizado correctamente, por favor ve con un administrador del evento para poder validar tu pago...</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif
{{-- enrrol to curse start --}}
@if (check_if_requested_package_paid_out()==true && check_if_enrolled_in_course()==false)



    <div class="row">



        @foreach ($courses_available as $course)
        <div class="col-12 col-lg-6">

          <div class="card card-profile border border-primary m-2 " data-image="img-raised">
        <div class="card-header-image">
          <a href="javascript:;">
            <div >
                   <img class="" src="{{asset($course->url_img )}}" width="100%"  height="300px" alt="No cargo la imagen del curso {{ $course->title }}">
             </div>
          </a>
        <div class="card-title text-danger text-center">
           Profesor: {{ $course->teacher->name }}
          </div>
        </div>
        <div class="card-body">
          <h6 class="card-category text-warning text-center h3">{{ $course->title }}</h6>
          <p class="card-description text-center">
            {{ $course->description }}
          </p>
        </div>
        <div class="card-footer text-center">

          <button type="button" class="btn btn-simple btn btn-dribbble">
            <span class="btn-inner--icon"><i class="fab fa-book"></i></span>
            Incribirme a este curso
          </button>

        </div>
      </div>

        </div>


      @endforeach
    </div>
@endif
{{-- enrrol to curse end --}}
