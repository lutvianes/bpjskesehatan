@extends('layouts.sbadmin')
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Form Rujukan
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
			<form class="form-horizontal" role="form">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Div Regional</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Div Regional">
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Kantor Cabang</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPassword3" placeholder="Kantor Cabang">
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">No. Rujukan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="No. Rujukan">
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Puskesmas/Dokter</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Puskesmas/Dokter">
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Kabupaten/Kota</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Kabupaten/Kota">
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Poli Tujuan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Poli Tujuan">
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Rumah Sakit Tujuan</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Rumah Sakit Tujuan">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-2 text-right">
						<hr/>
						<h3 style="color:rgb(119, 119, 119)">Pasien</h3>
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">No. Kartu BPJS</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="No. Kartu BPJS">
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nama Pasien</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pasien">
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Umur</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEmail3" placeholder="Nama Pasien">
					</div>
				</div>

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>
					<div class="col-sm-10">
						<div class="radio">
							<label>
								<input type="radio" name="jenis_kelamin" value="L" checked="checked">Laki-laki
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="jenis_kelamin" value="P" checked="">Perempuan
							</label>
						</div>
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Status</label>
					<div class="col-sm-4">
						<select class="form-control" name="status">
							<option value="utama">Utama</option>
							<option value="tanggungan">Tanggungan</option>
						</select>
					</div>
				</div>
			
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Diagnosa</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

@stop