<x-app-layout>
    <div class="pagetitle">
        <h1>Vacas</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Listar Animais</li>
                <li class="breadcrumb-item active">Vacas</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Vacas</h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Brinco</th>
                                    <th scope="col">Cor do Brinco</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Procedência</th>
                                    <th scope="col">Fazenda</th>
                                    <th scope="col">Observações</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($vacas)
                                    @foreach ($vacas as $vaca)
                                        <tr>
                                            <th scope="row">{{ $vaca->brinco }}</th>
                                            <td>{{ $vaca->cor_brinco }}</td>
                                            <td>{{ $vaca->categoria }}</td>
                                            <td>{{ $vaca->procedencia }}</td>
                                            <td>{{ $vaca->fazenda }}</td>
                                            <td>{{ $vaca->observacoes }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <form action="{{ route('vaca.destroy', $vaca->id) }}"
                                                        method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        <a href="{{ route('vaca.edit', $vaca->id) }}"
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
