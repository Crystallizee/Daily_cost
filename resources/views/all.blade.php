@extends('layout.main')
@section('content')
<div class="container">
    {{-- button for create new expense --}}
    <div class="row">
        <div class="col">
            <a href="{{ url('/expense/create') }}" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <h2 class="text-center">Makanan/Minuman</h2>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @foreach ($expense as $e)
                <tbody>
                    <tr>
                        <td>{{ $e->name }}</td>
                        <td>{{ $e->amount }}</td>
                        <td>{{ $e->price }}</td>
                        <td>{{ $e->total }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div class="col-md-4 offset-md-8">Total ={{ $total_makanan }}</div>
        </div>
        <div class="col">
            <table class="table table-striped">
                <h2 class="text-center">Transportasi</h2>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @foreach ($expenseT as $eT)
                <tbody>
                    <tr>
                        <td>{{ $eT->name }}</td>
                        <td>{{ $eT->amount }}</td>
                        <td>{{ $eT->price }}</td>
                        <td>{{ $eT->total }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div class="col-md-4 offset-md-8">Total ={{ $total_transportasi }}</div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <h2 class="text-center">Internet</h2>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @foreach ($expenseI as $eI)
                <tbody>
                    <tr>
                        <td>{{ $eI->name }}</td>
                        <td>{{ $eI->amount }}</td>
                        <td>{{ $eI->price }}</td>
                        <td>{{ $eI->total }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div class="col-md-4 offset-md-8">Total ={{ $total_internet }}</div>
        </div>
        <div class="col">
            <table class="table table-striped">
                <h2 class="text-center">Hiburan</h2>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @foreach ($expenseH as $eH)
                <tbody>
                    <tr>
                        <td>{{ $eH->name }}</td>
                        <td>{{ $eH->amount }}</td>
                        <td>{{ $eH->price }}</td>
                        <td>{{ $eH->total }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div class="col-md-4 offset-md-8">Total ={{ $total_hiburan }}</div>
        </div>
    </div>
</div> 

@endsection