<div class="modal" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Bezerros ao Lote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bezerros</h5>
                        <p>Listagem dos Bezerros Cadastradas</p>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">Brinco</th>
                                    <th scope="col">Adicionar ao Lote</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($bezerros)
                                    @foreach ($bezerros as $bezerro)
                                        <tr>
                                            <th scope="row">Nº {{ $bezerro->brinco }}</th>
                                            <td>
                                                <div class="d-flex">
                                                    <form action="{{ route('bezerro.destroy', $bezerro->id) }}"
                                                        method="post">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        <a href="{{ route('bezerro.edit', $bezerro->id) }}"
                                                            class="text-muted" type="button"> <i
                                                                class="bi bi-plus-square"> </i>
                                                        </a>
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
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
