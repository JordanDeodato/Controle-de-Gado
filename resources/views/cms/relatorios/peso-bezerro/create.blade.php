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
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Nova Pesagem</h5>

                        <!-- Floating Labels Form -->
                        <form action="{{ route('peso-bezerro.store') }}" method="POST" class="row g-3">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="bezerro_id" id="bezerro_id" aria-label="Bezerro">
                                        @foreach ($bezerros as $bezerro)
                                            <option value="{{ $bezerro->id }}">Brinco {{ $bezerro->brinco }}</option>
                                        @endforeach
                                    </select>
                                    <label for="bezerro_id">Bezerro</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="data_pesagem"
                                            id="data_pesagem" placeholder="Data de Pesagem" value="{{ date('Y-m-d') }}">
                                        <label for="data_pesagem">Data de Pesagem</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="peso" id="peso"
                                        placeholder="Peso Atual">
                                    <label for="peso">Peso Atual</label>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form><!-- End floating Labels Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
