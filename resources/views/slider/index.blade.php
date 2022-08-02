<h1>Table Slider</h1>
    <!-- table script -->
<style>
    .navbar-custom {
      background-color: #BB0A1E;
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
      color: #ffff;
    }
  </style>

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

  <!-- Tabel Style -->
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
            <th>Nama Slider</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($data_slider as $slider)
        <tr>
            
            <td>{{$slider->nama_slider}}</td>
            <td>{{$slider->tanggal_slider}}</td>
            <td><img src="{{asset('slider/'.$slider->gambar)}}" height="100px" width="100px"></td>
            <td><a class="btn btn-warning" role="button" href="/editslider/{{$slider->id}}">Edit</a></td>
            <td><a class="btn btn-danger" role="button" href="/slidedelete/{{$slider->id}}">Delete</a></td>
           
        </tr>
        @endforeach
    </table>
  <br>
    <form action="/slider/insert" method="POST" enctype="multipart/form-data">
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

