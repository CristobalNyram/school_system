



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
                    // showCancelButton: true,
                    confirmButtonText: 'Si, si quiero solicitarlo',
                    denyButtonText: `Cancelar solicitud`,
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                            let url_enviar=
                                    $.ajax({
                                    type: "POST",
                                    url:url_enviar ,
                                    success: function(res)
                                        {
                                            if(res[0]==2)
                                            {
                                            alertify.alert(res['titular'],res['mensaje'], function(){
                                                location.reload();
                                            });
                                            }
                                            else
                                            {
                                            alertify.alert(res['Error'],res['mensaje'], function(){
                                                location.reload();
                                            });
                                            }
                                        },
                                    error: function(res)
                                    {

                                    }
                                });

                        // Swal.fire('Saved!', '', 'success')
                    } else if (result.isDenied) {
                        Swal.fire('Cancelado', '', 'error')
                    }
            })




            }


    </script>


    @foreach ($packages_available as $package)
    <div class="col-md-4 mt-3">

        <div class="card card-pricing bg-success border-0 text-center mb-4" style="background-image: url('../../../assets/img/ill/pattern_pricing1.svg">
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

