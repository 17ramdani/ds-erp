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
                            <div class="uk-flex uk-flex-bottom">
                                <input type="text" class="uk-input" placeholder="Search Customer">
                            </div>
                        </form>
                    </div>





                    <div class="rz-panel">

                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Prospect List</h4>
                            </div>
                            <div>
                                <a href="{{ route('salesprospect.add') }}" class="uk-button uk-button-default uk-button-small uk-border-rounded">Add New Prospect</a>
                            </div>
                        </div>
                        <div class="uk-child-width-1-3@m uk-grid-small uk-margin" uk-grid>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Total FU Cust Today</div>
                                        <span class="uk-text-bold">70</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Total FU Cust This Week</div>
                                        <span class="uk-text-bold">11</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Total FU Cust This Month</div>
                                        <span class="uk-text-bold">40</span>
                                    </div>
                                </a>
                            </div>


                        </div>
                        <div class="uk-margin uk-overflow-auto">

                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Cust Category</th>
                                        <th>FU Date</th>
                                        <th>FU Result</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1/2/23</td>
                                        <td>PT. MGJ</td>
                                        <td>Pasirkoja Bandung</td>
                                        <td>mail@example.com</td>
                                        <td>022-123456789</td>
                                        <td>Member</td>
                                        <td>12 Maret 2023</td>
                                        <td>Lorem ipsum dolor sit amet.</td>
                                        <td><a href="">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>1/2/23</td>
                                        <td>PT. MGJ</td>
                                        <td>Pasirkoja Bandung</td>
                                        <td>mail@example.com</td>
                                        <td>022-123456789</td>
                                        <td>Member</td>
                                        <td>12 Maret 2023</td>
                                        <td>Lorem ipsum dolor sit amet.</td>
                                        <td><a href="">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>1/2/23</td>
                                        <td>PT. MGJ</td>
                                        <td>Pasirkoja Bandung</td>
                                        <td>mail@example.com</td>
                                        <td>022-123456789</td>
                                        <td>Member</td>
                                        <td>12 Maret 2023</td>
                                        <td>Lorem ipsum dolor sit amet.</td>
                                        <td><a href="">View</a></td>
                                    </tr>
                                    <tr>
                                        <td>1/2/23</td>
                                        <td>PT. MGJ</td>
                                        <td>Pasirkoja Bandung</td>
                                        <td>mail@example.com</td>
                                        <td>022-123456789</td>
                                        <td>Member</td>
                                        <td>12 Maret 2023</td>
                                        <td>Lorem ipsum dolor sit amet.</td>
                                        <td><a href="">View</a></td>
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
