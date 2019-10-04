@extends('theme.sb.admin')
@section('titulo','Nuevo Menu')

@section('content')

    <!--boton que llama el modal crear menu-->
    <button class="d-sm-inline-block btn btn-sm btn-primary btn-user shadow-lg" data-toggle="modal" data-target='#mCrear'>Crear Menu</button>



    <!--modal crear menu-->
    <div class="modal fade" id="mCrear">

        <div class="modal-dialog modal-dialog-centered">
            
            <div class="modal-content">

                <!-- Circle Buttons -->
                <div class="card shadow mb-4">
                    <div class="modal-header">
                        <h6 class="m-0 h5 font-weight-bold text-primary">Nuevo Menu</h6>
                        <button type="button" class="close" data-dismiss="modal"><i class="far fa-times-circle"></i></button>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-4">

                                <form action="{{ route('guardar_menu')}}" id="form-general" class="user" method="POST">

                                   @csrf
                                    
                                   @include('admin.menu.form')

                                   @include('includes.btn-registrar')

                                </form>

                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>

    </div>

    {{--<script>
        
        $('#nombre').addClass('d-none');
        $('#url').addClass('d-none');
        $('#icono').addClass('d-none');
        
        $.ajax({
            type: 'POST',
            url: "{{ route('guardar_menu')}}",

            data: {
                _token: CSRF_TOKEN,
                nombre: nombre,
                url:    url,
                icono:  icono,
            },

            error: function (data){
                var errors = data.responseJSON;
                if($.isEmptyObject(errors) == false){
                    $.each(errors.errors,function(key,value){
                        var ErrorId = '#'+ key + 'Error';
                        $(ErrorId).removeClass("d-none");
                        $(ErrorId).text(value);
                    })
                }                
            }

        });
        
        
    </script>--}} 
    @if ($errors->any())
        <script>
            $('#mCrear').modal('show');
        </script>
    @endif


@endsection