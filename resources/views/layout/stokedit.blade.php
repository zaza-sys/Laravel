<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventory Buku</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset ('/')}}assets/dist/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-5" href="{{ url('main')}}">Amalia Buku</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ url('/')}}"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" href="{{ route('main')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Halaman Utama
                            </a>
                            <a class="nav-link" href="{{ route('bukumasuk.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                                Data Buku Masuk
                            </a>
                            <a class="nav-link" href="{{ route('bukukeluar.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open"></i></div>
                                Data Buku Keluar
                            </a>
                            <a class="nav-link" href="{{ route('databuku.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-box-archive"></i></div>
                                Stok Buku
                            </a>
                            @if (auth()->user()->level=="Admin")
                            <a class="nav-link" href="{{ route('user.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Manajemen User
                            </a>
                            @endif
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Stok Buku</h1>
                        <form action="{{ route('databuku.update', $data_buku->kode_buku)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-5">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $data_buku->tanggal }}" readonly >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Kode Buku</label>
                                    <div class="col-sm-5">
                                        <input type="text" name = "kode_buku" class="form-control" id="kodebuku" value="{{ $data_buku->kode_buku }}" readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Buku</label>
                                    <div class="col-sm-5">
                                        <input type="text" name = "nama_buku" value="{{ $data_buku->nama_buku }}" class="form-control" id="namabuku">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-5">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">Rp.</span>
                                            <input type="text" name ="harga" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" id="harga" value="{{ $data_buku->harga }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Harga Satuan</label>
                                    <div class="col-sm-5">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">Rp.</span>
                                            <input type="text" name="harga_satuan" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" id="hargasatuan" value="{{ $data_buku->harga_satuan }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Harga Grosir</label>
                                    <div class="col-sm-5">
                                        <div class="input-group flex-nowrap">
                                            <span class="input-group-text" id="addon-wrapping">Rp.</span>
                                            <input type="text" name="harga_grosir" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" id="hargagrosir" value="{{ $data_buku->harga_grosir }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Masuk</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="jumlah_masuk" class="form-control" id="jumlahmasuk" value="{{ $data_buku->jumlah_masuk }}">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Satuan</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="satuan" class="form-control" id="satuan" value="{{ $data_buku->satuan }}" readonly>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <!-- <label for="inputPassword" class="col-sm-2 col-form-label"></label> -->
                                    <div class="col-sm-2">
                                        <button class="btn btn-primary">Simpan</button>
                                        <button class="btn btn-danger">Batal</button>
                                    </div>
                                </div>

                        </form>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset ('/')}}assets/dist/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset ('/')}}assets/dist/js/datatables-simple-demo.js"></script>
    </body>
</html>
