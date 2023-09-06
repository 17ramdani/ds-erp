<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>
                <div class="uk-margin">
                    <a href="{{ route ('order.index') }}" class="uk-button uk-button-default uk-border-rounded">
                        <span class="uk-margin-small-right" uk-icon="chevron-double-left"></span>Kembali
                    </a>
                </div>
                <div class="">
                    <div class="uk-child-width-1-3@s uk-margin" uk-grid>
                        <div>
                            <div class="rz-panel">
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-auto"><i class="rz-panel-icon ph-lg ph-factory-thin"></i></div>
                                    <div class="uk-width-expand">
                                        <div class="rz-panel-subtext">
                                            Sales Order
                                        </div>
                                        <div class="rz-panel-heading">
                                            Development
                                        </div>

                                    </div>
                                    <div class="uk-width-auto">
                                        <div class="rz-panel-value">
                                            0
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div>
                            <form class="uk-child-width-1-2 uk-form-stacked" uk-grid>
                                <div>
                                    <label class="uk-form-label">Tanggal Mulai</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="date" placeholder="Some text...">
                                    </div>
                                </div>
                                <div>
                                    <label class="uk-form-label">Tanggal Akhir</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="date" placeholder="Some text...">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>


                    <div id="salesOrderPanel" class="rz-panel-buttonset uk-flex uk-flex-between uk-margin-small">
                        <dl class="uk-margin-top">
                            <dt>Total SO</dt>
                            <dd>0</dd>
                        </dl>
                        <dl>
                            <dt>Draft</dt>
                            <dd><a href="{{ route ('draft.index') }}">5</a></dd>
                        </dl>
                        <dl>
                            <dt>Approved</dt>
                            <dd>0</dd>
                        </dl>
                        <dl>
                            <dt>WIP</dt>
                            <dd>0</dd>
                        </dl>
                        <dl>
                            <dt>Invoicing</dt>
                            <dd>0</dd>
                        </dl>
                        <dl>
                            <dt>Delivery</dt>
                            <dd>0</dd>
                        </dl>
                        <dl>
                            <dt>Done</dt>
                            <dd>0</dd>
                        </dl>

                    </div>

                    <div class="rz-panel">

                        <h4>Sales Order</h4>

                        Belum ada data
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
