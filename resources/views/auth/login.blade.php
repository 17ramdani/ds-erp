<x-guest-layout>
    <section class="">
        <div class="uk-container uk-container-xsmall">
            <main>

                <div class="rz-panel" id="box-login">
                    <h3>Admin Login</h3>
                    <div class="uk-flex" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-card uk-card-body rz-login uk-border-rounded">
                                <div class="uk-margin">
                                    <x-alert />
                                </div>
                                <form class="uk-form-stacked" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Email</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="email" name="email" autocomplete="off"
                                                required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Password</label>
                                        <div class="uk-form-controls">
                                            <input class="uk-input" type="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="uk-child-width-1-1 uk-grid-small" uk-grid>

                                        <div>
                                            <button type="submit"
                                                class="uk-button uk-width-1-1 uk-button-primary">Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                </div>



            </main>

        </div>
    </section>
</x-guest-layout>
