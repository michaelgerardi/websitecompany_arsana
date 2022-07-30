<h1>Table Portofolio</h1>
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
            <th>Nama perusahaan</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($data_portofolio as $portofolio)
        <tr>
           
            <td>{{$portofolio->nama_perusahaan}}</td>
            <td>{{$portofolio->tanggal_input}}</td>
            <td><img src="{{asset('portofolio/'.$portofolio->gambar)}}" height="100px" width="100px"></td>
            <td><a class="btn btn-warning" role="button" href="/editportofolio/{{$portofolio->id}}">Edit</a></td>
            <td><a class="btn btn-danger" role="button" href="/portofoliodelete/{{$portofolio->id}}">Delete</a></td>
        
        </tr>
        @endforeach
    </table>
     {!! $data_portofolio->links() !!} 
  <br>
    <form action="/portofolio/insert" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama perusahaan</label>
            <input name="nama_perusahaan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Input</label>
            <input name="tanggal_input"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">File Gambar</label>
            <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>