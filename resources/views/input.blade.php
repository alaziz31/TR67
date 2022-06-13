@extends('layouts.main')
@section('content')
<h2 class="mt-4 mb-4">Input Data Mahasiswa</h2>
<form action="{{ route('created') }}" method="POST"> {{-- mengirim data ke route created --}}
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nama" class="font-weight-bold">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group col-md-6">
            <label for="email" class="font-weight-bold">Alamat Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group col-md-6">
            <label for="nim" class="font-weight-bold">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class="form-group col-md-6">
            <label for="alamat" class="font-weight-bold">Alamat Rumah</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
        </div>
    </div>
    <button type="submit" value="submit" name="submit" class="btn btn-secondary float-right mt-5">Submit Data</button>
</form>

@endsection
