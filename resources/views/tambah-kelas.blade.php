@extends('welcome')

@section('content')

<div class="content">
                <div class="card card-info card-outline">

                <div class="card-body">
                <form action="/kelas/store" method="post">
                    @csrf


                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">ID Kelas</label>
                            <input type="text" id="nama" name="id_kelas" class="form-control" placeholder="id_kelas">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                            <input type="text" id="nama" name="nama_kelas" class="form-control" placeholder="nama_kelas">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Kompetensi Keahlian</label>
                            <input type="text" id="nama" name="kompetensi_keahlian" class="form-control" placeholder="kompetensi_keahlian">

                        </div>

                        <button type="submit" class="btn btn-success">Tambah</button>
                        </div>
                        </div>
                    </form>


                        @endsection
