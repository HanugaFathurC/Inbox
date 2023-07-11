@extends('layouts.backoffice.master', ['title' => 'Perhitungan'])

@section('content')
    <x-container>
        <div class="col-12">
            <div class="card rounded-lg border-0">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title">Perhitungan SAW</h3>
                    <form action="{{ route('backoffice.calculate.calculate') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Hitung</button>
                    </form>
                </div>
            </div>

            <x-card title="Hasil Perankingan" class="card-body">
                @if ($analyticDetails)
                    <x-table>
                        <thead>
                            <tr>
                                <th class="align-middle">#</th>
                                <th class="align-middle">Nama Produk</th>
                                <th class="align-middle">Ranking</th>
                                <th class="align-middle">Total Skor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($analyticDetails as $analyticDetail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $analyticDetail->order->name }}</td>
                                    <td>{{ $analyticDetail->rank }}</td>
                                    <td>{{ $analyticDetail->final_score }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </x-table>
                @else
                    <h4 class="text-center text-muted">Belum Melakukan Perhitungan</h4>
                @endif
            </x-card>

        </div>
    </x-container>
@endsection
