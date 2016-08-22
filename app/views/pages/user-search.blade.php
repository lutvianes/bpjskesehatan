@extends('layouts.sbadmin')
@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				Pendaftaran Pasien
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
		<div class="col-md-12">
			<form class="navbar-form" role="search">
		        <div class="input-group">
					<label>Masukan ID pendaftar</label>
					<div>
			            <input type="text" class="form-control" placeholder="Nomor BPJS" name="search" id="search">
			            <div class="input-group-btn">
			                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			            </div>
		            </div>
		        </div>
	        </form>
		</div>
	</div>
@stop