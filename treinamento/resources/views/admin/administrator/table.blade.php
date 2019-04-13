<div class="container">
    <table class="table table-success bg-light table-hover" style="margin-top: 30px;">
        <thead>
            <tr char="active">
                {{ $head }}
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {{ $slot }}
                <th scope="row"><button type="button" class="funci btn btn-outline-success btn-sm" data-toggle="modal" data-target="#visualization">Visualizar</button></th>
                <th scope="row"><button type="button" class="funci btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#change">Alterar</button></th>
                <th scope="row"><button type="button" class="funci btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#delete">Excluir</button></th>
            </tr>
        </tbody>
    </table>
</div>