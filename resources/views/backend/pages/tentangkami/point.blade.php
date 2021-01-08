<tr id="{{ $id }}">
    <td class="align-middle">
        @if ($sumber == 'edit')
        {{ $sumber == 'edit'? $row->service_judul: '' }}
        @else
        <input type="text" class="form-control" placeholder="Judul" name="service_judul[]" aria-describedby="basic-addon2">
        @endif
    </td>
    <td class="align-middle">
        @if ($sumber == 'edit')
        {{ $sumber == 'edit'? $row->service_deskripsi: '' }}
        @else
        <textarea name="service_deskripsi[]" class="form-control" placeholder="Deskripsi" rows="2"></textarea>
        @endif
    </td>
    <td class="align-middle">
        @if ($sumber == 'edit')
        <img src="{{ $row->service_gambar }}" style="height: 50px" alt="">
        <input type="hidden" name="service_gambar_old[]" value="{{ $row->service_gambar }}">
        @else
        <input type="file" class="form-control" name="service_gambar[]">
        @endif
    </td>
    <td class="align-middle">
        <button class="btn btn-warning" onclick="hapus('{{ $id }}')" type="button">Hapus</button>
    </td>
</tr>

