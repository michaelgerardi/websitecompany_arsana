<h1>Tabel layanan</h1>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table>
    <tr>
        <th>Nama layanan</th>
        <th>Jenis Layanan</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
   @foreach($data_layanan as $layanan)
    <tr>
        <td>{{$layanan->judul_layanan}}</td>
        <td>{{$layanan->deskripsi}}</td>
        <td>{{$layanan->jenis_layanan}}</td>
        <td><img src="{{asset('layanan/'.$layanan->gambar)}}" height="100px" width="100px"></td>
            <td><a class="btn btn-warning" role="button" href="/editlayanan/{{$layanan->id}}">Edit</a></td>
            <td><a class="btn btn-danger" role="button" href="/layanandelete/{{$layanan->id}}">Delete</a></td>
    </tr>
 @endforeach
</table>
<form action="/layanan/insert" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail1">Judul Layanan</label>
        <input name="judul_layanan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Layanan">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Layanan</label>
        <input name="jenis_layanan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Layanan">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Gambar Layanan</label>
        <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
    </div>
    <textarea name="deskripsi" cols="30" rows="10"></textarea>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>