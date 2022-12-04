<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Halaman Masuk dan Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    .cover-container {
        max-width: 100%;
        min-height: 100vh
    }
    .nav-masthead .nav-link {
        color: rgba(255, 255, 255, .5);
        border-bottom: .25rem solid transparent;
    }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
            border-bottom-color: rgba(255, 255, 255, .25);
    }
    .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
    }
    .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
    }
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }
    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }
    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }
    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }
    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }
    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
    </style>
</head>
<body class="d-flex h-100 text-center text-bg-dark">
    <div class="cover-container d-flex w-100 h-100  mx-auto flex-column">
        <header class="mb-auto p-3">
            <div>
                <h3 class="float-md-start mb-0">Belajar Auth & CRUD</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-0" href="{{url('add-blog-post-form')}}">Tugas Mahasiswa</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{url('input-mahasiswa')}}">Input Data Mahasiswa</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{url('show-data-mahasiswa')}}">Daftar Data Mahasiswa</a>
                </nav>
            </div>
        </header>
        <main class="px-3">
            <h1>Selamat Datang di Web Portal Mahasiswa</h1>
            <form>
            <a class="btn btn-primary mt-2" href="{{ url('login') }}">Masuk</a>
            </form>
            <form>
            <a class="btn btn-success mt-2" href="{{ url('registrasi') }}">Daftar</a>
            </form>
            <p>Silahkan Masuk Jika Mempunyai Akun!!!</p>
        </main>
      <svg viewBox="0 0 1440 320">
      </svg>
    </div>
</body>
</html>