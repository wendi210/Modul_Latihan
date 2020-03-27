@extends('layout.admin') 
@section('content')
<div class="page-header">
    <div class="page-header-content">
        <div >
            <h4 class="">
                <i class="icon-home position-left"></i>
                <span class="text-semibold">Daftar Obat</span></h4>
            <a class="heading-elements-toggle">
                <i class="icon-more"></i>
            </a>
        </div>
        <div class="heading-elements">
            <ul class="breadcrumb position-right">
                <li>
                <a href="{{route('beranda.index')}}">Home</a>
                </li>
                <li>
                <a href="">Kategori</a>
                </li>
                <li class="active">Daftar Obat</li>
            </ul>
        </div>
    </div>
    <!-- /header content -->
</div>
<div class="content">
					<!-- Main charts -->
					<div class="row">
						<div class="col-lg-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
                <h6 class="panel-title">Biodata<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
											</div>
										</form>
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-2">
											<ul class="list-inline text-center">
												<li class="text-left">
                          <div class="text-semibold">Nama</div>
                          <div class="text-semibold">NIM</div>
                          <div class="text-semibold">Program Studi</div>
												</li>
											</ul>
										</div>

										<div class="col-lg-4">
											<ul class="list-inline text-justify">
												<li class="text-left">
													<div class="text-semibold">I Nengah Wendiana</div>
                          <div class="text-semibold">1815051060</div>
                          <div class="text-semibold">Pendidikan Teknik Informatika</div>
												</li>
											</ul>
                    </div>                    
                  </div>
							</div>
							<!-- /traffic sources -->

            </div>
          </div>
          <div class="row">
						<div class="col-lg-6">
							<div class="panel panel-flat">
								<div class="panel-heading">
                <h6 class="panel-title">Studi Kasus<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									<div class="heading-elements">
										<form class="heading-form" action="#">
											<div class="form-group">
											</div>
										</form>
									</div>
								</div>

								<div class="container-fluid">
									<div class="row">
										<div class="col-lg-2">
											<ul class="list-inline text-center">
												<li class="text-left">
                          <div class="text-semibold">Judul</div>
                          <div class="text-semibold">Penjelasan</div>
												</li>
											</ul>
										</div>

										<div class="col-lg-6">
											<ul class="list-inline text-justify">
												<li class="text-left">
													<div class="text-semibold">Sistem Manajemen Apotek</div>
                          <div class="text-semibold">Sistem Manajemen Apotek merupakan sebuah ide untuk memanajemen transaksi pada sebuah apotek</div>
												</li>
											</ul>
                    </div>                    
                  </div>
							</div>
							<!-- /traffic sources -->

            </div>
          </div>
						
@endsection