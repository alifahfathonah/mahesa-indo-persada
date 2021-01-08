<tr id="{{ $id }}">
    <td class="align-middle">
        @if ($sumber == 'edit')
        {{ $sumber == 'edit'? $row->moto_judul: '' }}
        @else
        <input type="text" class="form-control" placeholder="Judul" name="moto_judul[]" aria-describedby="basic-addon2">
        @endif
    </td>
    <td class="align-middle">
        @if ($sumber == 'edit')
        {{ $sumber == 'edit'? $row->moto_deskripsi: '' }}
        @else
        <textarea name="moto_deskripsi[]" class="form-control" placeholder="Deskripsi" rows="2"></textarea>
        @endif
    </td>
    <td class="align-middle">
        @if ($sumber == 'edit')
        <img src="{{ $row->moto_gambar }}" style="height: 50px" alt="">
        <input type="hidden" name="moto_gambar_old[]" value="{{ $row->moto_gambar }}">
        @else
        <input type="file" class="form-control" name="moto_gambar[]">
        @endif
    </td>
    <td class="align-middle">
        <button class="btn btn-warning" onclick="hapus('{{ $id }}')" type="button">Hapus</button>
    </td>
</tr>
