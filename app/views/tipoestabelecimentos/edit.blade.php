@extends("layouts.master")
@section("content")
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Cadastro de Tipo de Estabelecimentos</h2>
        </div>
        <div class="row">
            {{Form::open(['url' => 'clientes', 'class'=> 'col s12'])}}
                <div class="row">
                    <div class="input-field col s4">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        {{Form::text('descricao', $value = null, array('class'=> 'validate', 'required' => 'required', 'autofocus' => 'autofocus' )) }}
                        {{Form::label('descricao','Descrição:')}}
                    </div>
                    <div class="input-field col s4">
                        {{Form::select('size', array('0' => 'Inativo', '1' => 'Ativo'))}}
                        {{Form::label('status','Status:')}}
                    </div>
                    <div class="input-field col s4">
                    </div>

                </div>

            </form>
        </div>
    </div>
@stop
