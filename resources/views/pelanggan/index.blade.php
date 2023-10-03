@extends('Home.home')
@push('style')
@endpush
@section('content')



<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pelanggan</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalFormPelanggan">
                Tambah Pelanggan </button>
            <div>
                @include('pelanggan.data')
            </div>
            <!-- /.modal -->
        </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    @include('pelanggan.form')
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
@push('script')
<script>
    $('#success-alert').fadeTo(5000, 500).slideUp(500, function() {
        $('#success-alert').slideUp(500)
    })

    $('error-alert').fadeTo(10000, 500).slideUp(500, function() {
        $('error-alert').slideUp(500)
    })

    $('#tbl-produk').DataTable()



    $('.delete-data').on('click', function(e) {
        console.log('deleteeee')
        e.preventDefault()
        const data = $(this).closest('tr').find('td:eq(1)').text()
        Swal.fire({
            title: `Apakah data <span style ="color:red">${data}</span> akan dihapus?`,
            text: "data tidak bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data ini!'
        }).then((result) => {
            if (result.isConfirmed)
                $(e.target).closest('form').submit()
            else swal.close()
        })
    })

    $('#modalFormPelanggan').on('show.bs.modal', function(e) {
        const btn = $(e.relatedTarget)
        console.log(btn.data('mode'))
        const mode = btn.data('mode')
        const kode_pelanggan = btn.data('kode_pelanggan')
        const nama = btn.data('nama')
        const alamat = btn.data('alamat')
        const no_telp = btn.data('no_telp')
        const email = btn.data('email')
        const id = btn.data('id')
        const modal = $(this)
        console.log(mode)

        if (mode == 'edit') {
            modal.find('.modal-title').text('Edit Data Pelanggan')
            modal.find('#kode_pelanggan').val(kode_pelanggan)
            modal.find('#nama').val(nama)
            modal.find('#alamat').val(alamat)
            modal.find('#no_telp').val(no_telp)
            modal.find('#email').val(email)
            modal.find('.modal-body form').attr('action', '{{ url("pelanggan") }}/' + id)
            modal.find('.modal-title').text('Edit Data Pelanggan')
            modal.find('#method').html('@method("PATCH")')
        } else {
            modal.find('.modal-title').text('Input Data Produk')
            modal.find('#kode_pelanggan').val('')
            modal.find('#nama').val('')
            modal.find('#alamat').val('')
            modal.find('#no_telp').val('')
            modal.find('email').val('')
            modal.find('#method').html('')
            modal.find('.modal-body_form').attr('action', '{{ url("pelanggan") }}')


        }
    })
</script>
@endpush