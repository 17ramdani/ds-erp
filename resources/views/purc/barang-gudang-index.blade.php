<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Purchasing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>List Gudang</h4>
                            </div>
                            <div>
                                <a href="{{ route ('gudang.add') }}" class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a>
                            </div>
                        </div>

                        <div class="uk-margin-medium">
                            <form action="" class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <input type="text" class="uk-input">
                                </div>
                                <div class="uk-width-auto">
                                    <button class="uk-button uk-button-primary uk-border-rounded">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Gudang</th>
                                        <th>Jenis Gudang</th>
                                        <th>Order Report</th>
                                        <th>Target Omzet</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>GDFO</td>
                                        <td>Layak</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>Fresh Order</td>
                                        <td>
                                            <ul class="uk-iconnav">
                                                <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                                <li><a href="#" title="Edit" uk-icon="icon: file-edit"></a></li>
                                                <li><a href="#" title="Delete" uk-icon="icon: trash"></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>GDMAKLOON</td>
                                        <td>Layak</td>
                                        <td>5</td>
                                        <td>0</td>
                                        <td>Makloon</td>
                                        <td>
                                            <ul class="uk-iconnav">
                                                <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                                <li><a href="#" title="Edit" uk-icon="icon: file-edit"></a></li>
                                                <li><a href="#" title="Delete" uk-icon="icon: trash"></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
