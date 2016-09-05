@extends("layouts.master")
@section("content")
    <table class="striped">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Editar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipoestabelecimentos as $tipoestabelecimento)
                <tr>
                    <td>{{$tipoestabelecimento->descricao}}</td>
                    <td><a href='{{link_to("/tipoestabelecimentos/{$tipoestabelecimento->id}")}}' class="btn waves-effect waves-light">Editar</a></td>
                    <td>
                        @if ($tipoestabelecimento->status == 1 )
                            <button class="btn waves-effect waves-light">Desativar</button>
                        @else
                            <button class="btn waves-effect waves-light">Ativar</button>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
