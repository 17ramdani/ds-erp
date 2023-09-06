<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-1-3@s">
                        <div class="rz-panel">
                            <div>Total Merchant</div>
                            <div class="uk-text-large">{{ $tot_merchant }}</div>

                        </div>
                    </div>
                    <div class="uk-width-2-3@s">
                        <div class="rz-panel">
                            @if (session()->has('success'))
                                <div class="uk-alert-success" uk-alert>
                                    <a class="uk-alert-close" uk-close></a>
                                    <p>{{ session('success') }}</p>
                                </div>
                            @endif
                            <h5>Daftar Merchant Point</h5>
                            <table class="uk-table uk-table-small uk-table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Merchant</th>
                                        <th>Produk</th>
                                        <th>Point Ditukar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($merchant as $m)
                                        <tr>
                                            <td>{{ strtoupper($m->merchant->name) }}</td>
                                            <td>{{ strtoupper($m->voucher_name) }}</td>
                                            <td>{{ strtoupper($m->amount) }}</td>
                                            <td><a href="">Detail</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="uk-margin-large-top"><a href="{{ route('reward.add') }}"
                                    class="uk-button uk-button-primary uk-border-rounded">Tambah Merchant</a></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-app-layout>
