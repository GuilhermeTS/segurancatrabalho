<div class="container">
    <table class="table table-success bg-light table-hover" style="margin-top: 30px;">
        <thead>
            <tr char="active">
                {{ $head }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>