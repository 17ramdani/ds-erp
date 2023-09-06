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
                        <div class="uk-margin"><a href="{{ route('slider.add') }}" class="uk-button uk-button-small uk-button-default uk-border-rounded"><span uk-icon="plus"></span> Add New Image</a></div>

                        <ul class="uk-child-width-1-2" uk-grid>
                            <div>
                                <div class="uk-card uk-card-small uk-card-body uk-cover-container uk-height-large">
                                    <img src="https://duniasandang.com/wp-content/uploads/2022/01/fabric-dunia-sandang.jpg" alt="" uk-cover>
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-light">
                                        <div class="uk-margin">
                                            <a href="{{ route('slider.edit') }}" class="uk-button uk-button-small uk-button-primary uk-border-rounded"><span class="uk-margin-small-right" uk-icon="pencil"></span>Edit</a>
                                            <a href="" class="uk-margin-left"><span class="uk-margin-small-right" uk-icon="trash"></span>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-small uk-card-body uk-cover-container uk-height-large">
                                    <img src="https://duniasandang.com/wp-content/uploads/2022/01/kantor-dunia-sandang-1.jpg" alt="" uk-cover>
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-light">
                                        <div class="uk-margin">
                                            <a href="{{ route('slider.edit') }}" class="uk-button uk-button-small uk-button-primary uk-border-rounded"><span class="uk-margin-small-right" uk-icon="pencil"></span>Edit</a>
                                            <a href="" class="uk-margin-left"><span class="uk-margin-small-right" uk-icon="trash"></span>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-small uk-card-body uk-cover-container uk-height-large">
                                    <img src="https://duniasandang.com/wp-content/uploads/2022/11/rekomendasi-kain-untuk-baju-gamis-1-1024x808.jpg" alt="" uk-cover>
                                    <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-light">
                                        <div class="uk-margin">
                                            <a href="{{ route('slider.edit') }}" class="uk-button uk-button-small uk-button-primary uk-border-rounded"><span class="uk-margin-small-right" uk-icon="pencil"></span>Edit</a>
                                            <a href="" class="uk-margin-left"><span class="uk-margin-small-right" uk-icon="trash"></span>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>

                        <div class="uk-margin-large-top uk-text-right">
                            <a href="" class="uk-button uk-button-primary uk-border-rounded">Save</a>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
