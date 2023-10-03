<div class="modal fade" id="modalFormProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="produk">
                    @csrf
                    <div id="method"></div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Nama Produk</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_produk" value="" name="nama_produk">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="kode" value="" name="code_produk" id="code_produk">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Barcode</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="barcode" value="" name="barcode_produk" id="barcode_produk">
                        </div>
                    </div>


                    <div class="input-group mb-3">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Harga jual</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="number" class="form-control" placeholder="Harga" name="hargajual_produk" id="hargajual_produk">
                    </div>

                    <div class="input-group mb-3">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Harga beli</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="number" class="form-control" placeholder="Harga" name="hargabeli_produk" id="hargabeli_produk">
                    </div>
                    <div class="form-group">
                        <label>Jenis</label>
                        <select class="custom-select" name="jenis_produk">
                            <option>Makanan</option>
                            <option>Minuman</option>
                            <option>Sabun</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>