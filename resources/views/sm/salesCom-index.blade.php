<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="rz-dashboard">

                    <div class="uk-margin-medium">
                        <form class="uk-child-width-1-5@m uk-child-width-1-2@s uk-form-stacked uk-grid-small" uk-grid>
                            <div>
                                <label class="uk-form-label">Tgl. Start</label>
                                <div class="uk-form-controls">
                                    <input type="date" class="uk-input">
                                </div>
                            </div>
                            <div>
                                <label class="uk-form-label">Tgl. End</label>
                                <div class="uk-form-controls">
                                    <input type="date" class="uk-input">
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-bottom">
                                <a href="" class="uk-button uk-button-default uk-border-rounded">Tampilkan</a>
                            </div>
                        </form>
                    </div>





                    <div class="rz-panel">

                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Sales Commmision Dashboard</h4>
                            </div>
                            <div>
                                <a href="{{ route('salescom.add') }}" class="uk-button uk-button-default uk-button-small uk-border-rounded">Ajukan Komisi</a>
                            </div>
                        </div>
                        <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-small uk-margin" uk-grid>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>SO by Salesman</div>
                                        <span class="uk-text-bold">70</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Proposed</div>
                                        <span class="uk-text-bold">11</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>In Process</div>
                                        <span class="uk-text-bold">40</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Approved</div>
                                        <span class="uk-text-bold">9</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Paid</div>
                                        <span class="uk-text-bold">10</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Sales Amount</th>
                                        <th>Sales Name</th>
                                        <th>SO No.</th>
                                        <th>Commision Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>3 Apr, 2023</td>
                                        <td>Rp. 10,000,000</td>
                                        <td>Ahmad</td>
                                        <td><a href="mod-sm-pesanan-draft-detail.php">SO000123456</a></td>
                                        <td>Rp. 500,000</td>
                                        <td>Proposed</td>
                                        <td><a href="">Detail</a></td>
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
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>

    <div id="gambarKain" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <img src="https://duniasandang.com/wp-content/uploads/2022/01/combed-30s-misty-dunia-sandang.jpg" alt="">

        </div>
    </div>
</x-app-layout>
