<div class="input-group mb-3" id="{{ $id }}">
    @if ($sumber == 'edit')
    <img src="{{ $row->rumah_gambar }}" class="w-50" alt="">
    <input type="hidden" name="rumah_gambar_old[]" value="{{ $row->rumah_gambar }}">
    <button class="btn btn-warning" onclick="hapus('{{ $id }}')" type="button">Hapus</button>
    @else
    <input type="file" class="form-control" name="rumah_gambar[]" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn btn-warning" onclick="hapus('{{ $id }}')" type="button">Hapus</button>
    </div>
    @endif
</div>
