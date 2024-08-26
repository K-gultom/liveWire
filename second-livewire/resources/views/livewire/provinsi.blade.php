<div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">Tambah Data</div>
                    <div class="card-body">
                        <form wire:submit="saveProvinsi">
        
                            <label for="namaProvinsi">Masukkan Nama Provinsi</label>
                            <input 
                                class="form-control mb-4" 
                                type="text" 
                                wire:model="namaProvinsi" 
                                placeholder="Type Here...">
                         
                            <div class="container text-end ">
                                <button class="btn btn-primary btn-md" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table border-dark border">
                    <thead>
                        <th class="text-center">No</th>
                        <th class="text-center">Provinsi</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">Sumsel</td>
                            <td class="text-center">Edit &nbsp; Delete</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
