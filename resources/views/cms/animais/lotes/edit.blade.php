<x-app-layout>
    <div class="pagetitle">
        <h1>Cadastrar Novo Lote</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Lotes</li>
                <li class="breadcrumb-item active">Cadastrar Novo Lote</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Novo Lote</h5>

                        <!-- Floating Labels Form -->
                        <form action="{{ route('lotes.update', $lote->id) }}" method="POST" class="row g-3">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nome do Lote" value="{{ $lote->name }}">
                                    <label for="peso">Nome do Lote</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </form><!-- End floating Labels Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
