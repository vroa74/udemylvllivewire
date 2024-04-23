@props(['thead'=> '', 'tfoot'=>''])
<div class="mb-3 d-flex justify-content-between">
    <div>
        <span>Mostrar</span>
        <select class="form-control">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="200">200</option>
        </select>
    </div>
    <div>
        <input type="search" class="form-control" placeholder="Buscar...">
    </div>

</div>
<table class="table table-striped table-responsive-md" >
    <caption>List of users</caption>
    <thead>
    <tr>
        {{$thead}}
    </tr>
    </thead>
    <tbody>
            {{$slot}}
    </tbody>
    <tfoot>
      {{$tfoot}}
    </tfoot>
</table>
