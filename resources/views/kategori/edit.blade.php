<h2> Table Edit </h2>
<form action="{{route('ProsesEditKategori')}}" method="post">
{{csrf_field()}}
<input type="hidden" value="{{$data_kategori->id}}" name="id">
    <div class="form-group">
            <label class="control-label col-sm-2" for="email">Nama Kategori :</label>
            <div class="col-sm-10">
            <input name="nama_kategori" type="text" class="form-control" id="email" placeholder="nama kategori" value="{{$data_kategori->nama_kategori}}">
            </div>
    </div>
        <button type="submit" class="btn btn-default">Submit</button>
</form>