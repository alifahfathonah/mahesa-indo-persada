<div class="input-group mb-3" id="{{ $id }}">
    @if ($sumber == 'edit')
    <img src="{{ $row->bangunan_lain_gambar }}" class="w-50" alt="">
    <input type="hidden" name="bangunan_lain_gambar_old[]" value="{{ $row->bangunan_lain_gambar }}">
    <button class="btn btn-warning" onclick="hapus('{{ $id }}')" type="button">Hapus</button>
    @else
    <input type="file" class="form-control" name="bangunan_lain_gambar[]" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn btn-warning" onclick="hapus('{{ $id }}')" type="button">Hapus</button>
    </div>
    @endif
</div>
