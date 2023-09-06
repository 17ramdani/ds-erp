<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Purchasing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <x-alert />
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>List Jenis Kain</h4>
                            </div>
                            <div>
                                <a href="{{ route('kain.add') }}"
                                    class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a>
                            </div>
                        </div>

                        <div class="uk-margin-medium">
                            <form action="{{ route('kain.index') }}" method="GET" class="uk-grid-small uk-flex-middle"
                                uk-grid>
                                <div class="uk-width-expand">
                                    <input class="uk-input" type="text" name="kain" value="{{ $query }}"
                                        placeholder="Search...">
                                </div>
                                <div class="uk-width-auto">
                                    <button class="uk-button uk-button-primary">Search</button>
                                </div>
                            </form>

                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Kain</th>
                                        <th>Desc</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $kain)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kain->nama }}</td>
                                            <td>{{ $kain->keterangan }}</td>
                                            <td>
                                                <ul class="uk-iconnav">
                                                    <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                                    <li><a href="{{ route('kain.edit', ['id' => $kain->id]) }}"
                                                            title="Edit" uk-icon="icon: file-edit"></a>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('kain.destroy', $kain->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" title="Delete"
                                                                onclick="return confirm('Apakah anda yakin untuk hapus data ini?')"
                                                                uk-icon="icon: trash"></button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
