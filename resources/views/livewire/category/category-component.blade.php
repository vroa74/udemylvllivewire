<div>
    <x-card cardTitle="Listado de Categorias ({{$this->totalRegistros}})"  cardFooter="CardFooter" >  <!-- carTitle ="card title" carTools="card tools" carFooter=" card footer" -->
        <x-slot:cardTools>
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa-regular fa-square-plus"></i></a>
        </x-slot:cardTools>
            <x-table cardTitle="Listado de Categorias">
                <x-slot:thead>
                    <tr>
                        <th>Id</th>
                        <th>name</th>
                        <th class="text-center" width="20%">acciones</th>
                    </tr>
                </x-slot:thead>
                <tr> <td>1</td> <td>Jose@jose.com</td> <td class="text-center" width="20%">
                        <a href="#" class="btn btn-info btn-sm"><i class="fa-regular fa-square-plus"></i></a>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></a>
                    </td> </tr>
                <tr> <td>1</td> <td>Jose@jose.com</td> <td class="text-center" width="20%" >
                        <a href="#" class="btn btn-info btn-sm"><i class="fa-regular fa-square-plus"></i></a>
                        <a href="#" class="btn btn-warning btn-sm"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></a></td> </tr>
            </x-table>
    </x-card >
    <x-modal modalTitle="Categorias" modalId="exampleModal" >
        <form wire:submit="store">

            <div class="input-group mb-3 input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Name</span>
                </div>
                <input wire:model="name" type="text" class="form-control" placeholder="nombre de la categoria">
            </div>
            @error('name')
               <div class="alert alert-danger mt-1">
                    <strong>{{$message}}</strong>
                </div>
            @enderror

            <button  class="btn bg-green-600 text-white  float-right">Guardar </button>
        </form>

    </x-modal>
</div>
