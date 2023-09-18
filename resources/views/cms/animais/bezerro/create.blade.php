<x-app-layout>
    <div class="pagetitle">
        <h1>Bezerro</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item">Cadastrar Novo Animal</li>
                <li class="breadcrumb-item active">Bezerro</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar Novo Bezerro</h5>

                        <!-- Floating Labels Form -->
                        <form class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="brinco" placeholder="Brinco">
                                    <label for="brinco">Brinco</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cor-brinco" placeholder="Cor do Brinco">
                                    <label for="cor-brinco">Cor do Brinco</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="sexo" placeholder="Sexo">
                                    <label for="sexo">Sexo</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="procedencia"
                                        placeholder="Procedência">
                                    <label for="procedencia">Procedência</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="mae" aria-label="Mãe">
                                        <option value="Vaca Solteira">Vaca 1</option>
                                        <option value="Vaca Parida">Vaca 2</option>
                                        <option value="Vaca Prenha">Vaca 3</option>
                                    </select>
                                    <label for="mae">Mãe</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control" id="nascimento" placeholder="Data de Nascimento">
                                        <label for="nascimento">Data de Nascimento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="raca" placeholder="Raça">
                                    <label for="raca">Raça</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="peso_nascimento" placeholder="Peso Nascimento">
                                    <label for="peso_nascimento">Peso Nascimento</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="peso_atual" placeholder="Peso Atual">
                                    <label for="peso_atual">Peso Atual</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="peso_desmame" placeholder="Peso Desmame">
                                    <label for="peso_desmame">Peso Desmame</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="preco-compra"
                                        placeholder="Preço da Compra">
                                        <label for="preco-compra">Preço da Compra</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="desmame" placeholder="Previsão de Venda/Desmame">
                                        <label for="desmame">Previsão de Venda/Desmame</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="fazenda" placeholder="Fazenda">
                                        <label for="fazenda">Fazenda</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Vacinas" id="vacinas" style="height: 100px;"></textarea>
                                    <label for="vacinas">Vacinas</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Observações" id="observacoes" style="height: 100px;"></textarea>
                                    <label for="observacoes">Observações</label>
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
