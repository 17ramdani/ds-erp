<x-app-layout>


    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">
                    <div class="rz-panel">
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <h4>Wilayah List</h4>
                            </div>
                            <div>
                                <a href="{{ route('wilayah.add') }}" class="uk-button uk-button-default uk-button-small uk-border-rounded">Add</a>
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
                                        <th>nid</th>
                                        <th>parent_nid</th>
                                        <th>name</th>
                                        <th>serial</th>
                                        <th>type</th>
                                        <th>latitude</th>
                                        <th>longitude</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>Provinsi Aceh</td>
                                        <td>11</td>
                                        <td>1</td>
                                        <td>4.695135</td>
                                        <td>96.7493993</td>
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
                                        <td>0</td>
                                        <td>Provinsi Sumatera Utara</td>
                                        <td>12</td>
                                        <td>1</td>
                                        <td>2.1153547</td>
                                        <td>99.5450974</td>
                                        <td>
                                            <ul class="uk-iconnav">
                                                <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                                <li><a href="#" title="Edit" uk-icon="icon: file-edit"></a></li>
                                                <li><a href="#" title="Delete" uk-icon="icon: trash"></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>Provinsi Sumatera Barat</td>
                                        <td>13</td>
                                        <td>1</td>
                                        <td>-0.7399397</td>
                                        <td>100.8000051</td>
                                        <td>
                                            <ul class="uk-iconnav">
                                                <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                                <li><a href="#" title="Edit" uk-icon="icon: file-edit"></a></li>
                                                <li><a href="#" title="Delete" uk-icon="icon: trash"></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>Provinsi Riau</td>
                                        <td>14</td>
                                        <td>1</td>
                                        <td>0.2933469</td>
                                        <td>101.7068294</td>
                                        <td>
                                            <ul class="uk-iconnav">
                                                <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                                <li><a href="#" title="Edit" uk-icon="icon: file-edit"></a></li>
                                                <li><a href="#" title="Delete" uk-icon="icon: trash"></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>0</td>
                                        <td>Provinsi Jambi</td>
                                        <td>15</td>
                                        <td>1</td>
                                        <td>-1.4851831</td>
                                        <td>102.4380581</td>
                                        <td>
                                            <ul class="uk-iconnav">
                                                <li><a href="#" title="View" uk-icon="icon: eye"></a></li>
                                                <li><a href="#" title="Edit" uk-icon="icon: file-edit"></a></li>
                                                <li><a href="#" title="Delete" uk-icon="icon: trash"></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>0</td>
                                        <td>Provinsi Sumatera Selatan</td>
                                        <td>16</td>
                                        <td>1</td>
                                        <td>-3.3194374</td>
                                        <td>103.914399</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>0</td>
                                        <td>Provinsi Bengkulu</td>
                                        <td>17</td>
                                        <td>1</td>
                                        <td>-3.5778471</td>
                                        <td>102.3463875</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>0</td>
                                        <td>Provinsi Lampung</td>
                                        <td>18</td>
                                        <td>1</td>
                                        <td>-4.5585849</td>
                                        <td>105.4068079</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>0</td>
                                        <td>Provinsi Kepulauan Bangka Belitung</td>
                                        <td>19</td>
                                        <td>1</td>
                                        <td>-2.7410513</td>
                                        <td>106.4405872</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>Provinsi Kepulauan Riau</td>
                                        <td>21</td>
                                        <td>1</td>
                                        <td>3.9456514</td>
                                        <td>108.1428669</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>0</td>
                                        <td>Provinsi DKI Jakarta</td>
                                        <td>31</td>
                                        <td>1</td>
                                        <td>-6.211544</td>
                                        <td>106.845172</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>0</td>
                                        <td>Provinsi Jawa Barat</td>
                                        <td>32</td>
                                        <td>1</td>
                                        <td>-7.090911</td>
                                        <td>107.668887</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>0</td>
                                        <td>Provinsi Jawa Tengah</td>
                                        <td>33</td>
                                        <td>1</td>
                                        <td>-7.150975</td>
                                        <td>110.1402594</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>0</td>
                                        <td>Provinsi DI Yogyakarta</td>
                                        <td>34</td>
                                        <td>1</td>
                                        <td>-7.8753849</td>
                                        <td>110.4262088</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>0</td>
                                        <td>Provinsi Jawa Timur</td>
                                        <td>35</td>
                                        <td>1</td>
                                        <td>-7.5360639</td>
                                        <td>112.2384017</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>0</td>
                                        <td>Provinsi Banten</td>
                                        <td>36</td>
                                        <td>1</td>
                                        <td>-6.4058172</td>
                                        <td>106.0640179</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>0</td>
                                        <td>Provinsi Bali</td>
                                        <td>51</td>
                                        <td>1</td>
                                        <td>-8.4095178</td>
                                        <td>115.188916</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>0</td>
                                        <td>Provinsi Nusa Tenggara Barat</td>
                                        <td>52</td>
                                        <td>1</td>
                                        <td>-8.6529334</td>
                                        <td>117.3616476</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>0</td>
                                        <td>Provinsi Nusa Tenggara Timur</td>
                                        <td>53</td>
                                        <td>1</td>
                                        <td>-8.6573819</td>
                                        <td>121.0793705</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>0</td>
                                        <td>Provinsi Kalimantan Barat</td>
                                        <td>61</td>
                                        <td>1</td>
                                        <td>-0.2787808</td>
                                        <td>111.4752851</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>0</td>
                                        <td>Provinsi Kalimantan Tengah</td>
                                        <td>62</td>
                                        <td>1</td>
                                        <td>-1.6814878</td>
                                        <td>113.3823545</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>0</td>
                                        <td>Provinsi Kalimantan Selatan</td>
                                        <td>63</td>
                                        <td>1</td>
                                        <td>-3.0926415</td>
                                        <td>115.2837585</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>0</td>
                                        <td>Provinsi Kalimantan Timur</td>
                                        <td>64</td>
                                        <td>1</td>
                                        <td>1.6406296</td>
                                        <td>116.419389</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>0</td>
                                        <td>Provinsi Sulawesi Utara</td>
                                        <td>71</td>
                                        <td>1</td>
                                        <td>0.6246932</td>
                                        <td>123.9750018</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>0</td>
                                        <td>Provinsi Sulawesi Tengah</td>
                                        <td>72</td>
                                        <td>1</td>
                                        <td>-1.4300254</td>
                                        <td>121.4456179</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>0</td>
                                        <td>Provinsi Sulawesi Selatan</td>
                                        <td>73</td>
                                        <td>1</td>
                                        <td>-3.6687994</td>
                                        <td>119.9740534</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>0</td>
                                        <td>Provinsi Sulawesi Tenggara</td>
                                        <td>74</td>
                                        <td>1</td>
                                        <td>-4.14491</td>
                                        <td>122.174605</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>0</td>
                                        <td>Provinsi Gorontalo</td>
                                        <td>75</td>
                                        <td>1</td>
                                        <td>0.6999372</td>
                                        <td>122.4467238</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>0</td>
                                        <td>Provinsi Sulawesi Barat</td>
                                        <td>76</td>
                                        <td>1</td>
                                        <td>-2.8441371</td>
                                        <td>119.2320784</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>0</td>
                                        <td>Provinsi Maluku</td>
                                        <td>81</td>
                                        <td>1</td>
                                        <td>-3.2384616</td>
                                        <td>130.1452734</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>0</td>
                                        <td>Provinsi Maluku Utara</td>
                                        <td>82</td>
                                        <td>1</td>
                                        <td>1.5709993</td>
                                        <td>127.8087693</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>0</td>
                                        <td>Provinsi Papua Barat</td>
                                        <td>91</td>
                                        <td>1</td>
                                        <td>-1.3361154</td>
                                        <td>133.1747162</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>0</td>
                                        <td>Provinsi Papua</td>
                                        <td>94</td>
                                        <td>1</td>
                                        <td>-4.269928</td>
                                        <td>138.0803529</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>562</td>
                                        <td>74</td>
                                        <td>Kota Tangerang Selatan</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>-6.2888889</td>
                                        <td>106.7180556</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>821</td>
                                        <td>15</td>
                                        <td>Kabupaten Banyuwangi</td>
                                        <td>1501</td>
                                        <td>2</td>
                                        <td>-8.2186111</td>
                                        <td>114.3669444</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>823</td>
                                        <td>15</td>
                                        <td>Kabupaten Madiun</td>
                                        <td>1502</td>
                                        <td>2</td>
                                        <td>-7.627753</td>
                                        <td>111.505483</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>824</td>
                                        <td>15</td>
                                        <td>Kabupaten Ponorogo</td>
                                        <td>1503</td>
                                        <td>2</td>
                                        <td>-7.867827</td>
                                        <td>111.466003</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>825</td>
                                        <td>15</td>
                                        <td>Kabupaten Magetan</td>
                                        <td>1504</td>
                                        <td>2</td>
                                        <td>-7.6493413</td>
                                        <td>111.3381593</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>826</td>
                                        <td>15</td>
                                        <td>Kabupaten Pacitan</td>
                                        <td>1505</td>
                                        <td>2</td>
                                        <td>-8.204614</td>
                                        <td>111.08769</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>827</td>
                                        <td>15</td>
                                        <td>Kabupaten Ngawi</td>
                                        <td>1506</td>
                                        <td>2</td>
                                        <td>-7.38993</td>
                                        <td>111.46193</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>828</td>
                                        <td>15</td>
                                        <td>Kabupaten Bangkalan</td>
                                        <td>1507</td>
                                        <td>2</td>
                                        <td>-7.0306912</td>
                                        <td>112.7450068</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>829</td>
                                        <td>15</td>
                                        <td>Kabupaten Kediri</td>
                                        <td>1508</td>
                                        <td>2</td>
                                        <td>-7.809356</td>
                                        <td>112.032356</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>830</td>
                                        <td>15</td>
                                        <td>Kabupaten Bondowoso</td>
                                        <td>1509</td>
                                        <td>2</td>
                                        <td>-7.917704</td>
                                        <td>113.813483</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>831</td>
                                        <td>15</td>
                                        <td>Kabupaten Blitar</td>
                                        <td>1510</td>
                                        <td>2</td>
                                        <td>-8.1014419</td>
                                        <td>112.162762</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>832</td>
                                        <td>15</td>
                                        <td>Kabupaten Trenggalek</td>
                                        <td>1511</td>
                                        <td>2</td>
                                        <td>-8.05</td>
                                        <td>111.7166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>833</td>
                                        <td>15</td>
                                        <td>Kabupaten Tulungagung</td>
                                        <td>1512</td>
                                        <td>2</td>
                                        <td>-8.0666667</td>
                                        <td>111.9</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>834</td>
                                        <td>15</td>
                                        <td>Kabupaten Nganjuk</td>
                                        <td>1513</td>
                                        <td>2</td>
                                        <td>-7.602932</td>
                                        <td>111.901808</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>835</td>
                                        <td>15</td>
                                        <td>Kabupaten Situbondo</td>
                                        <td>1514</td>
                                        <td>2</td>
                                        <td>-7.702534</td>
                                        <td>113.955605</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>836</td>
                                        <td>15</td>
                                        <td>Kabupaten Malang</td>
                                        <td>1515</td>
                                        <td>2</td>
                                        <td>-8.0495643</td>
                                        <td>112.6884549</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>837</td>
                                        <td>15</td>
                                        <td>Kabupaten Jember</td>
                                        <td>1516</td>
                                        <td>2</td>
                                        <td>-8.172357</td>
                                        <td>113.700302</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>838</td>
                                        <td>15</td>
                                        <td>Kabupaten Sumenep</td>
                                        <td>1517</td>
                                        <td>2</td>
                                        <td>-6.9253999</td>
                                        <td>113.9060624</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>839</td>
                                        <td>15</td>
                                        <td>Kabupaten Pasuruan</td>
                                        <td>1518</td>
                                        <td>2</td>
                                        <td>-6.8623098</td>
                                        <td>108.8001936</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>840</td>
                                        <td>15</td>
                                        <td>Kabupaten Pamekasan</td>
                                        <td>1519</td>
                                        <td>2</td>
                                        <td>-7.1666667</td>
                                        <td>113.4666667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>841</td>
                                        <td>15</td>
                                        <td>Kabupaten Probolinggo</td>
                                        <td>1520</td>
                                        <td>2</td>
                                        <td>-7.753965</td>
                                        <td>113.210675</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>842</td>
                                        <td>15</td>
                                        <td>Kabupaten Lumajang</td>
                                        <td>1521</td>
                                        <td>2</td>
                                        <td>-8.137022</td>
                                        <td>113.226601</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>843</td>
                                        <td>15</td>
                                        <td>Kabupaten Bojonegoro</td>
                                        <td>1522</td>
                                        <td>2</td>
                                        <td>0.882681</td>
                                        <td>124.4669566</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>844</td>
                                        <td>15</td>
                                        <td>Kabupaten Tuban</td>
                                        <td>1523</td>
                                        <td>2</td>
                                        <td>-8.7493146</td>
                                        <td>115.1711298</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>845</td>
                                        <td>15</td>
                                        <td>Kabupaten Lamongan</td>
                                        <td>1524</td>
                                        <td>2</td>
                                        <td>-7.406153</td>
                                        <td>109.3946794</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>846</td>
                                        <td>15</td>
                                        <td>Kabupaten Sidoarjo</td>
                                        <td>1525</td>
                                        <td>2</td>
                                        <td>-7.4530278</td>
                                        <td>112.7173389</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>847</td>
                                        <td>15</td>
                                        <td>Kabupaten Sampang</td>
                                        <td>1526</td>
                                        <td>2</td>
                                        <td>-7.5782556</td>
                                        <td>109.2058436</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>848</td>
                                        <td>15</td>
                                        <td>Kabupaten Mojokerto</td>
                                        <td>1527</td>
                                        <td>2</td>
                                        <td>-7.488075</td>
                                        <td>112.427027</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>849</td>
                                        <td>15</td>
                                        <td>Kabupaten Gresik</td>
                                        <td>1528</td>
                                        <td>2</td>
                                        <td>-7.15665</td>
                                        <td>112.6555</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>850</td>
                                        <td>15</td>
                                        <td>Kabupaten Jombang</td>
                                        <td>1529</td>
                                        <td>2</td>
                                        <td>-7.5468395</td>
                                        <td>112.2264794</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>851</td>
                                        <td>15</td>
                                        <td>Kota Mojokerto</td>
                                        <td>1530</td>
                                        <td>2</td>
                                        <td>-7.4722222</td>
                                        <td>112.4336111</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>852</td>
                                        <td>15</td>
                                        <td>Kota Surabaya</td>
                                        <td>1531</td>
                                        <td>2</td>
                                        <td>-7.289166</td>
                                        <td>112.734398</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>853</td>
                                        <td>15</td>
                                        <td>Kota Madiun</td>
                                        <td>1532</td>
                                        <td>2</td>
                                        <td>-7.629714</td>
                                        <td>111.513702</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>854</td>
                                        <td>15</td>
                                        <td>Kota Blitar</td>
                                        <td>1533</td>
                                        <td>2</td>
                                        <td>-8.1</td>
                                        <td>112.15</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>855</td>
                                        <td>15</td>
                                        <td>Kota Malang</td>
                                        <td>1534</td>
                                        <td>2</td>
                                        <td>-7.981894</td>
                                        <td>112.626503</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>856</td>
                                        <td>15</td>
                                        <td>Kota Batu</td>
                                        <td>1535</td>
                                        <td>2</td>
                                        <td>-7.8671</td>
                                        <td>112.5239</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>857</td>
                                        <td>15</td>
                                        <td>Kota Pasuruan</td>
                                        <td>1536</td>
                                        <td>2</td>
                                        <td>-7.644872</td>
                                        <td>112.903297</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>858</td>
                                        <td>15</td>
                                        <td>Kota Kediri</td>
                                        <td>1537</td>
                                        <td>2</td>
                                        <td>-7.816895</td>
                                        <td>112.011398</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>859</td>
                                        <td>15</td>
                                        <td>Kota Probolinggo</td>
                                        <td>1538</td>
                                        <td>2</td>
                                        <td>-7.756928</td>
                                        <td>113.211502</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>925</td>
                                        <td>5</td>
                                        <td>Kabupaten Batanghari</td>
                                        <td>501</td>
                                        <td>2</td>
                                        <td>-1.7083922</td>
                                        <td>103.0817903</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>926</td>
                                        <td>5</td>
                                        <td>Kabupaten Bungo</td>
                                        <td>502</td>
                                        <td>2</td>
                                        <td>-1.6401338</td>
                                        <td>101.8891721</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>927</td>
                                        <td>5</td>
                                        <td>Kabupaten Kerinci</td>
                                        <td>503</td>
                                        <td>2</td>
                                        <td>-1.8720467</td>
                                        <td>101.4339148</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>928</td>
                                        <td>5</td>
                                        <td>Kabupaten Merangin</td>
                                        <td>504</td>
                                        <td>2</td>
                                        <td>-2.1752789</td>
                                        <td>101.9804613</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>929</td>
                                        <td>5</td>
                                        <td>Kabupaten Muaro Jambi</td>
                                        <td>505</td>
                                        <td>2</td>
                                        <td>-1.596672</td>
                                        <td>103.615799</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>930</td>
                                        <td>5</td>
                                        <td>Kabupaten Sarolangun</td>
                                        <td>506</td>
                                        <td>2</td>
                                        <td>-2.2654937</td>
                                        <td>102.6905326</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>931</td>
                                        <td>5</td>
                                        <td>Kabupaten Tanjung Jabung Barat</td>
                                        <td>507</td>
                                        <td>2</td>
                                        <td>-1.2332122</td>
                                        <td>103.7984428</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>932</td>
                                        <td>5</td>
                                        <td>Kabupaten Tanjung Jabung Timur</td>
                                        <td>508</td>
                                        <td>2</td>
                                        <td>-1.3291599</td>
                                        <td>103.89973</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>933</td>
                                        <td>5</td>
                                        <td>Kabupaten Tebo</td>
                                        <td>509</td>
                                        <td>2</td>
                                        <td>-1.2592999</td>
                                        <td>102.3463875</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>934</td>
                                        <td>5</td>
                                        <td>Kota Jambi</td>
                                        <td>510</td>
                                        <td>2</td>
                                        <td>-1.596672</td>
                                        <td>103.615799</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>935</td>
                                        <td>5</td>
                                        <td>Kota Sungai Penuh</td>
                                        <td>511</td>
                                        <td>2</td>
                                        <td>-2.06314</td>
                                        <td>101.387199</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1326</td>
                                        <td>1</td>
                                        <td>Kabupaten Simeulue</td>
                                        <td>1109</td>
                                        <td>2</td>
                                        <td>2.583333</td>
                                        <td>96.083333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1327</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Singkil</td>
                                        <td>1102</td>
                                        <td>2</td>
                                        <td>2.3589459</td>
                                        <td>97.87216</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1328</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Selatan</td>
                                        <td>1101</td>
                                        <td>2</td>
                                        <td>3.3115056</td>
                                        <td>97.3516558</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1329</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Tenggara</td>
                                        <td>1102</td>
                                        <td>2</td>
                                        <td>3.3088666</td>
                                        <td>97.6982272</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1330</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Timur</td>
                                        <td>1103</td>
                                        <td>2</td>
                                        <td>5.255443</td>
                                        <td>95.9885456</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1331</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Tengah</td>
                                        <td>1104</td>
                                        <td>2</td>
                                        <td>4.4482641</td>
                                        <td>96.8350999</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1332</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Barat</td>
                                        <td>1105</td>
                                        <td>2</td>
                                        <td>4.4542745</td>
                                        <td>96.1526985</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1333</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Besar</td>
                                        <td>1106</td>
                                        <td>2</td>
                                        <td>5.4529168</td>
                                        <td>95.4777811</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1334</td>
                                        <td>1</td>
                                        <td>Kabupaten Pidie</td>
                                        <td>1107</td>
                                        <td>2</td>
                                        <td>5.0742659</td>
                                        <td>95.940971</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1335</td>
                                        <td>1</td>
                                        <td>Kabupaten Bireuen</td>
                                        <td>1111</td>
                                        <td>2</td>
                                        <td>5.18254</td>
                                        <td>96.89005</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1336</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Utara</td>
                                        <td>1108</td>
                                        <td>2</td>
                                        <td>4.9786331</td>
                                        <td>97.2221421</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1337</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Barat Daya</td>
                                        <td>1112</td>
                                        <td>2</td>
                                        <td>3.0512643</td>
                                        <td>97.3368031</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1338</td>
                                        <td>1</td>
                                        <td>Kabupaten Gayo Lues</td>
                                        <td>1113</td>
                                        <td>2</td>
                                        <td>3.955165</td>
                                        <td>97.3516558</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1339</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Tamiang</td>
                                        <td>1116</td>
                                        <td>2</td>
                                        <td>4.2328871</td>
                                        <td>98.0028892</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1340</td>
                                        <td>1</td>
                                        <td>Kabupaten Nagan Raya</td>
                                        <td>1115</td>
                                        <td>2</td>
                                        <td>4.1248406</td>
                                        <td>96.4929797</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1341</td>
                                        <td>1</td>
                                        <td>Kabupaten Aceh Jaya</td>
                                        <td>1114</td>
                                        <td>2</td>
                                        <td>4.7873684</td>
                                        <td>95.6457951</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1342</td>
                                        <td>1</td>
                                        <td>Kabupaten Bener Meriah</td>
                                        <td>1117</td>
                                        <td>2</td>
                                        <td>4.7748348</td>
                                        <td>97.0068393</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1343</td>
                                        <td>1</td>
                                        <td>Kabupaten Pidie Jaya</td>
                                        <td>1118</td>
                                        <td>2</td>
                                        <td>5.1548063</td>
                                        <td>96.195132</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1344</td>
                                        <td>1</td>
                                        <td>Kota Banda Aceh</td>
                                        <td>1171</td>
                                        <td>2</td>
                                        <td>5.55</td>
                                        <td>95.3166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1345</td>
                                        <td>1</td>
                                        <td>Kota Sabang</td>
                                        <td>1172</td>
                                        <td>2</td>
                                        <td>5.8946929</td>
                                        <td>95.3192982</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1346</td>
                                        <td>1</td>
                                        <td>Kota Langsa</td>
                                        <td>1174</td>
                                        <td>2</td>
                                        <td>4.48</td>
                                        <td>97.9633333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1347</td>
                                        <td>1</td>
                                        <td>Kota Lhokseumawe</td>
                                        <td>1173</td>
                                        <td>2</td>
                                        <td>5.1880556</td>
                                        <td>97.1402778</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1348</td>
                                        <td>1</td>
                                        <td>Kota Subulussalam</td>
                                        <td>1175</td>
                                        <td>2</td>
                                        <td>2.6449927</td>
                                        <td>98.0165205</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1349</td>
                                        <td>2</td>
                                        <td>Kabupaten Nias</td>
                                        <td>1204</td>
                                        <td>2</td>
                                        <td>-8.1712591</td>
                                        <td>113.7111274</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1350</td>
                                        <td>2</td>
                                        <td>Kabupaten Mandailing Natal</td>
                                        <td>1213</td>
                                        <td>2</td>
                                        <td>0.7432372</td>
                                        <td>99.3673084</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1351</td>
                                        <td>2</td>
                                        <td>Kabupaten Tapanuli Selatan</td>
                                        <td>1203</td>
                                        <td>2</td>
                                        <td>1.5774933</td>
                                        <td>99.2785583</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1352</td>
                                        <td>2</td>
                                        <td>Kabupaten Tapanuli Tengah</td>
                                        <td>1201</td>
                                        <td>2</td>
                                        <td>1.8493299</td>
                                        <td>98.704075</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1353</td>
                                        <td>2</td>
                                        <td>Kabupaten Tapanuli Utara</td>
                                        <td>1202</td>
                                        <td>2</td>
                                        <td>2.0405246</td>
                                        <td>99.1013498</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1354</td>
                                        <td>2</td>
                                        <td>Kabupaten Toba Samosir</td>
                                        <td>1212</td>
                                        <td>2</td>
                                        <td>2.3502398</td>
                                        <td>99.2785583</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1355</td>
                                        <td>2</td>
                                        <td>Kabupaten Labuhanbatu</td>
                                        <td>1210</td>
                                        <td>2</td>
                                        <td>2.3439863</td>
                                        <td>100.1703257</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1356</td>
                                        <td>2</td>
                                        <td>Kabupaten Asahan</td>
                                        <td>1209</td>
                                        <td>2</td>
                                        <td>2.8174722</td>
                                        <td>99.634135</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1357</td>
                                        <td>2</td>
                                        <td>Kabupaten Simalungun</td>
                                        <td>1208</td>
                                        <td>2</td>
                                        <td>2.9781612</td>
                                        <td>99.2785583</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1358</td>
                                        <td>2</td>
                                        <td>Kabupaten Dairi</td>
                                        <td>1211</td>
                                        <td>2</td>
                                        <td>2.8675801</td>
                                        <td>98.265058</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1359</td>
                                        <td>2</td>
                                        <td>Kabupaten Karo</td>
                                        <td>1206</td>
                                        <td>2</td>
                                        <td>3.1052909</td>
                                        <td>98.265058</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1360</td>
                                        <td>2</td>
                                        <td>Kabupaten Deli Serdang</td>
                                        <td>1207</td>
                                        <td>2</td>
                                        <td>3.4201802</td>
                                        <td>98.704075</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1361</td>
                                        <td>2</td>
                                        <td>Kabupaten Langkat</td>
                                        <td>1205</td>
                                        <td>2</td>
                                        <td>3.8653916</td>
                                        <td>98.3088441</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1362</td>
                                        <td>2</td>
                                        <td>Kabupaten Nias Selatan</td>
                                        <td>1214</td>
                                        <td>2</td>
                                        <td>0.7086091</td>
                                        <td>97.8286368</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1363</td>
                                        <td>2</td>
                                        <td>Kabupaten Humbang Hasundutan</td>
                                        <td>1216</td>
                                        <td>2</td>
                                        <td>2.1988508</td>
                                        <td>98.5721016</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1364</td>
                                        <td>2</td>
                                        <td>Kabupaten Pakpak Bharat</td>
                                        <td>1215</td>
                                        <td>2</td>
                                        <td>2.545786</td>
                                        <td>98.299838</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1365</td>
                                        <td>2</td>
                                        <td>Kabupaten Samosir</td>
                                        <td>1217</td>
                                        <td>2</td>
                                        <td>2.5833333</td>
                                        <td>98.8166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1366</td>
                                        <td>2</td>
                                        <td>Kabupaten Serdang Bedagai</td>
                                        <td>1218</td>
                                        <td>2</td>
                                        <td>3.3371694</td>
                                        <td>99.0571089</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1367</td>
                                        <td>2</td>
                                        <td>Kabupaten Batu Bara</td>
                                        <td>1219</td>
                                        <td>2</td>
                                        <td>3.1740979</td>
                                        <td>99.5006143</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1368</td>
                                        <td>2</td>
                                        <td>Kabupaten Padang Lawas Utara</td>
                                        <td>1220</td>
                                        <td>2</td>
                                        <td>1.5758644</td>
                                        <td>99.634135</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1369</td>
                                        <td>2</td>
                                        <td>Kabupaten Padang Lawas</td>
                                        <td>1221</td>
                                        <td>2</td>
                                        <td>1.1186977</td>
                                        <td>99.8124935</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1370</td>
                                        <td>2</td>
                                        <td>Kota Sibolga</td>
                                        <td>1273</td>
                                        <td>2</td>
                                        <td>1.7403745</td>
                                        <td>98.7827988</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1371</td>
                                        <td>2</td>
                                        <td>Kota Tanjung Balai</td>
                                        <td>1274</td>
                                        <td>2</td>
                                        <td>2.965122</td>
                                        <td>99.800331</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1372</td>
                                        <td>2</td>
                                        <td>Kota Pematang Siantar</td>
                                        <td>1272</td>
                                        <td>2</td>
                                        <td>2.96</td>
                                        <td>99.06</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1373</td>
                                        <td>2</td>
                                        <td>Kota Tebing Tinggi</td>
                                        <td>1276</td>
                                        <td>2</td>
                                        <td>3.3856205</td>
                                        <td>99.2009815</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1374</td>
                                        <td>2</td>
                                        <td>Kota Medan</td>
                                        <td>1271</td>
                                        <td>2</td>
                                        <td>3.585242</td>
                                        <td>98.6755979</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1375</td>
                                        <td>2</td>
                                        <td>Kota Binjai</td>
                                        <td>1275</td>
                                        <td>2</td>
                                        <td>3.594462</td>
                                        <td>98.482246</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1376</td>
                                        <td>2</td>
                                        <td>Kota Padangsidimpuan</td>
                                        <td>1277</td>
                                        <td>2</td>
                                        <td>1.380424</td>
                                        <td>99.273972</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1377</td>
                                        <td>3</td>
                                        <td>Kabupaten Kepulauan Mentawai</td>
                                        <td>1309</td>
                                        <td>2</td>
                                        <td>-1.426001</td>
                                        <td>98.9245343</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1378</td>
                                        <td>3</td>
                                        <td>Kabupaten Pesisir Selatan</td>
                                        <td>1301</td>
                                        <td>2</td>
                                        <td>-1.7223147</td>
                                        <td>100.8903099</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1379</td>
                                        <td>3</td>
                                        <td>Kabupaten Solok</td>
                                        <td>1302</td>
                                        <td>2</td>
                                        <td>-0.803027</td>
                                        <td>100.644402</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1380</td>
                                        <td>3</td>
                                        <td>Kabupaten Sijunjung</td>
                                        <td>1303</td>
                                        <td>2</td>
                                        <td>-0.6881586</td>
                                        <td>100.997658</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1381</td>
                                        <td>3</td>
                                        <td>Kabupaten Tanah Datar</td>
                                        <td>1304</td>
                                        <td>2</td>
                                        <td>-0.4797043</td>
                                        <td>100.5746224</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1382</td>
                                        <td>3</td>
                                        <td>Kabupaten Padang Pariaman</td>
                                        <td>1305</td>
                                        <td>2</td>
                                        <td>-0.5546757</td>
                                        <td>100.2151578</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1383</td>
                                        <td>3</td>
                                        <td>Kabupaten Agam</td>
                                        <td>1306</td>
                                        <td>2</td>
                                        <td>-0.2209392</td>
                                        <td>100.1703257</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1384</td>
                                        <td>3</td>
                                        <td>Kabupaten Lima Puluh Kota</td>
                                        <td>1307</td>
                                        <td>2</td>
                                        <td>3.168216</td>
                                        <td>99.4187929</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1385</td>
                                        <td>3</td>
                                        <td>Kabupaten Pasaman</td>
                                        <td>1308</td>
                                        <td>2</td>
                                        <td>0.1288752</td>
                                        <td>99.7901781</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1386</td>
                                        <td>3</td>
                                        <td>Kabupaten Solok Selatan</td>
                                        <td>1311</td>
                                        <td>2</td>
                                        <td>-1.4157329</td>
                                        <td>101.2523792</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1387</td>
                                        <td>3</td>
                                        <td>Kabupaten Dharmas Raya</td>
                                        <td>1310</td>
                                        <td>2</td>
                                        <td>-1.1120568</td>
                                        <td>101.6157773</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1388</td>
                                        <td>3</td>
                                        <td>Kabupaten Pasaman Barat</td>
                                        <td>1312</td>
                                        <td>2</td>
                                        <td>0.2213005</td>
                                        <td>99.634135</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1389</td>
                                        <td>3</td>
                                        <td>Kota Padang</td>
                                        <td>1371</td>
                                        <td>2</td>
                                        <td>-0.95</td>
                                        <td>100.3530556</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1390</td>
                                        <td>3</td>
                                        <td>Kota Solok</td>
                                        <td>1372</td>
                                        <td>2</td>
                                        <td>-0.803027</td>
                                        <td>100.644402</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1391</td>
                                        <td>3</td>
                                        <td>Kota Sawah Lunto</td>
                                        <td>1373</td>
                                        <td>2</td>
                                        <td>-0.6810286</td>
                                        <td>100.7763604</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1392</td>
                                        <td>3</td>
                                        <td>Kota Padang Panjang</td>
                                        <td>1374</td>
                                        <td>2</td>
                                        <td>-0.470679</td>
                                        <td>100.4059456</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1393</td>
                                        <td>3</td>
                                        <td>Kota Bukittinggi</td>
                                        <td>1375</td>
                                        <td>2</td>
                                        <td>-0.3055556</td>
                                        <td>100.3691667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1394</td>
                                        <td>3</td>
                                        <td>Kota Payakumbuh</td>
                                        <td>1376</td>
                                        <td>2</td>
                                        <td>-0.22887</td>
                                        <td>100.632301</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1395</td>
                                        <td>3</td>
                                        <td>Kota Pariaman</td>
                                        <td>1377</td>
                                        <td>2</td>
                                        <td>-0.6264389</td>
                                        <td>100.1179574</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1396</td>
                                        <td>4</td>
                                        <td>Kabupaten Kuantan Singingi</td>
                                        <td>1409</td>
                                        <td>2</td>
                                        <td>-0.4411596</td>
                                        <td>101.5248055</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1397</td>
                                        <td>4</td>
                                        <td>Kabupaten Indragiri Hulu</td>
                                        <td>1402</td>
                                        <td>2</td>
                                        <td>-0.7361181</td>
                                        <td>102.2547919</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1398</td>
                                        <td>4</td>
                                        <td>Kabupaten Indragiri Hilir</td>
                                        <td>1404</td>
                                        <td>2</td>
                                        <td>-0.1456733</td>
                                        <td>102.989615</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1399</td>
                                        <td>4</td>
                                        <td>Kabupaten Pelalawan</td>
                                        <td>1405</td>
                                        <td>2</td>
                                        <td>0.441415</td>
                                        <td>102.088699</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1400</td>
                                        <td>4</td>
                                        <td>Kabupaten S I A K</td>
                                        <td>1408</td>
                                        <td>2</td>
                                        <td>-0.789275</td>
                                        <td>113.921327</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1401</td>
                                        <td>4</td>
                                        <td>Kabupaten Kampar</td>
                                        <td>1401</td>
                                        <td>2</td>
                                        <td>0.146671</td>
                                        <td>101.1617356</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1402</td>
                                        <td>4</td>
                                        <td>Kabupaten Rokan Hulu</td>
                                        <td>1406</td>
                                        <td>2</td>
                                        <td>1.0410934</td>
                                        <td>100.439656</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1403</td>
                                        <td>4</td>
                                        <td>Kabupaten Bengkalis</td>
                                        <td>1403</td>
                                        <td>2</td>
                                        <td>1.4897222</td>
                                        <td>102.0797222</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1404</td>
                                        <td>4</td>
                                        <td>Kabupaten Rokan Hilir</td>
                                        <td>1407</td>
                                        <td>2</td>
                                        <td>1.6463978</td>
                                        <td>100.8000051</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1405</td>
                                        <td>4</td>
                                        <td>Kota Pekanbaru</td>
                                        <td>1471</td>
                                        <td>2</td>
                                        <td>0.5333333</td>
                                        <td>101.45</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1406</td>
                                        <td>4</td>
                                        <td>Kota Dumai</td>
                                        <td>1472</td>
                                        <td>2</td>
                                        <td>1.665742</td>
                                        <td>101.447601</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1407</td>
                                        <td>5</td>
                                        <td>Kabupaten Kerinci</td>
                                        <td>1501</td>
                                        <td>2</td>
                                        <td>-1.697</td>
                                        <td>101.264</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1408</td>
                                        <td>5</td>
                                        <td>Kabupaten Merangin</td>
                                        <td>1502</td>
                                        <td>2</td>
                                        <td>-2.1752789</td>
                                        <td>101.9804613</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1409</td>
                                        <td>5</td>
                                        <td>Kabupaten Sarolangun</td>
                                        <td>1503</td>
                                        <td>2</td>
                                        <td>-2.2654937</td>
                                        <td>102.6905326</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1410</td>
                                        <td>5</td>
                                        <td>Kabupaten Batang Hari</td>
                                        <td>1504</td>
                                        <td>2</td>
                                        <td>-1.7083922</td>
                                        <td>103.0817903</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1411</td>
                                        <td>5</td>
                                        <td>Kabupaten Muaro Jambi</td>
                                        <td>1505</td>
                                        <td>2</td>
                                        <td>-1.596672</td>
                                        <td>103.615799</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1412</td>
                                        <td>5</td>
                                        <td>Kabupaten Tanjung Jabung Timur</td>
                                        <td>1507</td>
                                        <td>2</td>
                                        <td>-1.3291599</td>
                                        <td>103.89973</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1413</td>
                                        <td>5</td>
                                        <td>Kabupaten Tanjung Jabung Barat</td>
                                        <td>1506</td>
                                        <td>2</td>
                                        <td>-1.2332122</td>
                                        <td>103.7984428</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1414</td>
                                        <td>5</td>
                                        <td>Kabupaten Tebo</td>
                                        <td>1509</td>
                                        <td>2</td>
                                        <td>-1.2592999</td>
                                        <td>102.3463875</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1415</td>
                                        <td>5</td>
                                        <td>Kabupaten Bungo</td>
                                        <td>1508</td>
                                        <td>2</td>
                                        <td>-1.6401338</td>
                                        <td>101.8891721</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1416</td>
                                        <td>5</td>
                                        <td>Kota Jambi</td>
                                        <td>1571</td>
                                        <td>2</td>
                                        <td>-1.596672</td>
                                        <td>103.615799</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1417</td>
                                        <td>6</td>
                                        <td>Kabupaten Ogan Komering Ulu</td>
                                        <td>1601</td>
                                        <td>2</td>
                                        <td>-4.0283486</td>
                                        <td>104.0072348</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1418</td>
                                        <td>6</td>
                                        <td>Kabupaten Ogan Komering Ilir</td>
                                        <td>1602</td>
                                        <td>2</td>
                                        <td>-3.4559744</td>
                                        <td>105.2194808</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1419</td>
                                        <td>6</td>
                                        <td>Kabupaten Muara Enim</td>
                                        <td>1603</td>
                                        <td>2</td>
                                        <td>-3.651581</td>
                                        <td>103.770798</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1420</td>
                                        <td>6</td>
                                        <td>Kabupaten Lahat</td>
                                        <td>1604</td>
                                        <td>2</td>
                                        <td>-3.7863889</td>
                                        <td>103.5427778</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1421</td>
                                        <td>6</td>
                                        <td>Kabupaten Musi Rawas</td>
                                        <td>1605</td>
                                        <td>2</td>
                                        <td>-2.8625305</td>
                                        <td>102.989615</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1422</td>
                                        <td>6</td>
                                        <td>Kabupaten Musi Banyuasin</td>
                                        <td>1606</td>
                                        <td>2</td>
                                        <td>-2.5442029</td>
                                        <td>103.7289167</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1423</td>
                                        <td>6</td>
                                        <td>Kabupaten Banyu Asin</td>
                                        <td>1607</td>
                                        <td>2</td>
                                        <td>-2.6095639</td>
                                        <td>104.7520939</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1424</td>
                                        <td>6</td>
                                        <td>Kabupaten Ogan Komering Ulu Selatan</td>
                                        <td>1609</td>
                                        <td>2</td>
                                        <td>-4.6681951</td>
                                        <td>104.0072348</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1425</td>
                                        <td>6</td>
                                        <td>Kabupaten Ogan Komering Ulu Timur</td>
                                        <td>1608</td>
                                        <td>2</td>
                                        <td>-3.8567934</td>
                                        <td>104.7520939</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1426</td>
                                        <td>6</td>
                                        <td>Kabupaten Ogan Ilir</td>
                                        <td>1610</td>
                                        <td>2</td>
                                        <td>-3.426544</td>
                                        <td>104.6121475</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1427</td>
                                        <td>6</td>
                                        <td>Kabupaten Empat Lawang</td>
                                        <td>1611</td>
                                        <td>2</td>
                                        <td>-3.7286029</td>
                                        <td>102.8975098</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1428</td>
                                        <td>6</td>
                                        <td>Kota Palembang</td>
                                        <td>1671</td>
                                        <td>2</td>
                                        <td>-2.9911083</td>
                                        <td>104.7567333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1429</td>
                                        <td>6</td>
                                        <td>Kota Prabumulih</td>
                                        <td>1674</td>
                                        <td>2</td>
                                        <td>-3.440956</td>
                                        <td>104.235397</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1430</td>
                                        <td>6</td>
                                        <td>Kota Pagar Alam</td>
                                        <td>1672</td>
                                        <td>2</td>
                                        <td>-4.03767</td>
                                        <td>103.265297</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1431</td>
                                        <td>6</td>
                                        <td>Kota Lubuklinggau</td>
                                        <td>1673</td>
                                        <td>2</td>
                                        <td>-3.2966667</td>
                                        <td>102.8616667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1432</td>
                                        <td>7</td>
                                        <td>Kabupaten Bengkulu Selatan</td>
                                        <td>1701</td>
                                        <td>2</td>
                                        <td>-4.3248409</td>
                                        <td>103.035694</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1433</td>
                                        <td>7</td>
                                        <td>Kabupaten Rejang Lebong</td>
                                        <td>1702</td>
                                        <td>2</td>
                                        <td>-3.4548154</td>
                                        <td>102.6675575</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1434</td>
                                        <td>7</td>
                                        <td>Kabupaten Bengkulu Utara</td>
                                        <td>1703</td>
                                        <td>2</td>
                                        <td>-3.4219555</td>
                                        <td>102.1632718</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1435</td>
                                        <td>7</td>
                                        <td>Kabupaten Kaur</td>
                                        <td>1704</td>
                                        <td>2</td>
                                        <td>-4.6792278</td>
                                        <td>103.4511768</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1436</td>
                                        <td>7</td>
                                        <td>Kabupaten Seluma</td>
                                        <td>1705</td>
                                        <td>2</td>
                                        <td>-4.0622929</td>
                                        <td>102.5642261</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1437</td>
                                        <td>7</td>
                                        <td>Kabupaten Mukomuko</td>
                                        <td>1706</td>
                                        <td>2</td>
                                        <td>-2.5760003</td>
                                        <td>101.1169805</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1438</td>
                                        <td>7</td>
                                        <td>Kabupaten Lebong</td>
                                        <td>1707</td>
                                        <td>2</td>
                                        <td>-2.992617</td>
                                        <td>104.382202</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1439</td>
                                        <td>7</td>
                                        <td>Kabupaten Kepahiang</td>
                                        <td>1708</td>
                                        <td>2</td>
                                        <td>-3.651431</td>
                                        <td>102.578201</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1440</td>
                                        <td>7</td>
                                        <td>Kota Bengkulu</td>
                                        <td>1771</td>
                                        <td>2</td>
                                        <td>-3.7955556</td>
                                        <td>102.2591667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1441</td>
                                        <td>8</td>
                                        <td>Kabupaten Lampung Barat</td>
                                        <td>1804</td>
                                        <td>2</td>
                                        <td>-5.1490396</td>
                                        <td>104.1930918</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1442</td>
                                        <td>8</td>
                                        <td>Kabupaten Tanggamus</td>
                                        <td>1802</td>
                                        <td>2</td>
                                        <td>-5.3027489</td>
                                        <td>104.5655273</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1443</td>
                                        <td>8</td>
                                        <td>Kabupaten Lampung Selatan</td>
                                        <td>1801</td>
                                        <td>2</td>
                                        <td>-5.5622614</td>
                                        <td>105.5474373</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1444</td>
                                        <td>8</td>
                                        <td>Kabupaten Lampung Timur</td>
                                        <td>1807</td>
                                        <td>2</td>
                                        <td>-5.1134995</td>
                                        <td>105.6881788</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1445</td>
                                        <td>8</td>
                                        <td>Kabupaten Lampung Tengah</td>
                                        <td>1802</td>
                                        <td>2</td>
                                        <td>-4.8008086</td>
                                        <td>105.3131185</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1446</td>
                                        <td>8</td>
                                        <td>Kabupaten Lampung Utara</td>
                                        <td>1803</td>
                                        <td>2</td>
                                        <td>-4.8133905</td>
                                        <td>104.7520939</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1447</td>
                                        <td>8</td>
                                        <td>Kabupaten Way Kanan</td>
                                        <td>1808</td>
                                        <td>2</td>
                                        <td>-4.4963689</td>
                                        <td>104.5655273</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1448</td>
                                        <td>8</td>
                                        <td>Kabupaten Tulangbawang</td>
                                        <td>1812</td>
                                        <td>2</td>
                                        <td>-4.3176576</td>
                                        <td>105.5005483</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1449</td>
                                        <td>8</td>
                                        <td>Kabupaten Pesawaran</td>
                                        <td>1809</td>
                                        <td>2</td>
                                        <td>-5.493245</td>
                                        <td>105.0791228</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1450</td>
                                        <td>8</td>
                                        <td>Kota Bandar Lampung</td>
                                        <td>1871</td>
                                        <td>2</td>
                                        <td>-5.45</td>
                                        <td>105.2666667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1451</td>
                                        <td>8</td>
                                        <td>Kota Metro</td>
                                        <td>1872</td>
                                        <td>2</td>
                                        <td>-5.1166667</td>
                                        <td>105.3</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1452</td>
                                        <td>9</td>
                                        <td>Kabupaten Bangka</td>
                                        <td>1901</td>
                                        <td>2</td>
                                        <td>-2.2884782</td>
                                        <td>106.0640179</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1453</td>
                                        <td>9</td>
                                        <td>Kabupaten Belitung</td>
                                        <td>1902</td>
                                        <td>2</td>
                                        <td>-2.8708938</td>
                                        <td>107.9531836</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1454</td>
                                        <td>9</td>
                                        <td>Kabupaten Bangka Barat</td>
                                        <td>1905</td>
                                        <td>2</td>
                                        <td>-2.2884782</td>
                                        <td>106.0640179</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1455</td>
                                        <td>9</td>
                                        <td>Kabupaten Bangka Tengah</td>
                                        <td>1904</td>
                                        <td>2</td>
                                        <td>-2.2884782</td>
                                        <td>106.0640179</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1456</td>
                                        <td>9</td>
                                        <td>Kabupaten Bangka Selatan</td>
                                        <td>1903</td>
                                        <td>2</td>
                                        <td>-2.2884782</td>
                                        <td>106.0640179</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1457</td>
                                        <td>9</td>
                                        <td>Kabupaten Belitung Timur</td>
                                        <td>1906</td>
                                        <td>2</td>
                                        <td>-2.8708938</td>
                                        <td>107.9531836</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1458</td>
                                        <td>9</td>
                                        <td>Kota Pangkal Pinang</td>
                                        <td>1971</td>
                                        <td>2</td>
                                        <td>-2.129323</td>
                                        <td>106.109596</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1459</td>
                                        <td>10</td>
                                        <td>Kabupaten Karimun</td>
                                        <td>2102</td>
                                        <td>2</td>
                                        <td>1.05</td>
                                        <td>103.3666667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1460</td>
                                        <td>10</td>
                                        <td>Kabupaten Bintan</td>
                                        <td>2101</td>
                                        <td>2</td>
                                        <td>1.0619173</td>
                                        <td>104.5189214</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1461</td>
                                        <td>10</td>
                                        <td>Kabupaten Natuna</td>
                                        <td>2103</td>
                                        <td>2</td>
                                        <td>3.9329945</td>
                                        <td>108.1812242</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1462</td>
                                        <td>10</td>
                                        <td>Kabupaten Lingga</td>
                                        <td>2104</td>
                                        <td>2</td>
                                        <td>-0.1627686</td>
                                        <td>104.6354631</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1463</td>
                                        <td>10</td>
                                        <td>Kota Batam</td>
                                        <td>2171</td>
                                        <td>2</td>
                                        <td>1.0456264</td>
                                        <td>104.0304535</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1464</td>
                                        <td>10</td>
                                        <td>Kota Tanjung Pinang</td>
                                        <td>2172</td>
                                        <td>2</td>
                                        <td>0.9179205</td>
                                        <td>104.446464</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1465</td>
                                        <td>11</td>
                                        <td>Kabupaten Kepulauan Seribu</td>
                                        <td>3101</td>
                                        <td>2</td>
                                        <td>-5.7985266</td>
                                        <td>106.5071982</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1466</td>
                                        <td>11</td>
                                        <td>Kota Jakarta Selatan</td>
                                        <td>3174</td>
                                        <td>2</td>
                                        <td>-6.332973</td>
                                        <td>106.807915</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1467</td>
                                        <td>11</td>
                                        <td>Kota Jakarta Timur</td>
                                        <td>3175</td>
                                        <td>2</td>
                                        <td>-6.211544</td>
                                        <td>106.845172</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1468</td>
                                        <td>11</td>
                                        <td>Kota Jakarta Pusat</td>
                                        <td>3171</td>
                                        <td>2</td>
                                        <td>-6.211544</td>
                                        <td>106.845172</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1469</td>
                                        <td>11</td>
                                        <td>Kota Jakarta Barat</td>
                                        <td>3173</td>
                                        <td>2</td>
                                        <td>-6.211544</td>
                                        <td>106.845172</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1470</td>
                                        <td>11</td>
                                        <td>Kota Jakarta Utara</td>
                                        <td>3172</td>
                                        <td>2</td>
                                        <td>-6.211544</td>
                                        <td>106.845172</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1471</td>
                                        <td>12</td>
                                        <td>Kabupaten Bogor</td>
                                        <td>3201</td>
                                        <td>2</td>
                                        <td>-6.6</td>
                                        <td>106.8</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1472</td>
                                        <td>12</td>
                                        <td>Kabupaten Sukabumi</td>
                                        <td>3202</td>
                                        <td>2</td>
                                        <td>-6.92405</td>
                                        <td>106.922203</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1473</td>
                                        <td>12</td>
                                        <td>Kabupaten Cianjur</td>
                                        <td>3203</td>
                                        <td>2</td>
                                        <td>-6.8172531</td>
                                        <td>107.1307289</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1474</td>
                                        <td>12</td>
                                        <td>Kabupaten Bandung</td>
                                        <td>3204</td>
                                        <td>2</td>
                                        <td>-6.9147444</td>
                                        <td>107.6098111</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1475</td>
                                        <td>12</td>
                                        <td>Kabupaten Garut</td>
                                        <td>3205</td>
                                        <td>2</td>
                                        <td>-7.227906</td>
                                        <td>107.908699</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1476</td>
                                        <td>12</td>
                                        <td>Kabupaten Tasikmalaya</td>
                                        <td>3206</td>
                                        <td>2</td>
                                        <td>-7.327954</td>
                                        <td>108.214104</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1477</td>
                                        <td>12</td>
                                        <td>Kabupaten Ciamis</td>
                                        <td>3207</td>
                                        <td>2</td>
                                        <td>-7.3333333</td>
                                        <td>108.35</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1478</td>
                                        <td>12</td>
                                        <td>Kabupaten Kuningan</td>
                                        <td>3208</td>
                                        <td>2</td>
                                        <td>-6.9833333</td>
                                        <td>108.4833333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1479</td>
                                        <td>12</td>
                                        <td>Kabupaten Cirebon</td>
                                        <td>3209</td>
                                        <td>2</td>
                                        <td>-6.715534</td>
                                        <td>108.564003</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1480</td>
                                        <td>12</td>
                                        <td>Kabupaten Majalengka</td>
                                        <td>3210</td>
                                        <td>2</td>
                                        <td>-6.8531026</td>
                                        <td>108.2258897</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1481</td>
                                        <td>12</td>
                                        <td>Kabupaten Sumedang</td>
                                        <td>3211</td>
                                        <td>2</td>
                                        <td>0.6095949</td>
                                        <td>110.0330554</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1482</td>
                                        <td>12</td>
                                        <td>Kabupaten Indramayu</td>
                                        <td>3212</td>
                                        <td>2</td>
                                        <td>-6.336315</td>
                                        <td>108.325104</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1483</td>
                                        <td>12</td>
                                        <td>Kabupaten Subang</td>
                                        <td>3213</td>
                                        <td>2</td>
                                        <td>-6.569361</td>
                                        <td>107.752403</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1484</td>
                                        <td>12</td>
                                        <td>Kabupaten Purwakarta</td>
                                        <td>3214</td>
                                        <td>2</td>
                                        <td>-6.5386806</td>
                                        <td>107.4499404</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1485</td>
                                        <td>12</td>
                                        <td>Kabupaten Karawang</td>
                                        <td>3215</td>
                                        <td>2</td>
                                        <td>-6.3227303</td>
                                        <td>107.3375791</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1486</td>
                                        <td>12</td>
                                        <td>Kabupaten Bekasi</td>
                                        <td>3216</td>
                                        <td>2</td>
                                        <td>-6.2333333</td>
                                        <td>107</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1487</td>
                                        <td>12</td>
                                        <td>Kabupaten Bandung Barat</td>
                                        <td>3217</td>
                                        <td>2</td>
                                        <td>-6.8937121</td>
                                        <td>107.4321959</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1488</td>
                                        <td>12</td>
                                        <td>Kota Bogor</td>
                                        <td>3271</td>
                                        <td>2</td>
                                        <td>-6.6</td>
                                        <td>106.8</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1489</td>
                                        <td>12</td>
                                        <td>Kota Sukabumi</td>
                                        <td>3272</td>
                                        <td>2</td>
                                        <td>-6.92405</td>
                                        <td>106.922203</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1490</td>
                                        <td>12</td>
                                        <td>Kota Bandung</td>
                                        <td>3273</td>
                                        <td>2</td>
                                        <td>-6.9147444</td>
                                        <td>107.6098111</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1491</td>
                                        <td>12</td>
                                        <td>Kota Cirebon</td>
                                        <td>3274</td>
                                        <td>2</td>
                                        <td>-6.715534</td>
                                        <td>108.564003</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1492</td>
                                        <td>12</td>
                                        <td>Kota Bekasi</td>
                                        <td>3275</td>
                                        <td>2</td>
                                        <td>-6.2333333</td>
                                        <td>107</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1493</td>
                                        <td>12</td>
                                        <td>Kota Depok</td>
                                        <td>3276</td>
                                        <td>2</td>
                                        <td>-6.39</td>
                                        <td>106.83</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1494</td>
                                        <td>12</td>
                                        <td>Kota Cimahi</td>
                                        <td>3277</td>
                                        <td>2</td>
                                        <td>-6.880239</td>
                                        <td>107.5355</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1495</td>
                                        <td>12</td>
                                        <td>Kota Tasikmalaya</td>
                                        <td>3278</td>
                                        <td>2</td>
                                        <td>-7.327954</td>
                                        <td>108.214104</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1496</td>
                                        <td>12</td>
                                        <td>Kota Banjar</td>
                                        <td>3279</td>
                                        <td>2</td>
                                        <td>-7.3666667</td>
                                        <td>108.5333333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1497</td>
                                        <td>13</td>
                                        <td>Kabupaten Cilacap</td>
                                        <td>3301</td>
                                        <td>2</td>
                                        <td>-7.733333</td>
                                        <td>109</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1498</td>
                                        <td>13</td>
                                        <td>Kabupaten Banyumas</td>
                                        <td>3302</td>
                                        <td>2</td>
                                        <td>-7.4832133</td>
                                        <td>109.140438</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1499</td>
                                        <td>13</td>
                                        <td>Kabupaten Purbalingga</td>
                                        <td>3303</td>
                                        <td>2</td>
                                        <td>-7.390747</td>
                                        <td>109.3638</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1500</td>
                                        <td>13</td>
                                        <td>Kabupaten Banjarnegara</td>
                                        <td>3304</td>
                                        <td>2</td>
                                        <td>-7.402706</td>
                                        <td>109.681396</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1501</td>
                                        <td>13</td>
                                        <td>Kabupaten Kebumen</td>
                                        <td>3305</td>
                                        <td>2</td>
                                        <td>-7.678682</td>
                                        <td>109.656502</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1502</td>
                                        <td>13</td>
                                        <td>Kabupaten Purworejo</td>
                                        <td>3306</td>
                                        <td>2</td>
                                        <td>-7.709731</td>
                                        <td>110.008003</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1503</td>
                                        <td>13</td>
                                        <td>Kabupaten Wonosobo</td>
                                        <td>3307</td>
                                        <td>2</td>
                                        <td>-7.362109</td>
                                        <td>109.899399</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1504</td>
                                        <td>13</td>
                                        <td>Kabupaten Magelang</td>
                                        <td>3308</td>
                                        <td>2</td>
                                        <td>-7.481253</td>
                                        <td>110.213799</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1505</td>
                                        <td>13</td>
                                        <td>Kabupaten Boyolali</td>
                                        <td>3309</td>
                                        <td>2</td>
                                        <td>-7.523819</td>
                                        <td>110.595901</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1506</td>
                                        <td>13</td>
                                        <td>Kabupaten Klaten</td>
                                        <td>3310</td>
                                        <td>2</td>
                                        <td>-7.711687</td>
                                        <td>110.595497</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1507</td>
                                        <td>13</td>
                                        <td>Kabupaten Sukoharjo</td>
                                        <td>3311</td>
                                        <td>2</td>
                                        <td>-7.6808818</td>
                                        <td>110.8195292</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1508</td>
                                        <td>13</td>
                                        <td>Kabupaten Wonogiri</td>
                                        <td>3312</td>
                                        <td>2</td>
                                        <td>-7.817782</td>
                                        <td>110.920601</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1509</td>
                                        <td>13</td>
                                        <td>Kabupaten Karanganyar</td>
                                        <td>3313</td>
                                        <td>2</td>
                                        <td>-7.5961111</td>
                                        <td>110.9508333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1510</td>
                                        <td>13</td>
                                        <td>Kabupaten Sragen</td>
                                        <td>3314</td>
                                        <td>2</td>
                                        <td>-7.430229</td>
                                        <td>111.021301</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1511</td>
                                        <td>13</td>
                                        <td>Kabupaten Grobogan</td>
                                        <td>3315</td>
                                        <td>2</td>
                                        <td>-7.0217194</td>
                                        <td>110.9625854</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1512</td>
                                        <td>13</td>
                                        <td>Kabupaten Blora</td>
                                        <td>3316</td>
                                        <td>2</td>
                                        <td>-6.95</td>
                                        <td>111.4166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1513</td>
                                        <td>13</td>
                                        <td>Kabupaten Rembang</td>
                                        <td>3317</td>
                                        <td>2</td>
                                        <td>-6.71124</td>
                                        <td>111.345299</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1514</td>
                                        <td>13</td>
                                        <td>Kabupaten Pati</td>
                                        <td>3318</td>
                                        <td>2</td>
                                        <td>-6.751338</td>
                                        <td>111.038002</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1515</td>
                                        <td>13</td>
                                        <td>Kabupaten Kudus</td>
                                        <td>3319</td>
                                        <td>2</td>
                                        <td>-6.804087</td>
                                        <td>110.838203</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1516</td>
                                        <td>13</td>
                                        <td>Kabupaten Jepara</td>
                                        <td>3320</td>
                                        <td>2</td>
                                        <td>-6.5596059</td>
                                        <td>110.6717</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1517</td>
                                        <td>13</td>
                                        <td>Kabupaten Demak</td>
                                        <td>3321</td>
                                        <td>2</td>
                                        <td>-6.888115</td>
                                        <td>110.639297</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1518</td>
                                        <td>13</td>
                                        <td>Kabupaten Semarang</td>
                                        <td>3322</td>
                                        <td>2</td>
                                        <td>-6.9666667</td>
                                        <td>110.4166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1519</td>
                                        <td>13</td>
                                        <td>Kabupaten Temanggung</td>
                                        <td>3323</td>
                                        <td>2</td>
                                        <td>-7.316669</td>
                                        <td>110.174797</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1520</td>
                                        <td>13</td>
                                        <td>Kabupaten Kendal</td>
                                        <td>3324</td>
                                        <td>2</td>
                                        <td>-6.919686</td>
                                        <td>110.205597</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1521</td>
                                        <td>13</td>
                                        <td>Kabupaten Batang</td>
                                        <td>3325</td>
                                        <td>2</td>
                                        <td>-6.8941111</td>
                                        <td>109.7234519</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1522</td>
                                        <td>13</td>
                                        <td>Kabupaten Pekalongan</td>
                                        <td>3326</td>
                                        <td>2</td>
                                        <td>-6.882887</td>
                                        <td>109.669998</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1523</td>
                                        <td>13</td>
                                        <td>Kabupaten Pemalang</td>
                                        <td>3327</td>
                                        <td>2</td>
                                        <td>-6.884234</td>
                                        <td>109.377998</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1524</td>
                                        <td>13</td>
                                        <td>Kabupaten Tegal</td>
                                        <td>3328</td>
                                        <td>2</td>
                                        <td>-6.8666667</td>
                                        <td>109.1333333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1525</td>
                                        <td>13</td>
                                        <td>Kabupaten Brebes</td>
                                        <td>3329</td>
                                        <td>2</td>
                                        <td>-6.8833333</td>
                                        <td>109.05</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1526</td>
                                        <td>13</td>
                                        <td>Kota Magelang</td>
                                        <td>3371</td>
                                        <td>2</td>
                                        <td>-7.481253</td>
                                        <td>110.213799</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1527</td>
                                        <td>13</td>
                                        <td>Kota Surakarta</td>
                                        <td>3372</td>
                                        <td>2</td>
                                        <td>-7.5666667</td>
                                        <td>110.8166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1528</td>
                                        <td>13</td>
                                        <td>Kota Salatiga</td>
                                        <td>3373</td>
                                        <td>2</td>
                                        <td>-7.302328</td>
                                        <td>110.4729</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1529</td>
                                        <td>13</td>
                                        <td>Kota Semarang</td>
                                        <td>3374</td>
                                        <td>2</td>
                                        <td>-6.9666667</td>
                                        <td>110.4166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1530</td>
                                        <td>13</td>
                                        <td>Kota Pekalongan</td>
                                        <td>3375</td>
                                        <td>2</td>
                                        <td>-6.882887</td>
                                        <td>109.669998</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1531</td>
                                        <td>13</td>
                                        <td>Kota Tegal</td>
                                        <td>3376</td>
                                        <td>2</td>
                                        <td>-6.8666667</td>
                                        <td>109.1333333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1532</td>
                                        <td>14</td>
                                        <td>Kabupaten Kulon Progo</td>
                                        <td>3401</td>
                                        <td>2</td>
                                        <td>-7.8266798</td>
                                        <td>110.1640846</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1533</td>
                                        <td>14</td>
                                        <td>Kabupaten Bantul</td>
                                        <td>3402</td>
                                        <td>2</td>
                                        <td>-7.8846111</td>
                                        <td>110.3341111</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1534</td>
                                        <td>14</td>
                                        <td>Kabupaten Gunung Kidul</td>
                                        <td>3403</td>
                                        <td>2</td>
                                        <td>-8.0305091</td>
                                        <td>110.6168921</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1536</td>
                                        <td>14</td>
                                        <td>Kota Yogyakarta</td>
                                        <td>3471</td>
                                        <td>2</td>
                                        <td>-7.797224</td>
                                        <td>110.368797</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1537</td>
                                        <td>16</td>
                                        <td>Kabupaten Pandeglang</td>
                                        <td>3601</td>
                                        <td>2</td>
                                        <td>-6.314835</td>
                                        <td>106.103897</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1538</td>
                                        <td>16</td>
                                        <td>Kabupaten Lebak</td>
                                        <td>3602</td>
                                        <td>2</td>
                                        <td>-6.5643956</td>
                                        <td>106.2522143</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1539</td>
                                        <td>16</td>
                                        <td>Kabupaten Tangerang</td>
                                        <td>3603</td>
                                        <td>2</td>
                                        <td>-6.1783056</td>
                                        <td>106.6318889</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1540</td>
                                        <td>16</td>
                                        <td>Kabupaten Serang</td>
                                        <td>3604</td>
                                        <td>2</td>
                                        <td>-6.12009</td>
                                        <td>106.150299</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1541</td>
                                        <td>16</td>
                                        <td>Kota Tangerang</td>
                                        <td>3671</td>
                                        <td>2</td>
                                        <td>-6.1783056</td>
                                        <td>106.6318889</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1542</td>
                                        <td>16</td>
                                        <td>Kota Cilegon</td>
                                        <td>3672</td>
                                        <td>2</td>
                                        <td>-6.0169825</td>
                                        <td>106.040506</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1543</td>
                                        <td>16</td>
                                        <td>Kota Serang</td>
                                        <td>3673</td>
                                        <td>2</td>
                                        <td>-6.12009</td>
                                        <td>106.150299</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1544</td>
                                        <td>17</td>
                                        <td>Kabupaten Jembrana</td>
                                        <td>5101</td>
                                        <td>2</td>
                                        <td>-8.361852</td>
                                        <td>114.6418</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1545</td>
                                        <td>17</td>
                                        <td>Kabupaten Tabanan</td>
                                        <td>5102</td>
                                        <td>2</td>
                                        <td>-8.544516</td>
                                        <td>115.119797</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1546</td>
                                        <td>17</td>
                                        <td>Kabupaten Badung</td>
                                        <td>5103</td>
                                        <td>2</td>
                                        <td>-8.5819296</td>
                                        <td>115.1770586</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1547</td>
                                        <td>17</td>
                                        <td>Kabupaten Gianyar</td>
                                        <td>5104</td>
                                        <td>2</td>
                                        <td>-8.544185</td>
                                        <td>115.3255</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1548</td>
                                        <td>17</td>
                                        <td>Kabupaten Klungkung</td>
                                        <td>5105</td>
                                        <td>2</td>
                                        <td>-8.5389222</td>
                                        <td>115.4045111</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1549</td>
                                        <td>17</td>
                                        <td>Kabupaten Bangli</td>
                                        <td>5106</td>
                                        <td>2</td>
                                        <td>-8.454303</td>
                                        <td>115.354897</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1550</td>
                                        <td>17</td>
                                        <td>Kabupaten Karang Asem</td>
                                        <td>5107</td>
                                        <td>2</td>
                                        <td>-6.3996057</td>
                                        <td>108.0503042</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1551</td>
                                        <td>17</td>
                                        <td>Kabupaten Buleleng</td>
                                        <td>5108</td>
                                        <td>2</td>
                                        <td>-8.113831</td>
                                        <td>115.126999</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1552</td>
                                        <td>17</td>
                                        <td>Kota Denpasar</td>
                                        <td>5171</td>
                                        <td>2</td>
                                        <td>-8.65629</td>
                                        <td>115.222099</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1553</td>
                                        <td>18</td>
                                        <td>Kabupaten Lombok Barat</td>
                                        <td>5201</td>
                                        <td>2</td>
                                        <td>-8.6464599</td>
                                        <td>116.1123078</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1554</td>
                                        <td>18</td>
                                        <td>Kabupaten Lombok Tengah</td>
                                        <td>5202</td>
                                        <td>2</td>
                                        <td>-8.694623</td>
                                        <td>116.2777073</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1555</td>
                                        <td>18</td>
                                        <td>Kabupaten Lombok Timur</td>
                                        <td>5203</td>
                                        <td>2</td>
                                        <td>-8.5134471</td>
                                        <td>116.5609857</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1556</td>
                                        <td>18</td>
                                        <td>Kabupaten Sumbawa</td>
                                        <td>5204</td>
                                        <td>2</td>
                                        <td>-8.6529334</td>
                                        <td>117.3616476</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1557</td>
                                        <td>18</td>
                                        <td>Kabupaten Dompu</td>
                                        <td>5205</td>
                                        <td>2</td>
                                        <td>-8.4966318</td>
                                        <td>118.4747173</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1558</td>
                                        <td>18</td>
                                        <td>Kabupaten Bima</td>
                                        <td>5206</td>
                                        <td>2</td>
                                        <td>-8.460566</td>
                                        <td>118.727402</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1559</td>
                                        <td>18</td>
                                        <td>Kabupaten Sumbawa Barat</td>
                                        <td>5207</td>
                                        <td>2</td>
                                        <td>-8.9292907</td>
                                        <td>116.8910342</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1560</td>
                                        <td>18</td>
                                        <td>Kota Mataram</td>
                                        <td>5271</td>
                                        <td>2</td>
                                        <td>-8.5833333</td>
                                        <td>116.1166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1561</td>
                                        <td>18</td>
                                        <td>Kota Bima</td>
                                        <td>5272</td>
                                        <td>2</td>
                                        <td>-8.460566</td>
                                        <td>118.727402</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1562</td>
                                        <td>19</td>
                                        <td>Kabupaten Sumba Barat</td>
                                        <td>5312</td>
                                        <td>2</td>
                                        <td>-9.6548326</td>
                                        <td>119.3947135</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1563</td>
                                        <td>19</td>
                                        <td>Kabupaten Sumba Timur</td>
                                        <td>5311</td>
                                        <td>2</td>
                                        <td>-9.9802103</td>
                                        <td>120.3435506</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1564</td>
                                        <td>19</td>
                                        <td>Kabupaten Kupang</td>
                                        <td>5301</td>
                                        <td>2</td>
                                        <td>-10.1833333</td>
                                        <td>123.5833333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1565</td>
                                        <td>19</td>
                                        <td>Kabupaten Timor Tengah Selatan</td>
                                        <td>5302</td>
                                        <td>2</td>
                                        <td>-9.7762816</td>
                                        <td>124.4198243</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1566</td>
                                        <td>19</td>
                                        <td>Kabupaten Timor Tengah Utara</td>
                                        <td>5303</td>
                                        <td>2</td>
                                        <td>-9.4522647</td>
                                        <td>124.597132</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1567</td>
                                        <td>19</td>
                                        <td>Kabupaten Belu</td>
                                        <td>5304</td>
                                        <td>2</td>
                                        <td>-9.4125796</td>
                                        <td>124.9506625</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1568</td>
                                        <td>19</td>
                                        <td>Kabupaten Alor</td>
                                        <td>5305</td>
                                        <td>2</td>
                                        <td>-8.2754027</td>
                                        <td>124.7298765</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1569</td>
                                        <td>19</td>
                                        <td>Kabupaten Lembata</td>
                                        <td>5313</td>
                                        <td>2</td>
                                        <td>-8.4719075</td>
                                        <td>123.4831906</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1570</td>
                                        <td>19</td>
                                        <td>Kabupaten Flores Timur</td>
                                        <td>5306</td>
                                        <td>2</td>
                                        <td>-8.3130942</td>
                                        <td>122.9663018</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1571</td>
                                        <td>19</td>
                                        <td>Kabupaten Sikka</td>
                                        <td>5307</td>
                                        <td>2</td>
                                        <td>-8.6766175</td>
                                        <td>122.1291843</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1572</td>
                                        <td>19</td>
                                        <td>Kabupaten Ende</td>
                                        <td>5308</td>
                                        <td>2</td>
                                        <td>-8.854053</td>
                                        <td>121.654198</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1573</td>
                                        <td>19</td>
                                        <td>Kabupaten Ngada</td>
                                        <td>5309</td>
                                        <td>2</td>
                                        <td>-8.7430424</td>
                                        <td>120.9876321</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1574</td>
                                        <td>19</td>
                                        <td>Kabupaten Manggarai</td>
                                        <td>5310</td>
                                        <td>2</td>
                                        <td>-8.6796987</td>
                                        <td>120.3896651</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1575</td>
                                        <td>19</td>
                                        <td>Kabupaten Rote Ndao</td>
                                        <td>5314</td>
                                        <td>2</td>
                                        <td>-10.7386421</td>
                                        <td>123.1239049</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1576</td>
                                        <td>19</td>
                                        <td>Kabupaten Manggarai Barat</td>
                                        <td>5315</td>
                                        <td>2</td>
                                        <td>-8.6688149</td>
                                        <td>120.0665236</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1577</td>
                                        <td>19</td>
                                        <td>Kabupaten Sumba Tengah</td>
                                        <td>5317</td>
                                        <td>2</td>
                                        <td>-9.4879226</td>
                                        <td>119.6962677</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1578</td>
                                        <td>19</td>
                                        <td>Kabupaten Sumba Barat Daya</td>
                                        <td>5318</td>
                                        <td>2</td>
                                        <td>-9.539139</td>
                                        <td>119.1390642</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1579</td>
                                        <td>19</td>
                                        <td>Kabupaten Nagekeo</td>
                                        <td>5316</td>
                                        <td>2</td>
                                        <td>-8.6753545</td>
                                        <td>121.3084088</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1580</td>
                                        <td>19</td>
                                        <td>Kabupaten Manggarai Timur</td>
                                        <td>5319</td>
                                        <td>2</td>
                                        <td>-8.6206712</td>
                                        <td>120.6199895</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1581</td>
                                        <td>19</td>
                                        <td>Kota Kupang</td>
                                        <td>5371</td>
                                        <td>2</td>
                                        <td>-10.1833333</td>
                                        <td>123.5833333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1582</td>
                                        <td>20</td>
                                        <td>Kabupaten Sambas</td>
                                        <td>6101</td>
                                        <td>2</td>
                                        <td>1.361328</td>
                                        <td>109.309998</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1583</td>
                                        <td>20</td>
                                        <td>Kabupaten Bengkayang</td>
                                        <td>6107</td>
                                        <td>2</td>
                                        <td>0.8209729</td>
                                        <td>109.477699</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1584</td>
                                        <td>20</td>
                                        <td>Kabupaten Landak</td>
                                        <td>6108</td>
                                        <td>2</td>
                                        <td>0.4237287</td>
                                        <td>109.7591675</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1585</td>
                                        <td>20</td>
                                        <td>Kabupaten Pontianak</td>
                                        <td>6102</td>
                                        <td>2</td>
                                        <td>-0.022523</td>
                                        <td>109.330307</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1586</td>
                                        <td>20</td>
                                        <td>Kabupaten Sanggau</td>
                                        <td>6103</td>
                                        <td>2</td>
                                        <td>0.119275</td>
                                        <td>110.597298</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1587</td>
                                        <td>20</td>
                                        <td>Kabupaten Ketapang</td>
                                        <td>6104</td>
                                        <td>2</td>
                                        <td>-1.859098</td>
                                        <td>109.971901</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1588</td>
                                        <td>20</td>
                                        <td>Kabupaten Sintang</td>
                                        <td>6105</td>
                                        <td>2</td>
                                        <td>0.080238</td>
                                        <td>111.495499</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1589</td>
                                        <td>20</td>
                                        <td>Kabupaten Kapuas Hulu</td>
                                        <td>6106</td>
                                        <td>2</td>
                                        <td>-0.7931004</td>
                                        <td>113.9060624</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1590</td>
                                        <td>20</td>
                                        <td>Kabupaten Sekadau</td>
                                        <td>6109</td>
                                        <td>2</td>
                                        <td>0.015637</td>
                                        <td>110.888603</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1591</td>
                                        <td>20</td>
                                        <td>Kabupaten Melawi</td>
                                        <td>6110</td>
                                        <td>2</td>
                                        <td>-0.7000681</td>
                                        <td>111.6660725</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1592</td>
                                        <td>20</td>
                                        <td>Kabupaten Kayong Utara</td>
                                        <td>6111</td>
                                        <td>2</td>
                                        <td>-0.9225877</td>
                                        <td>110.0449662</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1593</td>
                                        <td>20</td>
                                        <td>Kabupaten Kubu Raya</td>
                                        <td>6112</td>
                                        <td>2</td>
                                        <td>-0.3533938</td>
                                        <td>109.4735066</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1594</td>
                                        <td>20</td>
                                        <td>Kota Pontianak</td>
                                        <td>6171</td>
                                        <td>2</td>
                                        <td>-0.022523</td>
                                        <td>109.330307</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1595</td>
                                        <td>20</td>
                                        <td>Kota Singkawang</td>
                                        <td>6172</td>
                                        <td>2</td>
                                        <td>0.908795</td>
                                        <td>108.984596</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1596</td>
                                        <td>21</td>
                                        <td>Kabupaten Kotawaringin Barat</td>
                                        <td>6201</td>
                                        <td>2</td>
                                        <td>-6.1961131</td>
                                        <td>106.8630174</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1597</td>
                                        <td>21</td>
                                        <td>Kabupaten Kotawaringin Timur</td>
                                        <td>6202</td>
                                        <td>2</td>
                                        <td>-6.1952992</td>
                                        <td>106.8630737</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1598</td>
                                        <td>21</td>
                                        <td>Kabupaten Kapuas</td>
                                        <td>6203</td>
                                        <td>2</td>
                                        <td>-0.0459972</td>
                                        <td>110.1313251</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1599</td>
                                        <td>21</td>
                                        <td>Kabupaten Barito Selatan</td>
                                        <td>6204</td>
                                        <td>2</td>
                                        <td>-1.875943</td>
                                        <td>114.8092691</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1600</td>
                                        <td>21</td>
                                        <td>Kabupaten Barito Utara</td>
                                        <td>6205</td>
                                        <td>2</td>
                                        <td>-0.9587136</td>
                                        <td>115.094045</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1601</td>
                                        <td>21</td>
                                        <td>Kabupaten Sukamara</td>
                                        <td>6208</td>
                                        <td>2</td>
                                        <td>-2.6267517</td>
                                        <td>111.2368084</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1602</td>
                                        <td>21</td>
                                        <td>Kabupaten Lamandau</td>
                                        <td>6209</td>
                                        <td>2</td>
                                        <td>-1.9269166</td>
                                        <td>111.1891151</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1603</td>
                                        <td>21</td>
                                        <td>Kabupaten Seruyan</td>
                                        <td>6207</td>
                                        <td>2</td>
                                        <td>-3.0123467</td>
                                        <td>112.4291464</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1604</td>
                                        <td>21</td>
                                        <td>Kabupaten Katingan</td>
                                        <td>6206</td>
                                        <td>2</td>
                                        <td>-0.9758379</td>
                                        <td>112.8105512</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1605</td>
                                        <td>21</td>
                                        <td>Kabupaten Pulang Pisau</td>
                                        <td>6211</td>
                                        <td>2</td>
                                        <td>-2.6849607</td>
                                        <td>113.9536466</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1606</td>
                                        <td>21</td>
                                        <td>Kabupaten Gunung Mas</td>
                                        <td>6210</td>
                                        <td>2</td>
                                        <td>-6.7052778</td>
                                        <td>106.9913889</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1607</td>
                                        <td>21</td>
                                        <td>Kabupaten Barito Timur</td>
                                        <td>6213</td>
                                        <td>2</td>
                                        <td>-2.0123999</td>
                                        <td>115.188916</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1608</td>
                                        <td>21</td>
                                        <td>Kabupaten Murung Raya</td>
                                        <td>6212</td>
                                        <td>2</td>
                                        <td>-0.1362171</td>
                                        <td>114.3341432</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1609</td>
                                        <td>21</td>
                                        <td>Kota Palangka Raya</td>
                                        <td>6271</td>
                                        <td>2</td>
                                        <td>-2.21</td>
                                        <td>113.92</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1610</td>
                                        <td>22</td>
                                        <td>Kabupaten Tanah Laut</td>
                                        <td>6301</td>
                                        <td>2</td>
                                        <td>-3.7694047</td>
                                        <td>114.8092691</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1611</td>
                                        <td>22</td>
                                        <td>Kabupaten Kota Baru</td>
                                        <td>6302</td>
                                        <td>2</td>
                                        <td>-6.332973</td>
                                        <td>106.807915</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1612</td>
                                        <td>22</td>
                                        <td>Kabupaten Banjar</td>
                                        <td>6303</td>
                                        <td>2</td>
                                        <td>-7.3666667</td>
                                        <td>108.5333333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1613</td>
                                        <td>22</td>
                                        <td>Kabupaten Barito Kuala</td>
                                        <td>6304</td>
                                        <td>2</td>
                                        <td>-3.0714738</td>
                                        <td>114.6667939</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1614</td>
                                        <td>22</td>
                                        <td>Kabupaten Tapin</td>
                                        <td>6305</td>
                                        <td>2</td>
                                        <td>-2.9160746</td>
                                        <td>115.0465991</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1615</td>
                                        <td>22</td>
                                        <td>Kabupaten Hulu Sungai Selatan</td>
                                        <td>6306</td>
                                        <td>2</td>
                                        <td>-2.7662681</td>
                                        <td>115.2363408</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1616</td>
                                        <td>22</td>
                                        <td>Kabupaten Hulu Sungai Tengah</td>
                                        <td>6307</td>
                                        <td>2</td>
                                        <td>-2.6153162</td>
                                        <td>115.5207358</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1617</td>
                                        <td>22</td>
                                        <td>Kabupaten Hulu Sungai Utara</td>
                                        <td>6308</td>
                                        <td>2</td>
                                        <td>-2.4421225</td>
                                        <td>115.188916</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1618</td>
                                        <td>22</td>
                                        <td>Kabupaten Tabalong</td>
                                        <td>6309</td>
                                        <td>2</td>
                                        <td>-1.864302</td>
                                        <td>115.5681084</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1619</td>
                                        <td>22</td>
                                        <td>Kabupaten Tanah Bumbu</td>
                                        <td>6310</td>
                                        <td>2</td>
                                        <td>-3.4512244</td>
                                        <td>115.5681084</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1620</td>
                                        <td>22</td>
                                        <td>Kabupaten Balangan</td>
                                        <td>6311</td>
                                        <td>2</td>
                                        <td>-2.3260425</td>
                                        <td>115.6154732</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1621</td>
                                        <td>22</td>
                                        <td>Kota Banjarmasin</td>
                                        <td>6371</td>
                                        <td>2</td>
                                        <td>-3.328499</td>
                                        <td>114.589203</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1622</td>
                                        <td>22</td>
                                        <td>Kota Banjar Baru</td>
                                        <td>6372</td>
                                        <td>2</td>
                                        <td>-3.4666667</td>
                                        <td>114.75</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1623</td>
                                        <td>23</td>
                                        <td>Kabupaten Paser</td>
                                        <td>6401</td>
                                        <td>2</td>
                                        <td>-1.7175266</td>
                                        <td>115.9467997</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1624</td>
                                        <td>23</td>
                                        <td>Kabupaten Kutai Barat</td>
                                        <td>6407</td>
                                        <td>2</td>
                                        <td>0.1353881</td>
                                        <td>115.094045</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1625</td>
                                        <td>23</td>
                                        <td>Kabupaten Kutai Kartanegara</td>
                                        <td>6402</td>
                                        <td>2</td>
                                        <td>-0.1336655</td>
                                        <td>116.6081653</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1626</td>
                                        <td>23</td>
                                        <td>Kabupaten Kutai Timur</td>
                                        <td>6408</td>
                                        <td>2</td>
                                        <td>0.9433774</td>
                                        <td>116.9852422</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1627</td>
                                        <td>23</td>
                                        <td>Kabupaten Berau</td>
                                        <td>6403</td>
                                        <td>2</td>
                                        <td>2.0450883</td>
                                        <td>117.3616476</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1628</td>
                                        <td>23</td>
                                        <td>Kabupaten Malinau</td>
                                        <td>6406</td>
                                        <td>2</td>
                                        <td>3.584221</td>
                                        <td>116.647797</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1629</td>
                                        <td>23</td>
                                        <td>Kabupaten Bulungan</td>
                                        <td>6404</td>
                                        <td>2</td>
                                        <td>2.9042476</td>
                                        <td>116.9852422</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1630</td>
                                        <td>23</td>
                                        <td>Kabupaten Nunukan</td>
                                        <td>6405</td>
                                        <td>2</td>
                                        <td>4.0609227</td>
                                        <td>117.666952</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1631</td>
                                        <td>23</td>
                                        <td>Kabupaten Penajam Paser Utara</td>
                                        <td>6409</td>
                                        <td>2</td>
                                        <td>-1.2917094</td>
                                        <td>116.5137964</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1632</td>
                                        <td>23</td>
                                        <td>Kabupaten Tana Tidung</td>
                                        <td>6410</td>
                                        <td>2</td>
                                        <td>3.551869</td>
                                        <td>117.0794082</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1633</td>
                                        <td>23</td>
                                        <td>Kota Balikpapan</td>
                                        <td>6471</td>
                                        <td>2</td>
                                        <td>-1.2635389</td>
                                        <td>116.8278833</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1634</td>
                                        <td>23</td>
                                        <td>Kota Samarinda</td>
                                        <td>6472</td>
                                        <td>2</td>
                                        <td>-0.502183</td>
                                        <td>117.153801</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1635</td>
                                        <td>23</td>
                                        <td>Kota Tarakan</td>
                                        <td>6473</td>
                                        <td>2</td>
                                        <td>3.3</td>
                                        <td>117.6333333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1636</td>
                                        <td>23</td>
                                        <td>Kota Bontang</td>
                                        <td>6474</td>
                                        <td>2</td>
                                        <td>0.1333333</td>
                                        <td>117.5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1637</td>
                                        <td>24</td>
                                        <td>Kabupaten Bolaang Mongondow</td>
                                        <td>7101</td>
                                        <td>2</td>
                                        <td>0.6870994</td>
                                        <td>124.0641419</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1638</td>
                                        <td>24</td>
                                        <td>Kabupaten Minahasa</td>
                                        <td>7102</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>124.5833333</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1639</td>
                                        <td>24</td>
                                        <td>Kabupaten Kepulauan Sangihe</td>
                                        <td>7103</td>
                                        <td>2</td>
                                        <td>3.5303212</td>
                                        <td>125.5438967</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1640</td>
                                        <td>24</td>
                                        <td>Kabupaten Kepulauan Talaud</td>
                                        <td>7104</td>
                                        <td>2</td>
                                        <td>4.092</td>
                                        <td>126.768</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1641</td>
                                        <td>24</td>
                                        <td>Kabupaten Minahasa Selatan</td>
                                        <td>7105</td>
                                        <td>2</td>
                                        <td>1.0946773</td>
                                        <td>124.4641848</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1642</td>
                                        <td>24</td>
                                        <td>Kabupaten Minahasa Utara</td>
                                        <td>7106</td>
                                        <td>2</td>
                                        <td>1.5327973</td>
                                        <td>124.994751</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1643</td>
                                        <td>24</td>
                                        <td>Kabupaten Bolaang Mongondow Utara</td>
                                        <td>7108</td>
                                        <td>2</td>
                                        <td>0.818691</td>
                                        <td>123.5280072</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1644</td>
                                        <td>24</td>
                                        <td>Kabupaten Siau Tagulandang Biaro</td>
                                        <td>7109</td>
                                        <td>2</td>
                                        <td>2.345964</td>
                                        <td>125.4124355</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1645</td>
                                        <td>24</td>
                                        <td>Kabupaten Minahasa Tenggara</td>
                                        <td>7107</td>
                                        <td>2</td>
                                        <td>1.0278551</td>
                                        <td>124.7298765</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1646</td>
                                        <td>24</td>
                                        <td>Kota Manado</td>
                                        <td>7171</td>
                                        <td>2</td>
                                        <td>1.4917014</td>
                                        <td>124.842843</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1647</td>
                                        <td>24</td>
                                        <td>Kota Bitung</td>
                                        <td>7172</td>
                                        <td>2</td>
                                        <td>1.4553529</td>
                                        <td>125.204697</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1648</td>
                                        <td>24</td>
                                        <td>Kota Tomohon</td>
                                        <td>7173</td>
                                        <td>2</td>
                                        <td>1.3234131</td>
                                        <td>124.8384504</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1649</td>
                                        <td>24</td>
                                        <td>Kota Kotamobagu</td>
                                        <td>7174</td>
                                        <td>2</td>
                                        <td>0.7333333</td>
                                        <td>124.3166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1650</td>
                                        <td>25</td>
                                        <td>Kabupaten Banggai Kepulauan</td>
                                        <td>7207</td>
                                        <td>2</td>
                                        <td>-1.6408137</td>
                                        <td>123.5504076</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1651</td>
                                        <td>25</td>
                                        <td>Kabupaten Banggai</td>
                                        <td>7201</td>
                                        <td>2</td>
                                        <td>-1.6408137</td>
                                        <td>123.5504076</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1652</td>
                                        <td>25</td>
                                        <td>Kabupaten Morowali</td>
                                        <td>7206</td>
                                        <td>2</td>
                                        <td>-2.3003072</td>
                                        <td>121.5370003</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1653</td>
                                        <td>25</td>
                                        <td>Kabupaten Poso</td>
                                        <td>7202</td>
                                        <td>2</td>
                                        <td>-1.391922</td>
                                        <td>120.766998</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1654</td>
                                        <td>25</td>
                                        <td>Kabupaten Donggala</td>
                                        <td>7203</td>
                                        <td>2</td>
                                        <td>-0.4233155</td>
                                        <td>119.8352303</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1655</td>
                                        <td>25</td>
                                        <td>Kabupaten Toli-Toli</td>
                                        <td>7204</td>
                                        <td>2</td>
                                        <td>0.8768231</td>
                                        <td>120.7579834</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1656</td>
                                        <td>25</td>
                                        <td>Kabupaten Buol</td>
                                        <td>7205</td>
                                        <td>2</td>
                                        <td>0.9695452</td>
                                        <td>121.3541631</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1657</td>
                                        <td>25</td>
                                        <td>Kabupaten Parigi Moutong</td>
                                        <td>7208</td>
                                        <td>2</td>
                                        <td>0.5817607</td>
                                        <td>120.8039474</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1658</td>
                                        <td>25</td>
                                        <td>Kabupaten Tojo Una-Una</td>
                                        <td>7209</td>
                                        <td>2</td>
                                        <td>-1.098757</td>
                                        <td>121.5370003</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1659</td>
                                        <td>25</td>
                                        <td>Kota Palu</td>
                                        <td>7271</td>
                                        <td>2</td>
                                        <td>-0.898583</td>
                                        <td>119.850601</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1660</td>
                                        <td>26</td>
                                        <td>Kabupaten Selayar</td>
                                        <td>7301</td>
                                        <td>2</td>
                                        <td>-6</td>
                                        <td>120.5</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1661</td>
                                        <td>26</td>
                                        <td>Kabupaten Bulukumba</td>
                                        <td>7302</td>
                                        <td>2</td>
                                        <td>-5.4329368</td>
                                        <td>120.2051096</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1662</td>
                                        <td>26</td>
                                        <td>Kabupaten Bantaeng</td>
                                        <td>7303</td>
                                        <td>2</td>
                                        <td>-5.5169316</td>
                                        <td>120.0202964</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1663</td>
                                        <td>26</td>
                                        <td>Kabupaten Jeneponto</td>
                                        <td>7304</td>
                                        <td>2</td>
                                        <td>-5.554579</td>
                                        <td>119.6730939</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1664</td>
                                        <td>26</td>
                                        <td>Kabupaten Takalar</td>
                                        <td>7305</td>
                                        <td>2</td>
                                        <td>-5.4162493</td>
                                        <td>119.4875668</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1665</td>
                                        <td>26</td>
                                        <td>Kabupaten Gowa</td>
                                        <td>7306</td>
                                        <td>2</td>
                                        <td>-5.3102888</td>
                                        <td>119.742604</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1666</td>
                                        <td>26</td>
                                        <td>Kabupaten Sinjai</td>
                                        <td>7307</td>
                                        <td>2</td>
                                        <td>-5.2171961</td>
                                        <td>120.112735</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1667</td>
                                        <td>26</td>
                                        <td>Kabupaten Maros</td>
                                        <td>7309</td>
                                        <td>2</td>
                                        <td>-4.94695</td>
                                        <td>119.578903</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1668</td>
                                        <td>26</td>
                                        <td>Kabupaten Pangkajene Dan Kepulauan</td>
                                        <td>7310</td>
                                        <td>2</td>
                                        <td>-4.805035</td>
                                        <td>119.5571677</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1669</td>
                                        <td>26</td>
                                        <td>Kabupaten Barru</td>
                                        <td>7311</td>
                                        <td>2</td>
                                        <td>-4.4172651</td>
                                        <td>119.6730939</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1670</td>
                                        <td>26</td>
                                        <td>Kabupaten Bone</td>
                                        <td>7308</td>
                                        <td>2</td>
                                        <td>-2.083333</td>
                                        <td>120.216667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1671</td>
                                        <td>26</td>
                                        <td>Kabupaten Soppeng</td>
                                        <td>7312</td>
                                        <td>2</td>
                                        <td>-4.3518541</td>
                                        <td>119.9277947</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1672</td>
                                        <td>26</td>
                                        <td>Kabupaten Wajo</td>
                                        <td>7313</td>
                                        <td>2</td>
                                        <td>-4.022229</td>
                                        <td>120.0665236</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1673</td>
                                        <td>26</td>
                                        <td>Kabupaten Sidenreng Rappang</td>
                                        <td>7314</td>
                                        <td>2</td>
                                        <td>-3.7738981</td>
                                        <td>120.0202964</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1674</td>
                                        <td>26</td>
                                        <td>Kabupaten Pinrang</td>
                                        <td>7315</td>
                                        <td>2</td>
                                        <td>-3.793071</td>
                                        <td>119.6408</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1675</td>
                                        <td>26</td>
                                        <td>Kabupaten Enrekang</td>
                                        <td>7316</td>
                                        <td>2</td>
                                        <td>-3.563128</td>
                                        <td>119.7612</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1676</td>
                                        <td>26</td>
                                        <td>Kabupaten Luwu</td>
                                        <td>7317</td>
                                        <td>2</td>
                                        <td>-3.3052214</td>
                                        <td>120.2512728</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1677</td>
                                        <td>26</td>
                                        <td>Kabupaten Tana Toraja</td>
                                        <td>7318</td>
                                        <td>2</td>
                                        <td>-3.0753003</td>
                                        <td>119.742604</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1678</td>
                                        <td>26</td>
                                        <td>Kabupaten Luwu Utara</td>
                                        <td>7322</td>
                                        <td>2</td>
                                        <td>-2.2690446</td>
                                        <td>119.9740534</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1679</td>
                                        <td>26</td>
                                        <td>Kabupaten Luwu Timur</td>
                                        <td>7324</td>
                                        <td>2</td>
                                        <td>-2.5825518</td>
                                        <td>121.1710389</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1680</td>
                                        <td>26</td>
                                        <td>Kota Makassar</td>
                                        <td>7371</td>
                                        <td>2</td>
                                        <td>-5.1333333</td>
                                        <td>119.4166667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1681</td>
                                        <td>26</td>
                                        <td>Kota Pare-Pare</td>
                                        <td>7372</td>
                                        <td>2</td>
                                        <td>-4.0166667</td>
                                        <td>119.6236111</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1682</td>
                                        <td>26</td>
                                        <td>Kota Palopo</td>
                                        <td>7373</td>
                                        <td>2</td>
                                        <td>-3</td>
                                        <td>120.2</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1683</td>
                                        <td>27</td>
                                        <td>Kabupaten Buton</td>
                                        <td>7404</td>
                                        <td>2</td>
                                        <td>-5.3096355</td>
                                        <td>122.9888319</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1684</td>
                                        <td>27</td>
                                        <td>Kabupaten Muna</td>
                                        <td>7403</td>
                                        <td>2</td>
                                        <td>-4.901629</td>
                                        <td>122.6277455</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1685</td>
                                        <td>27</td>
                                        <td>Kabupaten Konawe</td>
                                        <td>7402</td>
                                        <td>2</td>
                                        <td>-3.9380432</td>
                                        <td>122.0837445</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1686</td>
                                        <td>27</td>
                                        <td>Kabupaten Kolaka</td>
                                        <td>7401</td>
                                        <td>2</td>
                                        <td>-4.049665</td>
                                        <td>121.593803</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1687</td>
                                        <td>27</td>
                                        <td>Kabupaten Konawe Selatan</td>
                                        <td>7405</td>
                                        <td>2</td>
                                        <td>-4.2027915</td>
                                        <td>122.4467238</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1688</td>
                                        <td>27</td>
                                        <td>Kabupaten Bombana</td>
                                        <td>7406</td>
                                        <td>2</td>
                                        <td>-4.6543462</td>
                                        <td>121.9017954</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1689</td>
                                        <td>27</td>
                                        <td>Kabupaten Wakatobi</td>
                                        <td>7407</td>
                                        <td>2</td>
                                        <td>-5.3264442</td>
                                        <td>123.5951925</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1690</td>
                                        <td>27</td>
                                        <td>Kabupaten Kolaka Utara</td>
                                        <td>7408</td>
                                        <td>2</td>
                                        <td>-3.1347227</td>
                                        <td>121.1710389</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1691</td>
                                        <td>27</td>
                                        <td>Kabupaten Buton Utara</td>
                                        <td>7410</td>
                                        <td>2</td>
                                        <td>-4.7023424</td>
                                        <td>123.0338767</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1692</td>
                                        <td>27</td>
                                        <td>Kabupaten Konawe Utara</td>
                                        <td>7409</td>
                                        <td>2</td>
                                        <td>-3.3803291</td>
                                        <td>122.0837445</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1693</td>
                                        <td>27</td>
                                        <td>Kota Kendari</td>
                                        <td>7471</td>
                                        <td>2</td>
                                        <td>-3.972201</td>
                                        <td>122.5149028</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1694</td>
                                        <td>27</td>
                                        <td>Kota Bau-Bau</td>
                                        <td>7472</td>
                                        <td>2</td>
                                        <td>-5.46667</td>
                                        <td>122.633</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1695</td>
                                        <td>28</td>
                                        <td>Kabupaten Boalemo</td>
                                        <td>7502</td>
                                        <td>2</td>
                                        <td>0.7013419</td>
                                        <td>122.2653887</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1696</td>
                                        <td>28</td>
                                        <td>Kabupaten Gorontalo</td>
                                        <td>7501</td>
                                        <td>2</td>
                                        <td>0.5333333</td>
                                        <td>123.0666667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1697</td>
                                        <td>28</td>
                                        <td>Kabupaten Pohuwato</td>
                                        <td>7504</td>
                                        <td>2</td>
                                        <td>0.7055278</td>
                                        <td>121.7195459</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1698</td>
                                        <td>28</td>
                                        <td>Kabupaten Bone Bolango</td>
                                        <td>7503</td>
                                        <td>2</td>
                                        <td>0.5657885</td>
                                        <td>123.3486147</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1699</td>
                                        <td>28</td>
                                        <td>Kabupaten Gorontalo Utara</td>
                                        <td>7505</td>
                                        <td>2</td>
                                        <td>0.9252647</td>
                                        <td>122.4920088</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1700</td>
                                        <td>28</td>
                                        <td>Kota Gorontalo</td>
                                        <td>7571</td>
                                        <td>2</td>
                                        <td>0.5333333</td>
                                        <td>123.0666667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1701</td>
                                        <td>29</td>
                                        <td>Kabupaten Majene</td>
                                        <td>7605</td>
                                        <td>2</td>
                                        <td>-3.0297251</td>
                                        <td>118.9062794</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1702</td>
                                        <td>29</td>
                                        <td>Kabupaten Polewali Mandar</td>
                                        <td>7604</td>
                                        <td>2</td>
                                        <td>-3.3419323</td>
                                        <td>119.1390642</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1703</td>
                                        <td>29</td>
                                        <td>Kabupaten Mamasa</td>
                                        <td>7603</td>
                                        <td>2</td>
                                        <td>-2.960135</td>
                                        <td>119.368202</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1704</td>
                                        <td>29</td>
                                        <td>Kabupaten Mamuju</td>
                                        <td>7602</td>
                                        <td>2</td>
                                        <td>-2.7293364</td>
                                        <td>118.9295737</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1705</td>
                                        <td>29</td>
                                        <td>Kabupaten Mamuju Utara</td>
                                        <td>7601</td>
                                        <td>2</td>
                                        <td>-1.5264542</td>
                                        <td>119.5107708</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1706</td>
                                        <td>30</td>
                                        <td>Kabupaten Maluku Tenggara Barat</td>
                                        <td>8103</td>
                                        <td>2</td>
                                        <td>-7.5322642</td>
                                        <td>131.3611121</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1707</td>
                                        <td>30</td>
                                        <td>Kabupaten Maluku Tenggara</td>
                                        <td>8102</td>
                                        <td>2</td>
                                        <td>-5.7512455</td>
                                        <td>132.7271587</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1708</td>
                                        <td>30</td>
                                        <td>Kabupaten Maluku Tengah</td>
                                        <td>8101</td>
                                        <td>2</td>
                                        <td>-3.0166501</td>
                                        <td>129.4864411</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1709</td>
                                        <td>30</td>
                                        <td>Kabupaten Buru Selatan</td>
                                        <td>8109</td>
                                        <td>2</td>
                                        <td>-3.3927754</td>
                                        <td>126.7819505</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1710</td>
                                        <td>30</td>
                                        <td>Kabupaten Kepulauan Aru</td>
                                        <td>8107</td>
                                        <td>2</td>
                                        <td>-6.1946502</td>
                                        <td>134.5501935</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1711</td>
                                        <td>30</td>
                                        <td>Kabupaten Seram Bagian Barat</td>
                                        <td>8106</td>
                                        <td>2</td>
                                        <td>-3.1271575</td>
                                        <td>128.4008357</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1712</td>
                                        <td>30</td>
                                        <td>Kabupaten Seram Bagian Timur</td>
                                        <td>8105</td>
                                        <td>2</td>
                                        <td>-3.4150761</td>
                                        <td>130.390488</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1713</td>
                                        <td>30</td>
                                        <td>Kota Ambon</td>
                                        <td>8171</td>
                                        <td>2</td>
                                        <td>-3.65607</td>
                                        <td>128.166419</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1714</td>
                                        <td>30</td>
                                        <td>KotaTual</td>
                                        <td>8172</td>
                                        <td>2</td>
                                        <td>-5.640851</td>
                                        <td>132.7475093</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1715</td>
                                        <td>31</td>
                                        <td>Kabupaten Halmahera Barat</td>
                                        <td>8201</td>
                                        <td>2</td>
                                        <td>1.3121235</td>
                                        <td>128.4849923</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1716</td>
                                        <td>31</td>
                                        <td>Kabupaten Halmahera Tengah</td>
                                        <td>8202</td>
                                        <td>2</td>
                                        <td>1.3121235</td>
                                        <td>128.4849923</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1717</td>
                                        <td>31</td>
                                        <td>Kabupaten Kepulauan Sula</td>
                                        <td>8205</td>
                                        <td>2</td>
                                        <td>-1.8666667</td>
                                        <td>125.3666667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1718</td>
                                        <td>31</td>
                                        <td>Kabupaten Halmahera Selatan</td>
                                        <td>8204</td>
                                        <td>2</td>
                                        <td>1.3121235</td>
                                        <td>128.4849923</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1719</td>
                                        <td>31</td>
                                        <td>Kabupaten Halmahera Utara</td>
                                        <td>8203</td>
                                        <td>2</td>
                                        <td>1.3121235</td>
                                        <td>128.4849923</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1720</td>
                                        <td>31</td>
                                        <td>Kabupaten Halmahera Timur</td>
                                        <td>8206</td>
                                        <td>2</td>
                                        <td>1.3121235</td>
                                        <td>128.4849923</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1721</td>
                                        <td>31</td>
                                        <td>Kota Ternate</td>
                                        <td>8271</td>
                                        <td>2</td>
                                        <td>0.7833333</td>
                                        <td>127.3666667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1722</td>
                                        <td>31</td>
                                        <td>Kota Tidore Kepulauan</td>
                                        <td>8272</td>
                                        <td>2</td>
                                        <td>0.6833333</td>
                                        <td>127.4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1723</td>
                                        <td>32</td>
                                        <td>Kabupaten Fakfak</td>
                                        <td>9203</td>
                                        <td>2</td>
                                        <td>-2.885237</td>
                                        <td>132.2658282</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1724</td>
                                        <td>32</td>
                                        <td>Kabupaten Kaimana</td>
                                        <td>9208</td>
                                        <td>2</td>
                                        <td>-3.660925</td>
                                        <td>133.774506</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1725</td>
                                        <td>32</td>
                                        <td>Kabupaten Teluk Wondama</td>
                                        <td>9207</td>
                                        <td>2</td>
                                        <td>-2.8551699</td>
                                        <td>134.3236557</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1726</td>
                                        <td>32</td>
                                        <td>Kabupaten Teluk Bintuni</td>
                                        <td>9206</td>
                                        <td>2</td>
                                        <td>-1.9056848</td>
                                        <td>133.329466</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1727</td>
                                        <td>32</td>
                                        <td>Kabupaten Manokwari</td>
                                        <td>9202</td>
                                        <td>2</td>
                                        <td>-0.8614531</td>
                                        <td>134.0620421</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1728</td>
                                        <td>32</td>
                                        <td>Kabupaten Sorong Selatan</td>
                                        <td>9204</td>
                                        <td>2</td>
                                        <td>-0.8666667</td>
                                        <td>131.25</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1729</td>
                                        <td>32</td>
                                        <td>Kota Sorong</td>
                                        <td>9271</td>
                                        <td>2</td>
                                        <td>-0.8666667</td>
                                        <td>131.25</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1730</td>
                                        <td>32</td>
                                        <td>Kabupaten Raja Ampat</td>
                                        <td>9205</td>
                                        <td>2</td>
                                        <td>-1.0915151</td>
                                        <td>130.8778586</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1731</td>
                                        <td>32</td>
                                        <td>Kabupaten Sorong</td>
                                        <td>9201</td>
                                        <td>2</td>
                                        <td>-0.8666667</td>
                                        <td>131.25</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1732</td>
                                        <td>33</td>
                                        <td>Kabupaten Merauke</td>
                                        <td>9101</td>
                                        <td>2</td>
                                        <td>-8.4960406</td>
                                        <td>140.3945527</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1733</td>
                                        <td>33</td>
                                        <td>Kabupaten Jayawijaya</td>
                                        <td>9102</td>
                                        <td>2</td>
                                        <td>-4.0004481</td>
                                        <td>138.7995122</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1734</td>
                                        <td>33</td>
                                        <td>Kabupaten Jayapura</td>
                                        <td>9103</td>
                                        <td>2</td>
                                        <td>-2.533</td>
                                        <td>140.717</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1735</td>
                                        <td>33</td>
                                        <td>Kabupaten Nabire</td>
                                        <td>9104</td>
                                        <td>2</td>
                                        <td>-3.5095462</td>
                                        <td>135.7520985</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1736</td>
                                        <td>33</td>
                                        <td>Kabupaten Kepulauan Yapen</td>
                                        <td>9105</td>
                                        <td>2</td>
                                        <td>-1.7469359</td>
                                        <td>136.1709012</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1737</td>
                                        <td>33</td>
                                        <td>Kabupaten Biak Numfor</td>
                                        <td>9106</td>
                                        <td>2</td>
                                        <td>-1.0381022</td>
                                        <td>135.9800848</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1738</td>
                                        <td>33</td>
                                        <td>Kabupaten Paniai</td>
                                        <td>9108</td>
                                        <td>2</td>
                                        <td>-3.7876441</td>
                                        <td>136.3624686</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1739</td>
                                        <td>33</td>
                                        <td>Kabupaten Puncak Jaya</td>
                                        <td>9107</td>
                                        <td>2</td>
                                        <td>-4.0836111</td>
                                        <td>137.1847222</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1740</td>
                                        <td>33</td>
                                        <td>Kabupaten Mimika</td>
                                        <td>9109</td>
                                        <td>2</td>
                                        <td>-4.4553223</td>
                                        <td>137.1362125</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1741</td>
                                        <td>33</td>
                                        <td>Kabupaten Boven Digoel</td>
                                        <td>9116</td>
                                        <td>2</td>
                                        <td>-5.7400018</td>
                                        <td>140.3481835</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1742</td>
                                        <td>33</td>
                                        <td>Kabupaten Mappi</td>
                                        <td>9117</td>
                                        <td>2</td>
                                        <td>-7.102232</td>
                                        <td>139.396393</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1743</td>
                                        <td>33</td>
                                        <td>Kabupaten Asmat</td>
                                        <td>9118</td>
                                        <td>2</td>
                                        <td>-5.0573958</td>
                                        <td>138.3988186</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1744</td>
                                        <td>33</td>
                                        <td>Kabupaten Yahukimo</td>
                                        <td>9113</td>
                                        <td>2</td>
                                        <td>-4.4939717</td>
                                        <td>139.5279996</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1745</td>
                                        <td>33</td>
                                        <td>Kabupaten Pegunungan Bintang</td>
                                        <td>9112</td>
                                        <td>2</td>
                                        <td>-4.5589872</td>
                                        <td>140.5135589</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1746</td>
                                        <td>33</td>
                                        <td>Kabupaten Tolikara</td>
                                        <td>9114</td>
                                        <td>2</td>
                                        <td>-3.481132</td>
                                        <td>138.4787258</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1747</td>
                                        <td>33</td>
                                        <td>Kabupaten Sarmi</td>
                                        <td>9110</td>
                                        <td>2</td>
                                        <td>-1.868727</td>
                                        <td>138.743607</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1748</td>
                                        <td>33</td>
                                        <td>Kabupaten Keerom</td>
                                        <td>9111</td>
                                        <td>2</td>
                                        <td>-3.3449536</td>
                                        <td>140.7624493</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1749</td>
                                        <td>33</td>
                                        <td>Kabupaten Waropen</td>
                                        <td>9115</td>
                                        <td>2</td>
                                        <td>-2.8435717</td>
                                        <td>136.670534</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1750</td>
                                        <td>33</td>
                                        <td>Kabupaten Supiori</td>
                                        <td>9119</td>
                                        <td>2</td>
                                        <td>-0.7295099</td>
                                        <td>135.6385125</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1751</td>
                                        <td>33</td>
                                        <td>Kabupaten Mamberamo Raya</td>
                                        <td>9120</td>
                                        <td>2</td>
                                        <td>-2.5331255</td>
                                        <td>137.7637565</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1752</td>
                                        <td>33</td>
                                        <td>Kota Jayapura</td>
                                        <td>9171</td>
                                        <td>2</td>
                                        <td>-2.533</td>
                                        <td>140.717</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1753</td>
                                        <td>2</td>
                                        <td>Kabupaten Labuhanbatu Utara</td>
                                        <td>1223</td>
                                        <td>2</td>
                                        <td>2.3465638</td>
                                        <td>99.8124935</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1754</td>
                                        <td>2</td>
                                        <td>Kabupaten Labuhanbatu Selatan</td>
                                        <td>1222</td>
                                        <td>2</td>
                                        <td>1.8799353</td>
                                        <td>100.1703257</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1756</td>
                                        <td>2</td>
                                        <td>Kabupaten Nias Utara</td>
                                        <td>1224</td>
                                        <td>2</td>
                                        <td>1.1255279</td>
                                        <td>97.5247243</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1757</td>
                                        <td>2</td>
                                        <td>Kabupaten Nias Barat</td>
                                        <td>1225</td>
                                        <td>2</td>
                                        <td>1.1255279</td>
                                        <td>97.5247243</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1758</td>
                                        <td>2</td>
                                        <td>Kota Gunungsitoli</td>
                                        <td>1278</td>
                                        <td>2</td>
                                        <td>1.281964</td>
                                        <td>97.61594</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1759</td>
                                        <td>4</td>
                                        <td>Kabupaten Kepulauan Meranti</td>
                                        <td>1410</td>
                                        <td>2</td>
                                        <td>0.9208765</td>
                                        <td>102.6675575</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1760</td>
                                        <td>5</td>
                                        <td>Kota Sungai Penuh</td>
                                        <td>1572</td>
                                        <td>2</td>
                                        <td>-2.06314</td>
                                        <td>101.387199</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1761</td>
                                        <td>7</td>
                                        <td>Kabupaten Bengkulu Tengah</td>
                                        <td>1709</td>
                                        <td>2</td>
                                        <td>-3.7955556</td>
                                        <td>102.2591667</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1762</td>
                                        <td>8</td>
                                        <td>Kabupaten Tulangbawang Barat</td>
                                        <td>1806</td>
                                        <td>2</td>
                                        <td>-4.5256967</td>
                                        <td>105.0791228</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1763</td>
                                        <td>8</td>
                                        <td>Kabupaten Pringsewu</td>
                                        <td>1810</td>
                                        <td>2</td>
                                        <td>-5.3539884</td>
                                        <td>104.9622498</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1764</td>
                                        <td>8</td>
                                        <td>Kabupaten Mesuji</td>
                                        <td>1811</td>
                                        <td>2</td>
                                        <td>-4.0044783</td>
                                        <td>105.3131185</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1765</td>
                                        <td>10</td>
                                        <td>Kabupaten Lingga</td>
                                        <td>2104</td>
                                        <td>2</td>
                                        <td>-0.1627686</td>
                                        <td>104.6354631</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1766</td>
                                        <td>10</td>
                                        <td>Kabupaten Anambas</td>
                                        <td>2105</td>
                                        <td>2</td>
                                        <td>3.1055459</td>
                                        <td>105.6537231</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1767</td>
                                        <td>14</td>
                                        <td>Kabupaten Sleman</td>
                                        <td>3404</td>
                                        <td>2</td>
                                        <td>-7.716165</td>
                                        <td>110.335403</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1768</td>
                                        <td>16</td>
                                        <td>Kota Tangerang Selatan</td>
                                        <td>3674</td>
                                        <td>2</td>
                                        <td>-6.2888889</td>
                                        <td>106.7180556</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1769</td>
                                        <td>18</td>
                                        <td>Kabupaten Lombok Utara</td>
                                        <td>5208</td>
                                        <td>2</td>
                                        <td>-8.3739076</td>
                                        <td>116.2777073</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1770</td>
                                        <td>19</td>
                                        <td>Kabupaten Sabu Raijua</td>
                                        <td>5302</td>
                                        <td>2</td>
                                        <td>-10.5541116</td>
                                        <td>121.8334868</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1771</td>
                                        <td>24</td>
                                        <td>Kabupaten Bolang Mongondow Timur</td>
                                        <td>7110</td>
                                        <td>2</td>
                                        <td>0.7152651</td>
                                        <td>124.4641848</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1772</td>
                                        <td>24</td>
                                        <td>Kabupaten Bolang Mongondow Selatan</td>
                                        <td>7111</td>
                                        <td>2</td>
                                        <td>0.4053215</td>
                                        <td>123.8411288</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1773</td>
                                        <td>25</td>
                                        <td>Kabupaten Sigi</td>
                                        <td>7210</td>
                                        <td>2</td>
                                        <td>-1.3834127</td>
                                        <td>120.0665236</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1774</td>
                                        <td>26</td>
                                        <td>Kabupaten Toraja Utara</td>
                                        <td>7326</td>
                                        <td>2</td>
                                        <td>-2.8621942</td>
                                        <td>119.8352303</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1775</td>
                                        <td>30</td>
                                        <td>Kabupaten Maluku Barat Daya</td>
                                        <td>8108</td>
                                        <td>2</td>
                                        <td>-7.7851588</td>
                                        <td>126.3498097</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1776</td>
                                        <td>30</td>
                                        <td>Kabupaten Buru</td>
                                        <td>8104</td>
                                        <td>2</td>
                                        <td>-3.3927754</td>
                                        <td>126.7819505</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1778</td>
                                        <td>31</td>
                                        <td>Kabupaten Pulau Morota</td>
                                        <td>8207</td>
                                        <td>2</td>
                                        <td>2.3656672</td>
                                        <td>128.4008357</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1789</td>
                                        <td>32</td>
                                        <td>Kabupaten Tambrauw</td>
                                        <td>9209</td>
                                        <td>2</td>
                                        <td>-0.781856</td>
                                        <td>132.3938375</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1790</td>
                                        <td>32</td>
                                        <td>Kabupaten Maybat</td>
                                        <td>9210</td>
                                        <td>2</td>
                                        <td>3.1472</td>
                                        <td>101.6997</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1791</td>
                                        <td>33</td>
                                        <td>Kabupaten Memberamo Tengah</td>
                                        <td>9121</td>
                                        <td>2</td>
                                        <td>-2.3745692</td>
                                        <td>138.3190276</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1792</td>
                                        <td>33</td>
                                        <td>Kabupaten Yalimo</td>
                                        <td>9122</td>
                                        <td>2</td>
                                        <td>-3.7852847</td>
                                        <td>139.4466005</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1793</td>
                                        <td>33</td>
                                        <td>Kabupaten Lanny Jaya</td>
                                        <td>9123</td>
                                        <td>2</td>
                                        <td>-3.971033</td>
                                        <td>138.3190276</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1794</td>
                                        <td>33</td>
                                        <td>Kabupaten Nduga</td>
                                        <td>9124</td>
                                        <td>2</td>
                                        <td>-4.4069496</td>
                                        <td>138.2393528</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1795</td>
                                        <td>33</td>
                                        <td>Kabupaten Puncak</td>
                                        <td>9125</td>
                                        <td>2</td>
                                        <td>-6.7125476</td>
                                        <td>106.9542425</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1796</td>
                                        <td>33</td>
                                        <td>Kabupaten Dogiyai</td>
                                        <td>9126</td>
                                        <td>2</td>
                                        <td>-4.0193872</td>
                                        <td>135.9610446</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1797</td>
                                        <td>33</td>
                                        <td>Kabupaten Intan Jaya</td>
                                        <td>9127</td>
                                        <td>2</td>
                                        <td>-3.5076422</td>
                                        <td>136.7478493</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>1798</td>
                                        <td>33</td>
                                        <td>Kabupaten Deiyai</td>
                                        <td>9128</td>
                                        <td>2</td>
                                        <td>-4.0974893</td>
                                        <td>136.4393054</td>
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
