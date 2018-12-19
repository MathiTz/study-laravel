@extends('layout.principal')
@section('title', 'Forms')
@section('content')
        <div class="container form-group align-middle">
                {{ Form::open(array('url' => 'foo/bar', 'class' => 'form-horizontal'))}}
                <div class="col-lg-6">
                {{ Form::label('user', 'Username', array('class' => 'col-lg-2 control-label'))}} <br>
                    {{ Form::text('username', 'Username', array('class' => 'form-control'))}}
                    </div>
                <br>
                <hr>
                <div class="col-lg-6">
                {{ Form::label('email', 'E-Mail Address', array('class' => 'col-lg-2 control-label'))}} <br>
                    {{ Form::text('email', 'example@gmail.com', array('class' => 'form-control'))}}
                    </div>
                <br>
                <hr>
                <div class="col-lg-6">
                {{ Form::label('password', 'Password', array('class' => 'col-lg-2 control-label'))}} <br>
                    {{ Form::password('password', array('class' => 'form-control'))}}
                    </div>
                <br>
                <hr>
                <div class="col-lg-6">
                {{ Form::label('checkbox', 'Checkbox', array('class' => 'col-lg-2 control-label'))}} <br>
                    {{ Form::checkbox('name', 'value', array('class' => 'form-control'))}} Check me
                </div>
                <br>
                <hr>
                <div class="col-lg-6">
                {{ Form::label('radio', 'Radio', array('class' => 'col-lg-2 control-label'))}} <br>
                    {{ Form::radio('name', 'value', array('class' => 'form-control'))}} Buy <br>
                    {{ Form::radio('name', 'value', array('class' => 'form-control'))}} Sell <br>
                </div>
                <br>
                <hr>
                <div class="col-lg-6">
                {{ Form::label('file', 'Upload Files', array('class' => 'col-lg-2 control-label'))}} <br>
                    {{ Form::file('image', array('class' => 'form-control-file'))}}
                </div>
                <br>
                <hr>
                <div class="col-lg-6">
                {{ Form::label('select', 'Selecione uma opção', array('class' => 'col-lg-2 control-label'))}} <br>
                    {{ Form::select('size', array('L'=> 'Large', 'S' => 'Small'), ['class'=>'form-control'])}}
                </div>
                <br>
                <hr>
                <div class="col-lg-6">
                    {{ Form::submit('Click me!', array('class' => 'btn btn-primary'))}}
                </div>
                {{ Form::close()}}        
        </div>      
@endsection
