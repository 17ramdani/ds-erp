<x-app-layout>
    <main id="mainContent">
	
        <div class="rz-bodyContent">
            <div class="rz-container">
               <div>
                   <h3>Ekspedisi</h3>
               </div>
                
                <div class="">
    
                    <div class="rz-panel">
                        
                        <h4>Surat Jalan</h4>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                  <tr>
                                    <th>Tanggal Order</th>
                                    <th>No Invoice</th>
                                    <th>No. Surat Jalan</th>
                                    <th>Nama Konsumen</th>
                                    <th>Alamat Konsumen</th>
                                    <th>Jenis Faktur</th>
                                    <th>Status</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1/2/23</td>
                                    <td>INV001</td>
                                    <td>DO001</td>
                                    <td>ALI SABIHIS</td>
                                    <td>DEPOK</td>
                                    <td>kontan</td>
                                    <td>FINAL</td>
                                    <td><a href="{{ route('surjal.detail') }}">Detail</a></td>
                                  </tr>
                                  <tr>
                                    <td>1/2/23</td>
                                    <td>INV002</td>
                                    <td>DO002</td>
                                    <td>MEGA YULIANTY</td>
                                    <td>Jalan Mawar No. 4B Pikgondang Condongcatur Depok Sleman DIY</td>
                                    <td>kredit</td>
                                    <td>SELESAI</td>
                                    <td><a href="{{ route('surjal.detail') }}">Detail</a></td>
                                  </tr>
                                  <tr>
                                    <td>1/2/23</td>
                                    <td>INV003</td>
                                    <td>DO003</td>
                                    <td>MEGA YULIANTY</td>
                                    <td>Jalan Mawar No. 4B Pikgondang Condongcatur Depok Sleman DIY</td>
                                    <td>kredit</td>
                                    <td>SELESAI</td>
                                    <td><a href="{{ route('surjal.detail') }}">Detail</a></td>
                                  </tr>
                                  <tr>
                                    <td>1/2/23</td>
                                    <td>INV004</td>
                                    <td>DO004</td>
                                    <td>IMAN IMANUDIN</td>
                                    <td>KP.SEKEBURUY NO.26 RT.0406 PASIRWANGI UJUNG BERUNG</td>
                                    <td>kredit</td>
                                    <td>SELESAI</td>
                                    <td><a href="{{ route('surjal.detail') }}">Detail</a></td>
                                  </tr>
                                  <tr>
                                    <td>1/2/23</td>
                                    <td>INV005</td>
                                    <td>DO005</td>
                                    <td>MUHAMMAD HUSAIN</td>
                                    <td>-</td>
                                    <td>kontan</td>
                                    <td>SELESAI</td>
                                    <td><a href="{{ route('surjal.detail') }}">Detail</a></td>
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