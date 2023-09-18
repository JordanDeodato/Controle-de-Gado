<x-app-layout>
    <div class="pagetitle">
        <h1>Touro</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
            <li class="breadcrumb-item">Editando Touro Brinco {{ $touro->brinco }}</li>
            <li class="breadcrumb-item active">Touro</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Editando Touro Brinco {{ $touro->brinco }}</h5>

                        <!-- Floating Labels Form -->
                        <form action="{{ route('touro.update', $touro->id) }}" method="POST" class="row g-3">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="brinco" id="brinco" placeholder="Brinco" value="{{ $touro->brinco }}">
                                    <label for="brinco">Brinco</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="cor_brinco" id="cor_brinco" placeholder="Cor do Brinco" value="{{ $touro->brinco }}">
                                    <label for="cor_brinco">Cor do Brinco</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="peso_atual" id="peso_atual" placeholder="Peso Atual" value="{{ $touro->brinco }}">
                                    <label for="peso_atual">Peso Atual</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="procedencia" id="procedencia"
                                        placeholder="Procedência" value="{{ $touro->brinco }}">
                                    <label for="procedencia">Procedência</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="raca" id="raca" placeholder="Raça" value="{{ $touro->brinco }}">
                                    <label for="raca">Raça</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="preco_compra" id="preco_compra" placeholder="Preço da Compra" value="{{ $touro->brinco }}">
                                        <label for="preco_compra">Preço da Compra</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fazenda" id="fazenda" placeholder="Fazenda" value="{{ $touro->brinco }}">
                                        <label for="fazenda">Fazenda</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Vacinas" name="vacinas" id="vacinas" style="height: 100px;">{{ $touro->brinco }}</textarea>
                                    <label for="vacinas">Vacinas</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Observações" name="observacoes" id="observacoes" style="height: 100px;">{{ $touro->brinco }}</textarea>
                                    <label for="observacoes">Observações</label>
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
