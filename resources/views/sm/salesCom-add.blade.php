<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-2-3@s">
                        <div class="rz-panel">

                            <h5>Commision Proposal</h5>
                            <form class="uk-form-stacked">
                                <div class="uk-margin">
                                    <label class="uk-form-label">Date</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="date">
                                    </div>
                                </div>
                                <div uk-grid>
                                    <div class="uk-width-expand">
                                        <label class="uk-form-label">SO Date</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="text">
                                        </div>
                                    </div>
                                    <div class="width-auto uk-flex uk-flex-bottom">
                                        <a href="" class="uk-button uk-button-default">Search</a>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Sales Amount</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Commision Amount</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number">
                                    </div>
                                </div>
                            </form>
                            <div class="uk-margin-large-top"><a href="" class="uk-button uk-button-primary uk-border-rounded">Submit</a></div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</x-app-layout>
