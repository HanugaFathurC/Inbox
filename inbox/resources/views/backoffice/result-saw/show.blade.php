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

        <div>
            <a href="{{ route('backoffice.result.index') }}" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevrons-left" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <polyline points="11 7 6 12 11 17"></polyline>
                    <polyline points="17 7 12 12 17 17"></polyline>
                </svg> Kembali
            </a>
        </div>

    </x-container>
@endsection
