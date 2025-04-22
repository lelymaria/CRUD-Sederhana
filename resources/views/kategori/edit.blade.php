@include('layout.header')

    <h3>Edit Kategori</h3>
    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="from-group">
            <label for="">Nama Kategori:</label>
            <input type="text" name="nama_kategori" id="" value="{{ $kategori->nama_kategori }}">
        </div>
        <button type="submit" class="tombol">Update</button>
    </form>

@include('layout.footer')
