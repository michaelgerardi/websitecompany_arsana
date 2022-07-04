<h1>Table Blog</h1>
<table class="table">
   <tr>
        <th>Nama Blog</th>
        <th>Tanggal_blog</th>
        <th>Gambar</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
   </tr>
   @foreach($data_blog as $blog)
     @foreach($data_kategori as $kategori)
   <tr>
        <td>{{$blog->nama_blog}}</td>
        <td>{{$blog->tanggal_blog}}</td>
        <td><img src="{{asset('images/'.$blog->gambar)}}" height="100px" width="100px"></td>
        <td>{{$kategori->nama_kategori}}</td>
        <td>{{$blog->keterangan}}</td>
        <td>{{$blog->status}}</td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
   </tr>
     @endforeach
   @endforeach
</table>
<br>
<form action="/blog/insert" method="POST" enctype="multipart/form-data">
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
        <label for="exampleInputEmail1">Isi Blog</label>
        <textarea name="keterangan" id="" cols="30" rows="10"></textarea>
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">File Gambar</label>
        <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
     </div>
     <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status"class="form-control" id="exampleFormControlSelect1">
              <option value="Setuju">Setuju</option>
              <option value="Tidak Setuju">Tidak Setuju</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
</form>