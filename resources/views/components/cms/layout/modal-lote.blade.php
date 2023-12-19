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
                                            <td class="d-flex justify-content-end">
                                                <form action="" id="lote-form-{{ $bezerro->id }}">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="lote_id" value="{{ $lote }}">
                                                    <input type="hidden" name="bezerro_id" value="{{ $bezerro->id }}">
                                                    <button class="btn btn-primary" type="submit"> <i class="bi bi-plus-square"></i> </button>
                                                </form>
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('#exampleModal form').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"] i');
            fetch('/lote-bezerro', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (submitButton) {
                    submitButton.classList.remove('bi-plus-square');
                    submitButton.classList.add('bi-check');
                }
            })
            .catch(error => {
                console.error('Erro:', error);
                // Reverter para o ícone original em caso de erro
                if (submitButton) {
                    submitButton.classList.add('bi-plus-square');
                    submitButton.classList.remove('bi-check');
                }
            });
        });
    });
});

</script>
