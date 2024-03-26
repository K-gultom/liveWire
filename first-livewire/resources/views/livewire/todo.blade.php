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

    @if (session()->has('message_todo'))
        <div class="pt-3">
            <div class="alert alert-success">
                {{ session('message_todo') }}
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
                    <button class="btn-primary btn" wire:submit="store()">Simpan Todo</button>
                </div>
            </div>
        </form>
    </div>
</div>
