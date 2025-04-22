@include('layout.header')

    <h3>Penerbit</h3>
    <table>
        <tbody>
            <td width=150px>Nama Penerbit</td>
            <td width=2px>:</td>
            <td>{{ $penerbit->nama_penerbit }}</td>
        </tbody>
    </table>

@include('layout.footer')
