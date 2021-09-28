<body>
    <div class="container"><br>
        <h1>Tambah Data</h1>
        <form action="proses" method="GET">
            @csrf
            <div class="form-group">
                <label for="namaProduk">Nama Produk</label>
                <input type="text" class="form-control" name="namaProduk" id="namaProduk"
                    value="{{ old('namaProduk') }}">
                @error('namaProduk')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori">
                    <option value="Mlektronik">Elektronik</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Fashion">Fashion</option>
                </select>
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" value="{{ old('harga') }}">
                @error('harga')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" id="deskripsi"
                    value="{{ old('deskripsi') }}">
                @error('deskripsi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" id="jumlah" value="{{ old('jumlah') }}">
                @error('jumlah')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">simpan</button>
        </form>


    </div>
</body>