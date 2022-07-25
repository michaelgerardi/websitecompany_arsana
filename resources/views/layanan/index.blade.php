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
        <th></th>
    </tr>
    @foreach()
    <tr>
        <td></td>
    </tr>
    @endforeach
</table>
<form action="" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
        <label for="exampleInputEmail1">Judul Layanan</label>
        <input name="judul_layanan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Layanan</label>
        <input name="jenis_layanan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Gambar Layanan</label>
        <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
    </div>
    <textarea name="deskripsi" cols="30" rows="10"></textarea>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>