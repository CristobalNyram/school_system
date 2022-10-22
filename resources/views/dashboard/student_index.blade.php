

<div class="d-flex">
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
                        Swal.fire('Saved!', '', 'success')
                    } else if (result.isDenied) {
                        Swal.fire('Cancelado', '', 'error')
                    }
            })
            /*
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
                    */

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
        <button type="button" class="btn btn-link text-white mb-3" >Ver detalles</button>
        </div>
        <div class="card-footer bg-transparent">
        <a  onclick="fnSolicitarPaquete('{{$package->id }}','{{$package->name }}');" class=" text-white" style="cursor: -webkit-grab; cursor: grab;">Solicitar paquete</a>
        </div>
    </div>

</div>

    @endforeach






</div>

