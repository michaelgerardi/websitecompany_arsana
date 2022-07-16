<h2> Form Request </h2>
<form action="{{route('insertreq')}}" method="post">
{{csrf_field()}}
<input type="hidden" value="{{Auth::user()->id}}" name="id">
    <div class="form-group">
            <label class="control-label col-sm-2" for="email">Bidang/Keahlian :</label>
            <div class="col-sm-10">
            <input name="bidang" type="text" class="form-control" id="email" placeholder="" value="">
            </div>
    </div>
    <div class="form-group">
            <label class="control-label col-sm-2" for="email">Pengalaman :</label>
            <div class="col-sm-10">
            <input name="pengalaman" type="text" class="form-control" id="email" placeholder="" value="">
            </div>
    </div>
    <div class="form-group">
            <label class="control-label col-sm-2" for="email">Pendidikan Terakhir :</label>
            <div class="col-sm-10">
            <input name="pdd_terakhir" type="text" class="form-control" id="email" placeholder="" value="">
            </div>
    </div>
        <button type="submit" class="btn btn-default">Submit</button>
</form>