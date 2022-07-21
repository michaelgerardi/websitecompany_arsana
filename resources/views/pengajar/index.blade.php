<h1>Tampilan Pengajar</h1>

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
<form action="" method="get">
  <label for="kat">Choose a car:</label>
  <select name="kat" id="cars">
   @foreach($data_kategori as $kate)
    <option value="{{$kate->id}}">{{$kate->nama_kategori}}</option>
    @endforeach
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
<table class="table">
   <tr>
        <th>Nama Blog</th>
        <th>Tanggal_blog</th>
        <th>Gambar</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Edit</th>
        <th>Delete</th>
   </tr>
   @foreach($data_blog as $blog)
  
   <tr>
        <td>{{$blog->nama_blog}}</td>
        <td>{{$blog->tanggal_blog}}</td>
        <td><img src="{{asset('images/'.$blog->gambar)}}" height="100px" width="100px"></td>
        <td>{{$blog->nama_kategori}}</td>
        <td>{{$blog->keterangan}}</td>
        <td><a href="/Editblog/{{$blog->id}}">Edit</a></td>
        <td><a href="/blogdelete/{{$blog->id}}">Delete</a></td>
   </tr>
   @endforeach
</table>
<br>
<form action="" method="POST" enctype="multipart/form-data">
     {{csrf_field()}}
     <div class="form-group">
        <label for="exampleInputEmail1">Nama Blog</label>
        <input name="nama_blog"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
     </div>
     <div class="form-group">
        <label for="exampleInputPegawai">Kategori</label>
        <select name="id_kategori" id="exampleInputPegawai">
          @foreach ($data_kategori as $kategori)
            <option value={{$kategori->id}}>{{$kategori->nama_kategori}}</option>
          @endforeach
        </select>
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Blog</label>
        <input name="tanggal_blog"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Deskripsi</label>
        <textarea name="keterangan" id="" cols="30" rows="10"></textarea>
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">File Gambar</label>
        <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
     </div>
          <button type="submit" class="btn btn-primary">Submit</button>
</form>