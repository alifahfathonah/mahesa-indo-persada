<div class="input-group mb-3" id="{{ $id }}">
    <input type="text" class="form-control" name="rumah_fasilitas[]" value="{{ $sumber == 'edit'? $row->rumah_fasilitas: '' }}" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn btn-warning" onclick="hapus('{{ $id }}')" type="button">Hapus</button>
    </div>
</div>
