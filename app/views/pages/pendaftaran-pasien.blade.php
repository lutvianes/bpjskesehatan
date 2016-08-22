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

	<style type="text/css">
	.search-bar > input,
	.search-bar > div {
		display: inline-block;
	}
	.search-bar > input {
		float: left;
		width: 30%;
	}
	</style>

	<div class="row">
		<div class="col-lg-12">
			<form class="form-horizontal" role="form" action="/pendaftaran/detail">

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Nomor BPJS</label>
					<div class="col-sm-10">
						<div class="search-bar">
				            <input type="text" class="form-control" placeholder="Nomor BPJS" name="search" id="search">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				            </div>
			            </div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

@stop