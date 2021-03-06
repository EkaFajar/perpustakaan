<style>
table { position: relative; border-collapse:collapse; width: 100%; }
table td { border:1px solid #000; padding: 5px; }
h1,h2,p { margin: 0; text-align: center;}
p { padding-bottom: 15px; margin-bottom: 15px; border-bottom: 8px double #000; }
.title { background: #f277e8; }
</style>

<h1>FAJAR'S LIBRARY</h1>
<h2>GOOGLE INDONESIA</h2>
<p>Jl Elang No 46 Jakarta, Telp : (021) 33456789 , www.fajlibs.com, fajar@libs.com</p>

<table>
    <tr class="title">
        <td width="3%">#</td>
        <td width="10%">No Anggota</td>
        <td width="30%">Nama</td>
        <td width="30%">Alamat</td>
        <td width="27%">Email</td>
    </tr>
    @foreach($anggota as $rsAngg)
    <tr>
        <td>{{ $rsAngg->kd_anggota }}</td>
        <td>{{ $rsAngg->no_anggota }}</td>
        <td>{{ $rsAngg->nama }}</td>
        <td>{{ $rsAngg->alamat." ".$rsAngg->kota }}</td>
        <td>{{ $rsAngg->email }}</td>
    </tr>    
    @endforeach
</table>
