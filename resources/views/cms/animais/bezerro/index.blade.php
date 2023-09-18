<x-app-layout>
    <div class="pagetitle">
        <h1>Bezerros</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Listar Animais</li>
                <li class="breadcrumb-item active">Bezerros</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bezerros</h5>
                        <p>Listagem dos Bezerros Cadastradas</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Brinco</th>
                                    <th scope="col">Mãe</th>
                                    <th scope="col">Peso</th>
                                    <th scope="col">Data de Nascimento</th>
                                    <th scope="col">Fazenda</th>
                                    <th scope="col">Observações</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($bezerros)
                                    @foreach ($bezerros as $bezerro)
                                        <tr>
                                            <th scope="row">Nº {{ $bezerro->brinco }}</th>
                                            <td>Nº {{ $bezerro->mae }}</td>
                                            <td>{{ $bezerro->peso_atual }} KG</td>
                                            <td>{{ date("d/m/Y", strtotime($bezerro->data_nascimento)) }}</td>
                                            <td>{{ $bezerro->fazenda }}</td>
                                            <td>{{ $bezerro->observacoes }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <form action="{{ route('bezerro.destroy', $bezerro->id) }}"
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
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
