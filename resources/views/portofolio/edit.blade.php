<h1>Edit Portofolio</h1>
<form action="{{route('ProsesEditportofolio')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$id}}">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama perusahaan</label>
            <input name="nama_perusahaan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Input</label>
            <input name="tanggal_input"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">File Gambar</label>
            <input name="gambar" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>     