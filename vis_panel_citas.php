<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<h1 class="text-center">Gestionar Solicitudes de Inscripción</h1>
<section class="mb-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <span class="text-muted"></span>
        </div>
    </div>
</section>


<h4>Solicitudes Pendientes</h4>
<table id="tabla" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Derechohabiente</th>
            <th>Menor</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Juan Carlos Sanchez Trejo</td>
            <td>Jose Sanchez Trejo</td>
            <td>19/Marzo/2019</td>
            <td><a href="<?=$URL_BASE?>panel/docs"><span class="fui-exit"></span></a></td>
        </tr>

        <tr>
            <td>Juan Carlos Sanchez Trejo</td>
            <td>Jose Sanchez Trejo</td>
            <td>19/Marzo/2019</td>
            <td><a href="<?=$URL_BASE?>panel/docs"><span class="fui-exit"></span></a></td>
        </tr>

        <tr>
            <td>Juan Carlos Sanchez Trejo</td>
            <td>Jose Sanchez Trejo</td>
            <td>19/Marzo/2019</td>
            <td><a href="<?=$URL_BASE?>panel/docs"><span class="fui-exit"></span></a></td>
        </tr>

        <tr>
            <td>Juan Carlos Sanchez Trejo</td>
            <td>Jose Sanchez Trejo</td>
            <td>19/Marzo/2019</td>
            <td><a href="<?=$URL_BASE?>panel/docs"><span class="fui-exit"></span></a></td>
        </tr>
    </tbody>
</table>

<h4>Solicitudes Atendidas</h4>
<table id="tabla" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Derechohabiente</th>
            <th>Menor</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Juan Carlos Sanchez Trejo</td>
            <td>Jose Sanchez Trejo</td>
            <td>19/Marzo/2019</td>
            <td><a href="<?=$URL_BASE?>panel/docs"><span class="fui-exit"></span></a></td>
        </tr>

        <tr>
            <td>Juan Carlos Sanchez Trejo</td>
            <td>Jose Sanchez Trejo</td>
            <td>19/Marzo/2019</td>
            <td><a href="<?=$URL_BASE?>panel/docs"><span class="fui-exit"></span></a></td>
        </tr>

        <tr>
            <td>Juan Carlos Sanchez Trejo</td>
            <td>Jose Sanchez Trejo</td>
            <td>19/Marzo/2019</td>
            <td><a href="<?=$URL_BASE?>panel/docs"><span class="fui-exit"></span></a></td>
        </tr>

        <tr>
            <td>Juan Carlos Sanchez Trejo</td>
            <td>Jose Sanchez Trejo</td>
            <td>19/Marzo/2019</td>
            <td><a href="<?=$URL_BASE?>panel/docs"><span class="fui-exit"></span></a></td>
        </tr>
    </tbody>
</table>


<script>

    $(document).ready(function() {
        $('#alumno').change(function (e) {
            $('#nome').html(this.value);
            $('#tabla').fadeOut().fadeIn();
        });
    } );
</script>
