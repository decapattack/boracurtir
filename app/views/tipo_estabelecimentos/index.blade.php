@extends("layouts.default")
@section("content")
<h2>
    {{Form::open()}}
    <div class="row">
        <div class="input-field col s6">
            {{Form::text('nome', $value = null, array('placeholder' => '', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
            <label for="first_name">Nome</label>
        </div>
    </div>
    {{Form::close()}}
</h2>
@stop
