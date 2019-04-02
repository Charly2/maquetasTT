<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<h1 class="text-center">Citas de Entrevistas</h1>
<section class="mb-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <span class="text-muted">El día de la entrevista es necesario llegar 10 min antes y presentarse con el Trabajador Social del Centro de Desarrollo Infantil</span>
        </div>
    </div>
</section>

<div class="row mb-4">
    <div class="col-md-3 ">
        <label><b>Menor de Edad Inscrito*:</b></label>
    </div>
    <div class="col-md-3">
        <select type="text" name="" id="alumno" class="form-control">
            <option value="Juan Carlos Sanchez Trejo">Juan Carlos Sanchez Trejo</option>
            <option value="Oscar Eduardo García García">Oscar Eduardo García García</option>
        </select>
    </div>
</div>
<h4>Citas Programadas para <span id="nome">Juan Carlos Sanchez Trejo</span></h4>
<table id="tabla" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Cita</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Hora</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Prueba Médica</td>
            <td>Clementina Batalla de Bassols</td>
            <td>19/Marzo/2019</td>
            <td>13:20 AM</td>
        </tr>
        <tr>
            <td>Prueba de Nutrición</td>
            <td>Clementina Batalla de Bassols</td>
            <td>19/Marzo/2019</td>
            <td>12:20 PM</td>
        </tr>
        <tr>
            <td>Prueba Pedagógica</td>
            <td>Clementina Batalla de Bassols</td>
            <td>19/Marzo/2019</td>
            <td>11:20 pm</td>
        </tr>
        <tr>
            <td>Prueba Odontológica</td>
            <td>Clementina Batalla de Bassols</td>
            <td>19/Marzo/2019</td>
            <td>12:20 PM</td>
        </tr>
        <tr>
            <td>Prueba de Trabajo Social</td>
            <td>Clementina Batalla de Bassols</td>
            <td>19/Marzo/2019</td>
            <td>13:20 PM</td>
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
