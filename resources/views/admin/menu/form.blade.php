<div class="form-group">
    <label class="small font-weight-bold requerido">Nombre</label>
    <input type="text" class="form-control form-control-user " id="nombre" name="nombre" value="{{ old('nombre')}}"  placeholder="Nombre . . .">
    {!! $errors->first('nombre','<small class="text-danger">:message *</small>') !!}

    <span class="text-danger" id="nombre"></span>
</div>

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <label class="small font-weight-bold requerido">Url</label>
        <input type="text" class="form-control form-control-user " id="url" name="url" value="{{ old('url')}}"  placeholder="Url Menu. . .">
        {!! $errors->first('url','<small class="text-danger">:message *</small>')!!}
    
        <span class="text-danger" id="url"></span>
    </div> 
    <div class="col-sm-6">
        <label class="small font-weight-bold">Icono Font Fawesome</label>
        <input type="text" class="form-control form-control-user " id="icono" name="icono" value="{{ old('icono')}}" placeholder="Nombre Icono. . .">
        {!! $errors->first('icono','<small class="text-danger">:message *</small>')!!}
        
        <span class="text-danger" id="icono"></span>
    </div>
</div>
{{--<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
    </div>
    <div class="col-sm-6">
    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
    </div>
</div>
--}}
