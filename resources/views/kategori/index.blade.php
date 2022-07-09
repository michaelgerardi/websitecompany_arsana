<h1>Tabel kategori</h1>
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
                <th>Nama Kategori</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($data_kategori as $kategori)
            <tr>
                <td>{{$kategori->nama_kategori}}</td>
                <td><a href="/EditKategori/{{$kategori->id}}">Edit</a></td>
                <td><a href="/kategoridelete/{{$kategori->id}}">Delete</a></td>
            </tr>
            @endforeach
</table>
<br>
<form action="/kategori/insert" method="POST">
      {{csrf_field()}}
      <div class="form-group has-feedback{{$errors->has('nama_kategori') ? 'has-error' : ''}}">
        <label class="control-label col-sm-2" for="email">Nama Kategori :</label>
        <div class="col-sm-10">
        <input name="nama_kategori" type="text" class="form-control" id="email" placeholder="Nama Kategori" >
          @if ($errors->has('nama_kategori'))
                <span class="help-block">
                    <p style="color: red">{{$errors->first('nama_kategori')}}</p>
                </span>
          @endif
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>