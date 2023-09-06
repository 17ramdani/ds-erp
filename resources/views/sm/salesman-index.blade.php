<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Salesman List</h4>
                            </div>
                            <div>
                                <a href="{{ route('salesman.add') }}" class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a>
                            </div>
                        </div>


                        <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-small uk-margin" uk-grid>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Total Salesman</div>
                                        <span class="uk-text-bold">70</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Regular Salesman</div>
                                        <span class="uk-text-bold">11</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="" class="rz-panel-filter">
                                    <div class="uk-flex uk-flex-between">
                                        <div>Freelance Salesman</div>
                                        <span class="uk-text-bold">40</span>
                                    </div>
                                </a>
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
                                        <th>Reg. Date</th>
                                        <th>Type</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Number of Transactions (SO)</th>
                                        <th>Number of Commisions</th>
                                        <th class="uk-table-expand">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>07 Jan 2018</td>
                                        <td>Reguler</td>
                                        <td>Abdul</td>
                                        <td>08123456789</td>
                                        <td>abdul@mail.com</td>
                                        <td>Jalan Raya no 773 Kota Bandung Raya</td>
                                        <td>28</td>
                                        <td>Rp. xxx.xxx</td>
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
