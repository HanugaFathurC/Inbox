@extends('layouts.backoffice.master', ['title' => 'Detail Analisis SAW'])

@section('content')
    <x-container>
        <div class="col-12">
            <x-card-action title="Hasil Detail Analisis SAW" url="{{ route('backoffice.result.show', $analyticLog->id) }}">
                <x-table>
                    <thead>
                        <tr>
                            <th class="align-middle">#</th>
                            <th class="align-middle">Nama Produk</th>
                            <th class="align-middle">Skor Akhir</th>
                            <th class="align-middle">Ranking</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($analyticDetails as $i => $analyticDetail)
                            <tr>
                                <td>{{ $i + $analyticDetails->firstItem() }}</td>
                                <td>{{ $analyticDetail->order->name }}</td>
                                <td>{{ $analyticDetail->final_score }}</td>
                                <td>{{ $analyticDetail->rank }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </x-table>
            </x-card-action>
            <div class="d-flex justify-content-end">{{ $analyticDetails->links() }}</div>
        </div>
    </x-container>
@endsection
