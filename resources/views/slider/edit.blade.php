<h1>Edit Slider</h1>
<form action="" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Slider</label>
            <input name="nama_slider"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Input</label>
            <input name="tanggal_slider"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">File Gambar</label>
            <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>