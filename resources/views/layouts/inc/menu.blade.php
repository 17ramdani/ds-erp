            <ul class="rz-menu" uk-nav>
                <li><a href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd" />
                        </svg>Home</a>
                </li>
                <li class="uk-parent {{ request()->is(['master*', 'komplain*']) ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                        </svg>
                        Customer Exp <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">

                        <li><a href="{{ route('customer.index') }}">Master Customer</a></li>
                        <li><a href="{{ '#' }}">Deposit</a></li>
                        <li><a href="{{ route('komplain.index') }}">Complaint</a></li>
                        {{-- <li><a href="{{ route('reg.index') }}">Membership</a></li>
                        <li><a href="{{ route('custfin.index') }}">Buyer Financing</a></li>
                        <li><a href="{{ route('cust-reward.index') }}">Reward</a></li>
                        <li><a href="{{ route('ticketing') }}">Ticketing</a></li>
                        <li><a href="{{ route('nps.index') }}">Net Promoter Score</a></li>
                        <li><a href="">Ulang Tahun</a></li>
                        <li><a href="{{ route('wilayah.index') }}">Wilayah</a></li> --}}
                    </ul>
                </li>
                <li
                    class="uk-parent {{ request()->is(['order*', 'invoice*', 'retur*', 'fresh-order*']) ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5">
                            <path
                                d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                        Sales &amp; Marketing <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li class="uk-active"><a href="{{ route('order.index') }}">Sales Order</a></li>
                        <li><a href="{{ route('fresh-order.index') }}">Fresh Order</a></li>
                        <li><a href="">Penjualan</a></li>
                        {{-- <li><a href="{{ route('wip.index') }}">WIP</a></li> --}}
                        <li><a href="{{ route('invoice.index') }}">Invoice</a></li>
                        <li><a href="{{ route('retur.index') }}">Retur</a></li>
                        {{-- <li><a href="{{ route('reward.index') }}">Point Reward</a></li> --}}
                        <li><a href="{{ route('salesman.master') }}">Salesman</a></li>
                        <li><a href="{{ route('laporan.index') }}">Laporan</a></li>
                    </ul>
                </li>
                <li class="uk-parent {{ request()->is('barang-master*') ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M6 5v1H4.667a1.75 1.75 0 00-1.743 1.598l-.826 9.5A1.75 1.75 0 003.84 19H16.16a1.75 1.75 0 001.743-1.902l-.826-9.5A1.75 1.75 0 0015.333 6H14V5a4 4 0 00-8 0zm4-2.5A2.5 2.5 0 007.5 5v1h5V5A2.5 2.5 0 0010 2.5zM7.5 10a2.5 2.5 0 005 0V8.75a.75.75 0 011.5 0V10a4 4 0 01-8 0V8.75a.75.75 0 011.5 0V10z"
                                clip-rule="evenodd" />
                        </svg>
                        Purchasing <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Purchasing Order</a></li>
                        <li><a href="{{ route('purc.barang') }}">Master Barang</a></li>
                        <li><a href="">Supplier</a></li>
                        <li><a href="">WIP</a></li>
                        <li><a href="{{ route('laporan.purc') }}">Laporan</a></li>
                    </ul>
                </li>
                <li class="uk-parent {{ request()->is('surjal*') ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5">
                            <path
                                d="M14.916 2.404a.75.75 0 01-.32 1.012l-.596.31V17a1 1 0 01-1 1h-2.26a.75.75 0 01-.75-.75v-3.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.5a.75.75 0 01-.75.75h-3.5a.75.75 0 010-1.5H2V9.957a.75.75 0 01-.596-1.372L2 8.275V5.75a.75.75 0 011.5 0v1.745l10.404-5.41a.75.75 0 011.012.32zM15.861 8.57a.75.75 0 01.736-.025l1.999 1.04A.75.75 0 0118 10.957V16.5h.25a.75.75 0 110 1.5h-2a.75.75 0 01-.75-.75V9.21a.75.75 0 01.361-.64z" />
                        </svg>
                        Warehouse <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{ route('surjal') }}">Surat Jalan</a></li>
                        <li><a href="">Gudang</a></li>
                        <li><a href="">Inventory</a></li>
                        <li><a href="">Setup</a></li>
                        <li><a href="{{ route('laporan.wh') }}">Laporan</a></li>
                    </ul>
                </li>
                <li class="uk-parent {{ request()->is('ekspedisi*') ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5">
                            <path
                                d="M6.5 3c-1.051 0-2.093.04-3.125.117A1.49 1.49 0 002 4.607V10.5h9V4.606c0-.771-.59-1.43-1.375-1.489A41.568 41.568 0 006.5 3zM2 12v2.5A1.5 1.5 0 003.5 16h.041a3 3 0 015.918 0h.791a.75.75 0 00.75-.75V12H2z" />
                            <path
                                d="M6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3zM13.25 5a.75.75 0 00-.75.75v8.514a3.001 3.001 0 014.893 1.44c.37-.275.61-.719.595-1.227a24.905 24.905 0 00-1.784-8.549A1.486 1.486 0 0014.823 5H13.25zM14.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                        Ekspedisi <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{ route('ekspedisi.index') }}">List Ekspedisi</a></li>
                        <li><a href="#">Laporan</a></li>
                    </ul>
                </li>
                <li class="uk-parent {{ request()->is('') ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5">
                            <path fill-rule="evenodd"
                                d="M1 4a1 1 0 011-1h16a1 1 0 011 1v8a1 1 0 01-1 1H2a1 1 0 01-1-1V4zm12 4a3 3 0 11-6 0 3 3 0 016 0zM4 9a1 1 0 100-2 1 1 0 000 2zm13-1a1 1 0 11-2 0 1 1 0 012 0zM1.75 14.5a.75.75 0 000 1.5c4.417 0 8.693.603 12.749 1.73 1.111.309 2.251-.512 2.251-1.696v-.784a.75.75 0 00-1.5 0v.784a.272.272 0 01-.35.25A49.043 49.043 0 001.75 14.5z"
                                clip-rule="evenodd" />
                        </svg>
                        Finance <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li><a href="">Master</a></li>
                        <li><a href="">Manajemen Pajak</a></li>
                        <li><a href="">Buyer Financing</a></li>
                        <li><a href="">Cash Flow</a></li>
                        <li><a href="{{ route('laporan.fin') }}">Laporan</a></li>
                    </ul>
                </li>
                <li class="uk-parent {{ request()->is('') ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5">
                            <path d="M8 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                            <path fill-rule="evenodd"
                                d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm5 5a3 3 0 101.524 5.585l1.196 1.195a.75.75 0 101.06-1.06l-1.195-1.196A3 3 0 009.5 7z"
                                clip-rule="evenodd" />
                        </svg>
                        Bisnis Intelijen <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li><a href="">BCG Matrix</a></li>
                        <li><a href="">Profit Dashboard</a></li>
                        <li><a href="">Customer Data</a></li>
                        <li><a href="">Sales Performance</a></li>
                        <li><a href="">Forecast Demand</a></li>
                        <li><a href="">Laporan</a></li>
                    </ul>
                </li>
                <li class="uk-parent {{ request()->is('') ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        EWS <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li><a href="">Pesanan Stuck</a></li>
                        <li><a href="">Delivery Stuck</a></li>
                        <li><a href="">Idle Customer</a></li>
                        <li><a href="">Manajemen Stok</a></li>
                        <li><a href="">Finance</a></li>
                    </ul>
                </li>
                <li class="uk-parent {{ request()->is('') ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" class="w-5 h-5">
                            <path
                                d="M7 8a3 3 0 100-6 3 3 0 000 6zM14.5 9a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM1.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 017 18a9.953 9.953 0 01-5.385-1.572zM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 00-1.588-3.755 4.502 4.502 0 015.874 2.636.818.818 0 01-.36.98A7.465 7.465 0 0114.5 16z" />
                        </svg>
                        Users <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li><a href="">Master User</a></li>
                        <li><a href="">Role Management</a></li>
                    </ul>
                </li>
                <li class="uk-parent {{ request()->is('') ? 'uk-open' : '' }}">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" class="w-5 h-5">
                            <path
                                d="M13.024 9.25c.47 0 .827-.433.637-.863a4 4 0 00-4.094-2.364c-.468.05-.665.576-.43.984l1.08 1.868a.75.75 0 00.649.375h2.158zM7.84 7.758c-.236-.408-.79-.5-1.068-.12A3.982 3.982 0 006 10c0 .884.287 1.7.772 2.363.278.38.832.287 1.068-.12l1.078-1.868a.75.75 0 000-.75L7.839 7.758zM9.138 12.993c-.235.408-.039.934.43.984a4 4 0 004.094-2.364c.19-.43-.168-.863-.638-.863h-2.158a.75.75 0 00-.65.375l-1.078 1.868z" />
                            <path fill-rule="evenodd"
                                d="M14.13 4.347l.644-1.117a.75.75 0 00-1.299-.75l-.644 1.116a6.954 6.954 0 00-2.081-.556V1.75a.75.75 0 00-1.5 0v1.29a6.954 6.954 0 00-2.081.556L6.525 2.48a.75.75 0 10-1.3.75l.645 1.117A7.04 7.04 0 004.347 5.87L3.23 5.225a.75.75 0 10-.75 1.3l1.116.644A6.954 6.954 0 003.04 9.25H1.75a.75.75 0 000 1.5h1.29c.078.733.27 1.433.556 2.081l-1.116.645a.75.75 0 10.75 1.298l1.117-.644a7.04 7.04 0 001.523 1.523l-.645 1.117a.75.75 0 101.3.75l.644-1.116a6.954 6.954 0 002.081.556v1.29a.75.75 0 001.5 0v-1.29a6.954 6.954 0 002.081-.556l.645 1.116a.75.75 0 001.299-.75l-.645-1.117a7.042 7.042 0 001.523-1.523l1.117.644a.75.75 0 00.75-1.298l-1.116-.645a6.954 6.954 0 00.556-2.081h1.29a.75.75 0 000-1.5h-1.29a6.954 6.954 0 00-.556-2.081l1.116-.644a.75.75 0 00-.75-1.3l-1.117.645a7.04 7.04 0 00-1.524-1.523zM10 4.5a5.475 5.475 0 00-2.781.754A5.527 5.527 0 005.22 7.277 5.475 5.475 0 004.5 10a5.475 5.475 0 00.752 2.777 5.527 5.527 0 002.028 2.004c.802.458 1.73.719 2.72.719a5.474 5.474 0 002.78-.753 5.527 5.527 0 002.001-2.027c.458-.802.719-1.73.719-2.72a5.475 5.475 0 00-.753-2.78 5.528 5.528 0 00-2.028-2.002A5.475 5.475 0 0010 4.5z"
                                clip-rule="evenodd" />
                        </svg>
                        Utility <span uk-nav-parent-icon></span></a>
                    <ul class="uk-nav-sub">
                        <li><a href="{{ route('exim.index') }}">Export - Import</a></li>
                        <li><a href="">Database Backup</a></li>
                        <li><a href="">Database Restore</a></li>
                        <li><a href="">User Guide</a></li>
                        <li><a href="{{ route('slider.index') }}">Slider</a></li>
                    </ul>
                </li>
            </ul>
