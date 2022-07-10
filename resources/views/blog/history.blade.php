<h1>Table History Data Konten</h1>

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
         <th>Tanggal Hapus</th>
        <th>Nama Blog</th>
        <th>Tanggal_blog</th>
        <th>Gambar</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Restor Data</th>
        <th>Delete Permanen</th>
            
    </tr>
    @foreach($data_blog as $blog)
    <tr>
        <td>{{$blog->deleted_at->format('d/m/y')}}</td>
        <td>{{$blog->nama_blog}}</td>
        <td>{{$blog->tanggal_blog}}</td>
        <td><img src="{{asset('images/'.$blog->gambar)}}" height="100px" width="100px"></td>
        <td>{{DB::table('kategori')->where('id',$blog->id_kategori)->value('nama_kategori')}}</td>
        <td>{{$blog->keterangan}}</td>
        <td>{{$blog->status}}</td>  
        <td><a href="/restore_data/{{$blog->id}}">restore</a></td>
        <td><a href="/Destroy_data/{{$blog->id}}">Delete Data</a></td>
    </tr>
    @endforeach
</table>