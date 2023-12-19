<x-app-layout>
    <div class="pagetitle">
        <h1>{{ $lote->name }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Lotes</li>
                <li class="breadcrumb-item active">{{ $lote->name }}</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lote->name }}</h5>
                        <div class="d-flex justify-content-between pb-5">
                            <p>{{ $lote->name }}</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Adicionar Bezerros ao Lote
                              </button>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Brinco</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Data de Nascimento</th>
                                    <th scope="col">Peso Nascimento</th>
                                    <th scope="col">Peso Atual</th>
                                    <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    @isset($bezerros)
                                        @foreach($bezerros as $bezerro)
                                        <th scope="row">Nº {{ $bezerro->brinco }}</th>
                                        <td>{{ $bezerro->sexo }}</td>
                                        <td>{{ date('d/m/Y', strtotime($bezerro->data_nascimento)) }}</td>
                                        <td>{{ $bezerro->peso_nascimento }} KG</td>
                                        <td>{{ $bezerro->peso_atual }} KG</td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{ route('lote-bezerro.destroy', $bezerro->id) }}"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <a href="{{ route('bezerro.edit', $bezerro->id) }}"
                                                        class="text-muted" type="button"> <i
                                                            class="bi bi-pencil-square"> </i>
                                                    </a>
                                                    <button type="submit" class="btn fs-8 me-sm-4 ">
                                                        <i class="bi bi-trash "></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endisset
                                <tr>
                                    <th scope="row"><strong>Peso Total do Lote</strong></th>
                                    <td><strong>{{$peso_count}} KG</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
    <x-cms.layout.modal-lote lote="{{$lote->id}}"/>
</x-app-layout>
