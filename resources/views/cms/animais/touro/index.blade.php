<x-app-layout>
    <div class="pagetitle">
        <h1>Touros</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Listar Animais</li>
                <li class="breadcrumb-item active">Touros</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Touros</h5>
                        <p>Listagem dos Touros Cadastradas</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Brinco</th>
                                    <th scope="col">Cor do Brinco</th>
                                    <th scope="col">Peso</th>
                                    <th scope="col">Procedência</th>
                                    <th scope="col">Raça</th>
                                    <th scope="col">Fazenda</th>
                                    <th scope="col">Observações</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($touros)
                                    @foreach ($touros as $touro)
                                        <tr>
                                            <th scope="row">Nº {{ $touro->brinco }}</th>
                                            <td>{{ $touro->cor_brinco }}</td>
                                            <td>{{ $touro->peso_atual }} KG</td>
                                            <td>{{ $touro->procedencia }}</td>
                                            <td>{{ $touro->raca }}</td>
                                            <td>{{ $touro->fazenda }}</td>
                                            <td>{{ $touro->observacoes }}</td>
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
