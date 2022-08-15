@extends('layout.main')
@section('content')
<div class="container">
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
        </div>
    </div>
</div> 
@endsection