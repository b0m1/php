<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $juego->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anho') }}
            {{ Form::text('anho', $juego->anho, ['class' => 'form-control' . ($errors->has('anho') ? ' is-invalid' : ''), 'placeholder' => 'Año']) }}
            {!! $errors->first('anho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('plataforma_id') }}
            {{ Form::select('plataforma_id', $plataformas,$juego->plataforma_id, ['class' => 'form-control' . ($errors->has('plataforma_id') ? ' is-invalid' : ''), 'placeholder' => 'Plataforma']) }}
            {!! $errors->first('plataforma_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero_id') }}
            {{ Form::select('genero_id', $generos,$juego->genero_id, ['class' => 'form-control' . ($errors->has('genero_id') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado_id') }}
            {{ Form::select('estado_id', $estado,$juego->estado_id, ['class' => 'form-control' . ($errors->has('estado_id') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
