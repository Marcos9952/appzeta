@extends('theme.sb.admin')
@section('titulo','Nuevo Menu')

@section('content')

    {{--<h1 class="h3 mb-4 text-gray-800">Crear Nuevo Menu</h1>--}}

    <button class="btn btn-primary  btn-user shadow-lg" data-toggle="modal" data-target='#mCrear'>Crear Menu</button>

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

                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <a href="#" class=" btn btn-primary btn-user btn-block">
                                        Registar
                                    </a>
                                </form>

                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>

    </div>

@endsection