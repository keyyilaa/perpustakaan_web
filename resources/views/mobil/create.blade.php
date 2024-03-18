@extends('layouts.main')
@section('container')
    

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p2-3 pb-2 mb-3 border-bottom">
  <h2 class="h2">Tambah Buku</h1>

</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <form action="/mobil" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label >Category</label>
                <select name="merk_id" class="form-control">
                  <option selected>Choose...</option>
                    @foreach ($merks as $merk)
                      <option value="{{ $merk->id }}">{{ $merk->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >Nama Buku</label>
                <input type="text" class="form-control" name="name"  required>
              </div>
              <div class="form-group col-md-6">
                <label >Warna Buku</label>
                <select name="warna" class="form-control">
                  <option selected>Choose...</option>
                      <option value="Merah">Merah</option>
                      <option value="Kuning">Kuning</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label >No Seri Buku</label>
                <input type="text" class="form-control" name="plat_nomor" required>
              </div>
              <div class="form-group col-lg-6">
                <label >Tahun Terbit</label>
                <input type="number" class="form-control" name="tahun_beli" min="2000" max="2022" required>
              </div>
              <div class="form-group col-lg-7">
                <label>Gambar</label>
                <input type="file" class="form-control" name="image" required>
              </div>
           
            </div>
          
          
            <button type="submit" class="btn btn-primary mt-2">Tambah</button>
          </form>
        
      
    </div>
</div>
@endsection