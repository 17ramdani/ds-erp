<x-guest-layout>

    <section class="uk-section" uk-height-viewport>
        <div class="uk-position-center">
            <div class="uk-width-1-1">
                <div class="uk-container uk-container-small">
                    <div class="rz-panel">

                        <div class="uk-child-width-1-2@s uk-flex uk-flex-middle" uk-grid>
                            <div>
                                <div class="uk-margin">
                                    <x-alert />
                                </div>
                                <form method="POST" action="{{ url('/login') }}">
                                    @csrf

                                    <img src="{{ asset ('assets/img/logo_toko.png') }}" class="rz-logo-medium" alt="">

                                    <div class="uk-margin">
                                        <input class="uk-input" type="email" name="email" placeholder="email" required>
                                    </div>

                                    <div class="uk-margin">
                                        <input class="uk-input" type="password" name="password" placeholder="password" required>
                                    </div>

                                    <div class="uk-margin">
                                        <button type="submit" class="uk-button uk-button-primary uk-border-rounded">Login</button>

                                    </div>

                                </form>
                            </div>
                            <div>
                                <img src="https://duniasandang.com/wp-content/uploads/2022/01/fabric-dunia-sandang.jpg" alt="" class="uk-border-rounded">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@latest/dist/js/uikit-icons.min.js"></script>
    </body>

    </html>
</x-guest-layout>
