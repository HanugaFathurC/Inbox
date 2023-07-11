@extends('layouts.backoffice.master', ['title' => 'Criteria'])

@section('content')
    <x-container>
        <div class="col-12">
            <x-card title="Kriteria SAW" class="card-body">
                <x-table>
                    <thead>
                        <tr>
                            <th class="align-middle">Nama Kriteria</th>
                            <th class="align-middle">Bobot</th>
                            <th class="align-middle">Sifat</th>
                            <th class="align-middle">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($criterias as $criteria)
                            <tr>
                                <td>{{ $criteria->name }}</td>
                                <td>{{ $criteria->weight }}</td>
                                <td>{{ $criteria->attribute }}</td>
                                <td>
                                    <x-button-modal id="{{ $criteria->id }}" title="Ubah Data" />
                                    <x-modal id="{{ $criteria->id }}" title="Ubah Data">
                                        <form action="{{ route('backoffice.criteria.update', $criteria) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-12">
                                                    <x-input title="Bobot" name="weight" type="text" placeholder=""
                                                        value="{{ $criteria->weight }}" />
                                                </div>
                                            </div>
                                            <x-button-save title="Simpan" />
                                        </form>
                                    </x-modal>
                                    {{-- @endcan --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </x-table>
            </x-card>


        </div>
    </x-container>
@endsection
