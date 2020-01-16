@extends('layouts.dashboard')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Artikel Berita</div>
                <br>
                <center><a href="" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Tag</th>
                                <th>Kategori</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>


                </table>
            </div>
        </div>
    </div>
</div>
@endsection
