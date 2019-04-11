<div class="container">
    <table class="table table-success bg-light table-hover" style="margin-top: 30px;">
        <thead>
            <tr char="active">
                @yield('tabletitle')
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @yield('tablebody')
                <th scope="row"><button type="button" class="funci btn btn-outline-success btn-sm" data-toggle="modal" data-target="#visualization">Visualizar</button></th>
            </tr>
        </tbody>
    </table>
</div>