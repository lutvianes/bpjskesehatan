@extends('layouts.sbadmin')
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Pendaftaran - Detail Pasien
			</h1>
			<ol class="breadcrumb">
				<li>
				    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
				</li>
				<li class="active">
				    <i class="fa fa-desktop"></i> Bootstrap Elements
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<form class="form-horizontal" role="form" action="/pendaftaran/submit">

	<div class="row">
		<div class="col-md-12">
			
			<div class="form-group">

				<div class="col-md-6">
					<label for="inputEmail3" class="col-sm-4 control-label">Layanan tujuan</label>
					<div class="col-sm-8">
						<select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
				
				<div class="col-md-2">
					<button class="btn btn-success">Lanjut »</button>
				</div>

			</div>

		</div>

	</div>
	<hr/>

	<div class="row">
		<div class="col-md-3">
			<img class="img-thumbnail" src="http://placehold.it/400x400" alt="" width="100" height="100">
		</div>

		<div class="col-md-9">
			<h4>Data User</h4>
			<div class="table-responsive">
				<table class="table">
					<tr>
						<td width="30%">Tes</td>
						<td width="25px">:</td>
						<td>Content</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<hr/>
			<h4>History Rujukan</h4>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th width="10%">Tanggal</th>
						<th>Rujukan</th>
						<th>Dokumen</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>2014-03-05</td>
						<td>Dari Dr. Fauzan</td>
						<td><a href="#">download</a></td>
					</tr>
				</tbody>
				</table>
			</div>
		</div>
	</div>

	</form>
	</div>
	</div>
@stop