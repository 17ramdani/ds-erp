<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="rz-dashboard">

                    <div class="rz-panel">

                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Pesanan Khusus</h4>
                            </div>
                            <div>
                                <a href="{{ route('order.add') }}"
                                    class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a>
                            </div>
                        </div>
                        <div class="uk-margin-medium">
                            <form action="" class="uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <input type="text" class="uk-input" placeholder="Search by PO Number">
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
                                        <th>Order Date</th>
                                        <th>SO</th>
                                        <th>Customer</th>
                                        <th>Tipe Kain</th>
                                        <th>L/GSM</th>
                                        <th>Warna</th>
                                        <th>QTY</th>
                                        <th>Satuan</th>
                                        <th>Sales</th>
                                        <th>CS</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>07 Mar 2023</td>
                                        <td>SO001/7/03/2023</td>
                                        <td>Budi Clothing</td>
                                        <td>SK.Combed 24S</td>
                                        <td>42 / 170-180</td>
                                        <td>Hitam Reaktif</td>
                                        <td>24.80</td>
                                        <td>Kg</td>
                                        <td>Sales A</td>
                                        <td>CS A</td>
                                        <td><a href="{{ route('khusus.detail') }}">View</a></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
