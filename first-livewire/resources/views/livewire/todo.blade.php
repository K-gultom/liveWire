<div class="container">
    @if ($errors->any())
        <div class="pt-3">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    @if (session()->has('msg'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
        </div>
    @endif


    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <form>
            <div class="mb-3 row">
                <label for="title" class="col form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model="title" placeholder="Title...">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal" class="col form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" wire:model="tanggal">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" cols="10" rows="2" wire:model="description"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 form-label"></label>
                <div class="col-sm-10">
                    <button class="btn-primary btn" type="button" wire:click="store()">Simpan Todo</button>
                </div>
            </div>
        </form>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        {{ $data->links() }}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col">Title</th>
                    <th class="col-md-3">Tanggal</th>
                    <th class="col-md-3">Desc</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            
            
            <tbody>
                @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ $data->firstItem() + $key}}</td>
                        <td>{{ $value->title }}</td>
                        <td>{{ \Carbon\Carbon::parse($value->tanggal)->format('d/m/Y') }}</td>
                        <td>{{ $value->description }}</td>
                        <td>
                            <a wire:click="edit({{ $value->id}})" class="btn btn-warning btn-sm">Edit</a>
                            <a wire:click="delete_confirmation({{ $value->id }})" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Del</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>


</div>
