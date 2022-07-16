<h1>Tabel Request</h1>
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
                <th>Nama User</th>
                <th>Bidang</th>
                <th>Pengalaman</th>
                <th>Pendidikan Terakhir</th>
                <th>Menu</th>
            </tr>
            @foreach ($data_req as $row)
            <tr>
                <td>{{DB::table('users')->where('id', $row->user_id)->value('name')}}</td>
                <td>{{$row->bidang}}</td>
                <td>{{$row->pengalaman}}</td>
                <td>{{$row->pdd_terakhir}}</td>
                <td><a href="/LihatReq/ApproveReq/{{$row->user_id}}">Approve</a></td>
            </tr>
            @endforeach
</table>
