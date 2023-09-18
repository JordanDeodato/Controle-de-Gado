<x-app-layout>
    <div class="pagetitle">
        <h1>Vaca</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
            <li class="breadcrumb-item">Editando Vaca Brinco {{ $vaca->brinco }}</li>
            <li class="breadcrumb-item active">Vaca {{ $vaca->brinco }}</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Editando Vaca Brinco {{ $vaca->brinco }}</h5>

                        <!-- Floating Labels Form -->
                        <form action="{{ route('vaca.update', $vaca->id) }}" method="POST" class="row g-3">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="brinco" id="brinco" placeholder="Brinco" value="{{ $vaca->brinco }}">
                                    <label for="brinco">Brinco</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="cor_brinco" id="cor_brinco" placeholder="Cor do Brinco" value="{{ $vaca->cor_brinco }}">
                                    <label for="cor_brinco">Cor do Brinco</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="categoria" id="categoria" aria-label="Categoria">
                                        <option @if($vaca->categoria == "Vaca Solteira") selected @endif value="Vaca Solteira">Vaca Solteira</option>
                                        <option @if($vaca->categoria == "Vaca Parida") selected @endif value="Vaca Parida">Vaca Parida</option>
                                        <option @if($vaca->categoria == "Vaca Prenha") selected @endif value="Vaca Prenha">Vaca Prenha</option>
                                        <option @if($vaca->categoria == "Novilha") selected @endif value="Novilha">Novilha</option>
                                    </select>
                                    <label for="categoria">Categoria</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="procedencia"  id="procedencia"
                                        placeholder="Procedência" value="{{ $vaca->procedencia }}">
                                    <label for="procedencia">Procedência</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="idade" id="idade"
                                        placeholder="Idade" value="{{ $vaca->idade }}">
                                    <label for="idade">Idade</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="raca" id="raca"
                                        placeholder="Raça" value="{{ $vaca->raca }}">
                                    <label for="raca">Raça</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="preco_compra" id="preco_compra" placeholder="Preço da Compra" value="{{ $vaca->preco_compra }}">
                                        <label for="preco_compra">Preço da Compra</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="paricoes" id="paricoes" placeholder="Parições" value="{{ $vaca->paricoes }}">
                                        <label for="paricoes">Parições</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="data_primeira_cria" id="data_primeira_cria" placeholder="Data 1ª Cria" value="{{ $vaca->data_primeira_cria }}">
                                        <label for="data_primeira_cria">Data 1ª Cria</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="data_ultima_cria" id="data_ultima_cria" placeholder="Data Última Cria" value="{{ $vaca->data_ultima_cria }}">
                                        <label for="data_ultima_cria">Data Última Cria</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fazenda" id="fazenda" placeholder="Fazenda" value="{{ $vaca->fazenda }}">
                                        <label for="fazenda">Fazenda</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Vacinas" name="vacinas" id="vacinas" style="height: 100px;">{{ $vaca->vacinas }}</textarea>
                                    <label for="vacinas">Vacinas</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Observações" name="observacoes" id="observacoes" style="height: 100px;">{{ $vaca->observacoes }}</textarea>
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
