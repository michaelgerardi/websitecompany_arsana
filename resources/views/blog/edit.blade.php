<h1>Update Blog</h1>
<form action="{{route('ProsesEdit_blog')}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
<input type="hidden" value="{{$data_blog->id}}" name="id">
<div class="form-group">
        <label for="exampleInputEmail1">Nama Blog</label>
        <input name="nama_blog"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_blog->nama_blog}}">
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
        <input name="tanggal_blog"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_blog->tanggal_blog}}">
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Isi Blog !!!!</label>
        <textarea name="keterangan" id="" cols="30" rows="10">{{$data_blog->keterangan}}</textarea>
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">File Gambar</label>
        <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
     @if(Auth::guard('admin')->check())
     <div class="form-group">
         <label for="exampleFormControlSelect1">Status</label>
         <select name="status"class="form-control" id="exampleFormControlSelect1">
         <option value="1">Setuju</option>
         <option value="0">Tidak Setuju</option>
         </select>
      </div>
      @endif
          <button type="submit" class="btn btn-primary">Submit</button>
</form>