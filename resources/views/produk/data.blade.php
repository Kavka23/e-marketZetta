<table class="table table-compact table-stripped" id="tbl-produk">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Code</th>
            <th>Barcode</th>
            <th>Jenis</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Tools</th>

        </tr>
    </thead>
    <tbody>
        @foreach($produk as $p)
        <tr>
            <td>{{$i = !isset($i)?1:$i+1}}</td>
            <td>{{ $p -> nama_produk}}</td>
            <td>{{ $p -> code_produk}}</td>
            <td>{{ $p -> barcode_produk}}</td>
            <td>{{ $p -> jenis_produk}}</td>
            <td>{{ $p -> hargajual_produk}}</td>
            <td>{{ $p -> hargabeli_produk}}</td>
            <td><button class="btn" data-toggle="modal" data-target="#modalFormProduk" data-mode="edit" data-id="{{ $p->id }}" data-nama_produk="{{ $p->nama_produk }}">
                    <i class="fas fa-edit"></i>
                </button>
                <form method="post" action="{{ route('produk.destroy', $p->id) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn text-danger delete-data btn-delete" data-nama_produk="{{ $p->nama_produk }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>