@extends('adminlte::page')

@section('title', 'Listagem do CSV')

@section('content_header')
    <h1></h1>
@stop

@section('content')




<div id="app">
    {{-- <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dados Abertos:</h3>
            </div>

            <br>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                <div id="" class="">
                    <div class="row">
                        <div class="col-sm-12">

                            <table id="myTable" class="table table-responsive display" role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr >
                                        <th>ID</th>
                                        <th>Ibge</th>
                                        <th>UF</th>
                                        <th>Cidade</th>
                                        <th>Nome</th>
                                        <th>Responsavel</th>
                                        <th>Telefone</th>
                                        <th>Endereço</th>
                                        <th>Numero</th>
                                        <th>Complemento</th>
                                        <th>Referencia</th>
                                        <th>Bairro</th>
                                        <th>CEP</th>
                                        <th>GeoLocalização</th>
                                        <th>Dt. Atualização</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ubs_lista as $ubs)
                                        <tr>
                                            <td>{{$ubs['id_equipamento']}}</td>
                                            <td>{{$ubs['ibge']}}</td>
                                            <td>{{$ubs['uf']}}</td>
                                            <td>{{$ubs['cidade']}}</td>
                                            <td>{{$ubs['nome']}}</td>
                                            <td>{{$ubs['responsavel']}}</td>
                                            <td>{{$ubs['telefone']}}</td>
                                            <td>{{$ubs['endereco']}}</td>
                                            <td>{{$ubs['numero']}}</td>
                                            <td>{{$ubs['complemento']}}</td>
                                            <td>{{$ubs['referencia']}}</td>
                                            <td>{{$ubs['bairro']}}</td>
                                            <td>{{$ubs['cep']}}</td>
                                            <td>{{$ubs['georef_location']}}</td>
                                            <td>{{$ubs['data_atualizacao']}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div> --}}
</div>










    <script>





    </script>
</div
@endsection
