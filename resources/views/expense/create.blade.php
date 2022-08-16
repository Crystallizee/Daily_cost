@extends('layout.main')
@section('content')
{{-- Form create expense --}}
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ url('/expense/store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="amount">Jumlah</label>
                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Jumlah">
                </div>
                @error('amount')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Harga">
                </div>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select class="form-control" id="category" name="category">
                        <option value="Makanan/Minuman">Makanan</option>
                        <option value="Transportasi">Transportasi</option>
                        <option value="Hiburan">Hiburan</option>
                        <option value="Internet">Internet</option>
                    </select>
                </div>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <button class="btn btn-primary mt-2" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
