@extends('admin.layout.index')
@section('Content')
<div class="container">
	<div>
		<h3 style="text-align: center;">DANH SÁCH SINH VIÊN</h3>
		<h4><a href="them" class="btn btn-primary">Thêm</a><h4>
	</div>
	@if(session('thông báo'))
	 <div class="alert alert-danger">
	 	{{session('thông báo')}}
	 </div>
	 @endif
</div>
<p></p>
<div class="container">
<table border="1" width="100%" style="margin-left: 5px;margin-right: 5px" class="table">
	<thead class="thead-light">
		<tr align="center">
			<th>ID</th>
			<th>Mã Sinh Viên</th>
			<th>Họ Tên</th>
			<th>Ngày Sinh</th>
			<th>Giới Tính</th>
			<th>ID_Ngành</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($sp as $sp)
		<tr align="center">
			<td>{{$sp->id}}</td>
			<td>{{$sp->masv}}</td>
			<td>{{$sp->hoten}}</td>
			<td>{{$sp->ngaysinh}}</td>
			<td>{{$sp->gioitinh}}</td>
			<td>{{$sp->id_nganh}}-{{$sp->nganh->tennganh}}</td>
			<td class="center"><i class="fa fa-pencil fa-fw"></i><a href="sua/{{$sp->id}}">Sửa</a></td>
			<td class="center"><i class="fa fa-trash-o fa-fw"></i><a href="xoa/{{$sp->id}}">Xóa</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
<p></p>
@endsection