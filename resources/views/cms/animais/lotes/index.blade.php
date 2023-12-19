<x-app-layout>
    <div class="pagetitle">
        <h1>Lotes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Lotes</li>
                <li class="breadcrumb-item active">Lotes</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section" style="overflow: scroll">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Lotes</h5>
                        <div class="d-flex justify-content-between pb-5">
                            <p>Lotes</p>
                            <a class="btn btn-primary" href="{{ route('lotes.create') }}">Cadastrar Novo
                                Lote</a>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Nome do Lote</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($lotes as $lote)
                                        <td>{{ $lote->name }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{ route('lotes.destroy', $lote->id) }}"
                                                    method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <a href="{{ route('lotes.show', $lote->id) }}" class="text-muted"
                                                        type="button"> <i class="bi bi-eye-fill"> </i>
                                                    </a>
                                                    <a href="{{ route('lotes.edit', $lote->id) }}" class="text-muted"
                                                        type="button"> <i class="bi bi-pencil-square"> </i>
                                                    </a>
                                                    <button type="submit" class="btn fs-8 me-sm-4 p-0">
                                                        <i class="bi bi-trash "></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
