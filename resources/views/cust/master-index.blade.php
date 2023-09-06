<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">

                    <div class="rz-panel-buttonset-grid uk-child-width-1-4@s uk-child-width-1-2 uk-margin uk-grid-small" uk-grid>
                        <div>
                            <a href="" class="rz-button rz-panel">
                                <div class="rz-button-caption">Total</div>
                                <span class="rz-button-value">{{ $total }}</span>
                            </a>
                        </div>
                        <div>
                            <a href="" class="rz-button rz-panel">
                                <div class="rz-button-caption">Active</div>
                                <span class="rz-button-value">{{ $active }}</span>
                            </a>
                        </div>
                        <div>
                            <a href="" class="rz-button rz-panel">
                                <div class="rz-button-caption">Idle</div>
                                <span class="rz-button-value">{{ $idle }}</span>
                            </a>
                        </div>
                        <div>
                            <a href="" class="rz-button rz-panel">
                                <div class="rz-button-caption">Risked</div>
                                <span class="rz-button-value">{{ $risked }}</span>
                            </a>
                        </div>
                        <div>
                            <a href="" class="rz-button rz-panel">
                                <div class="rz-button-caption">Member</div>
                                <span class="rz-button-value">{{ $member }}</span>
                            </a>
                        </div>
                        <div>
                            <a href="" class="rz-button rz-panel">
                                <div class="rz-button-caption">Distributor</div>
                                <span class="rz-button-value">{{ $distributor }}</span>
                            </a>
                        </div>
                        <div>
                            <a href="" class="rz-button rz-panel">
                                <div class="rz-button-caption">Reguler</div>
                                <span class="rz-button-value">{{ $reguler }}</span>
                            </a>
                        </div>

                    </div>

                    <div class="rz-panel">
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Master Customer</h4>
                            </div>
                            <div>
                                <a href="{{ route('reg.index') }}" class="uk-button uk-button-small uk-button-default uk-border-rounded">Pending</a>
                                <a href="{{ route('master.add') }}" class=" uk-button uk-button-small uk-button-default uk-border-rounded"><span class="uk-margin-small-right" uk-icon="icon: plus-circle; ratio: 0.75"></span>Add New</a>
                            </div>
                        </div>

                        <div class="uk-child-width-1-5@m uk-child-width-1-2 uk-grid-small" uk-grid>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Konveksi</div>
                                        <span class="uk-text-bold">70</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Big Apparel</div>
                                        <span class="uk-text-bold">11</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Growth Apparel</div>
                                        <span class="uk-text-bold">40</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>New Apparel</div>
                                        <span class="uk-text-bold">9</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Others</div>
                                        <span class="uk-text-bold">10</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="uk-margin-medium">
                            <form action="" method="GET" class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <input type="text" class="uk-input" name="search" value="{{ request('search') }}">
                                </div>
                                <div class="uk-width-auto">
                                    <button class="uk-button uk-button-primary uk-border-rounded">Search</button>
                                </div>
                            </form>
                        </div>

                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small" id="table-so" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Kode Konsumen</th>
                                        <th>Kode Kategori</th>
                                        <th>Nama</th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th>Ulang Tahun</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $customer)
                                    <tr>
                                        <td>{{ $customer->nomor }}</td>
                                        <td>{{ $customer->customer_category }}</td>
                                        <td>{{ $customer->nama }}</td>
                                        <td>{{ $customer->nohp }}</td>
                                        <td>{{ $customer->alamat }}</td>
                                        <td>{{ $customer->dob }}</td>
                                        <td></td>
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
    <x-datatable/>
</x-app-layout>
