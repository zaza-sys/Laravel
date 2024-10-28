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
                        <a class="nav-link" href="{{ url('main')}}">
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
                                User Management
                            </a>
                            @endif
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Buku Masuk</h1>
                        <ol class="breadcrumb mb-4"></ol>
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a>Data Buku Masuk</a>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        @if (auth()->user()->level=="Admin")
                                        
                                        <a href="{{ route('bukumasuk.create') }}" class = "btn btn-primary">Tambah</a>
                                        
                                        @elseif (auth()->user()->level=="Manajer")
                                        
                                        @else
                                        <a href="{{ route('bukumasuk.create') }}" class = "btn btn-primary">Tambah</a>
                                        @endif
                                        
                                    </div>
                                    <hr />
                                    @if(Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                            </div>
                            <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </form> -->
                            <div class="card-body">
                                <div class= "table-responsive">
                                <table class="table table-bordered table-responsive" id="datatablesSimple">
                                
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Kode Buku</th>
                                            <th>Nama Buku</th>
                                            <th>Harga</th>
                                            <th>Harga Satuan</th>
                                            <th>Harga Grosir</th>
                                            <th>Jumlah Masuk</th>
                                            <th>Satuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($buku_masuk -> count() > 0)
                                            @foreach($buku_masuk as $rs)
                                                <tr>
                                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                                    <td class="align-middle">{{ $rs->tanggal }}</td>
                                                    <td class="align-middle">{{ $rs->kode_buku }}</td>
                                                    <td class="align-middle">{{ $rs->nama_buku }}</td>
                                                    <td class="align-middle">Rp.{{ $rs->harga }}</td>
                                                    <td class="align-middle">Rp.{{ $rs->harga_satuan }}</td>
                                                    <td class="align-middle">Rp.{{ $rs->harga_grosir }}</td>
                                                    <td class="align-middle">{{ $rs->jumlah_masuk }}</td>
                                                    <td class="align-middle">{{ $rs->satuan }}</td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td class="text-center" colspan="5">Product not found</td>
                                            </tr>
                                        @endif
                                        
                                    </tbody>
                                </table>

                                </div>
                                
                            </div>
                        </div>
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
