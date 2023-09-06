<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Utility</h3>
                </div>

                <div class="">

                    <div class="rz-panel">

                        <h4>Slider</h4>

                        <form class="uk-form-horizontal">

                            <div class="uk-margin">
                                <label class="uk-form-label">Image File</label>
                                <div class="uk-form-controls">

                                    <div class="uk-card uk-card-small uk-card-body uk-cover-container uk-height-large">
                                        <img src="https://duniasandang.com/wp-content/uploads/2022/01/fabric-dunia-sandang.jpg" alt="" uk-cover>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-light">
                                            <div class="uk-margin">
                                                <div class="js-upload" uk-form-custom>
                                                    <input type="file" multiple>
                                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">Change Image</button>
                                                </div>
                                                <a href="" class="uk-margin-left"><span class="uk-margin-small-right" uk-icon="trash"></span>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                            <div class="uk-margin">
                                <label class="uk-form-label">URL Link</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" type="url" placeholder="https://www.duniasandang.com">
                                </div>
                            </div>

                        </form>

                        <div class="uk-margin-large-top uk-text-right">
                            <a href="" class="uk-button uk-button-primary uk-border-rounded">Save</a>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
