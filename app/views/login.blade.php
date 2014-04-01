@extends('website')

@section('content')

<div class="container">
    {{ Form::open(array('url' => 'login', 'class' => 'form-signin form-horizontal')) }}
        
        <h2 class="">Créer un nouveau compte</h2>
        
        <div class="control-group ">
            {{ Form::label('email', 'Mail', array('class' => 'control-label')) }}
            
            <div class="controls">                
                {{ Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'adresse mail')) }}
            </div>
        </div>

        <div class="control-group ">
            {{ Form::label('name', 'Pseudo', array('class' => 'control-label')) }}
            
            <div class="controls">                
                {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'pseudonyme')) }}
            </div>
        </div>
        
        <div class="control-group ">
            {{ Form::label('password', 'Mot de passe', array('class' => 'control-label')) }}
            
            <div class="controls">                
                {{ Form::text('password', '', array('class' => 'form-control', 'placeholder' => 'mot de passe')) }}
            </div>
        </div>
        
        <br/>
        
        {{ Form::submit('Valider', array('class' => 'btn btn-primary')) }}
        
    {{ Form::close() }}
</div>

@stop