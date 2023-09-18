<x-app-layout>
    <div class="pagetitle">
        <h1>Bezerro</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Editando Bezerro Brinco {{ $bezerro->brinco }}</li>
                <li class="breadcrumb-item active">Bezerro</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Editando Bezerro Brinco {{ $bezerro->brinco }}</h5>

                        <!-- Floating Labels Form -->
                        <form action="{{ route('bezerro.update', $bezerro->id) }}" method="POST" class="row g-3">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="brinco" id="brinco"
                                        placeholder="Brinco" value="{{ $bezerro->brinco }}">
                                    <label for="brinco">Brinco</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="cor_brinco" id="cor_brinco"
                                        placeholder="Cor do Brinco" value="{{ $bezerro->cor_brinco }}">
                                    <label for="cor_brinco">Cor do Brinco</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="sexo" id="sexo"
                                        placeholder="Sexo" value="{{ $bezerro->sexo }}">
                                    <label for="sexo">Sexo</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="procedencia" id="procedencia"
                                        placeholder="Procedência" value="{{ $bezerro->procedencia }}">
                                    <label for="procedencia">Procedência</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="mae" id="mae" aria-label="Mãe">
                                        @foreach ($vacas as $vaca)
                                            <option @if($vaca->brinco == $bezerro->mae) selected @endif value="{{ $vaca->brinco }}">Brinco {{ $vaca->brinco }}</option>
                                        @endforeach
                                    </select>
                                    <label for="mae">Mãe</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" name="data_nascimento"
                                            id="data_nascimento" placeholder="Data de Nascimento" value="{{ $bezerro->data_nascimento }}">
                                        <label for="data_nascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="raca" id="raca"
                                        placeholder="Raça" value="{{ $bezerro->raca }}">
                                    <label for="raca">Raça</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="peso_nascimento"
                                        id="peso_nascimento" placeholder="Peso Nascimento" value="{{ $bezerro->peso_nascimento }}">
                                    <label for="peso_nascimento">Peso Nascimento</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="peso_atual" id="peso_atual"
                                        placeholder="Peso Atual" value="{{ $bezerro->peso_atual }}">
                                    <label for="peso_atual">Peso Atual</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="peso_desmame" id="peso_desmame"
                                        placeholder="Peso Desmame" value="{{ $bezerro->peso_desmame }}">
                                    <label for="peso_desmame">Peso Desmame</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="preco_compra"
                                            id="preco_compra" placeholder="Preço da Compra" value="{{ $bezerro->preco_compra }}">
                                        <label for="preco_compra">Preço da Compra</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="desmame" id="desmame"
                                            placeholder="Previsão de Venda/Desmame" value="{{ $bezerro->desmame }}">
                                        <label for="desmame">Previsão de Venda/Desmame</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fazenda" id="fazenda"
                                            placeholder="Fazenda" value="{{ $bezerro->fazenda }}">
                                        <label for="fazenda">Fazenda</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Vacinas" name="vacinas" id="vacinas" style="height: 100px;">{{ $bezerro->vacinas }}</textarea>
                                    <label for="vacinas">Vacinas</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Observações" name="observacoes" id="observacoes"
                                        style="height: 100px;">{{ $bezerro->observacoes }}</textarea>
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
