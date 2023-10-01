<x-app-layout>
    <div class="pagetitle">
        <h1>Bezerros - Controle de Peso</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Relatórios</li>
                <li class="breadcrumb-item active">Bezerros - Controle de Peso</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section"  style="overflow: scroll">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bezerros</h5>
                        <div class="d-flex justify-content-between pb-5">
                            <p>Bezerros - Controle de Peso</p>
                            <a class="btn btn-primary" href="{{ route('peso-bezerro.create') }}">Cadastrar Nova
                                Pesagem</a>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Brinco</th>
                                    <th scope="col">Sexo</th>
                                    @isset($bezerros)
                                        @foreach ($bezerros as $bezerro)
                                        <th>{{ date('d/m/Y', strtotime($bezerro->data_nascimento)) }}</th>
                                            @foreach ($bezerro->peso as $peso)
                                                <th>{{ date('d/m/Y', strtotime($peso->data_pesagem)) }}</th>
                                            @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Nº {{ $bezerro->brinco }}</th>
                                        <td>{{ $bezerro->sexo }}</td>
                                        <td>{{ $bezerro->peso_nascimento }} KG</td>
                                        @foreach ($bezerro->peso as $peso)
                                            <td>{{ $peso->peso }} KG</td>
                                            {{-- <td>
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
                                                    </td> --}}
                                        @endforeach
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
