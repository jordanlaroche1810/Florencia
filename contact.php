<?php require_once "include/header.php"; ?>
<?php require_once "include/db.php"; ?>
    <section>
        <div class="container">
            <div class="row  m-b-50">
                <div class="col-lg-6">
                    <div class="heading-text heading-section">
                        <h2>Demande de contact</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Un renseignement ? Une demande de devis en ligne ?</h3>
                    <p>Quel que soit le sujet de votre demande, je suis disponible et vous recontacte dans les 24h !</p>
                    <div class="m-t-30">
                        <form method="POST" action="functions/contact-form.php">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nom">Nom</label>
                                    <input type="text" aria-required="true" name="nom" required="" class="form-control required name" placeholder="Entrez votre nom">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" aria-required="true" name="prenom" required="" class="form-control required name" placeholder="Entrez votre nom">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="email" class="form-control required email" placeholder="Entrez votre email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="telephone">Téléphone</label>
                                    <input type="tel" aria-required="true" name="telephone" class="form-control required" placeholder="Entrez votre numéro de téléphone">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="demande">Objet de votre demande</label>
                                    <select class="form-select" name="demande" id="demande">
                                        <option value="Question">Question</option>
                                        <option value="Devis">Devis</option>
                                        <option value="Partenariat">Partenariat</option>
                                        <option value="Autres">Autres</option>
                                    </select>
                                </div>
                            </div>

                            <div id="additionalInputs" class="hidden">
                                <div class="form-group">
                                    <label for="dateMariage">Quel est la date du mariage ?</label>
                                    <input type="date" class="form-control" id="dateMariage" name="dateMariage">
                                </div>
                                <div class="form-group">
                                    <label for="lieu">Quel est le lieu de mariage ?</label>
                                    <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Entrez le lieu de votre mariage">
                                    <div id="autocomplete-suggestions" class="autocomplete-suggestions"></div>
                                </div>
                                <div class="form-group">
                                    <label for="weddingPlanner">Faites-vous appel à un(e) wedding planner pour l'organisation de votre mariage ?</label>
                                    <select class="form-select" name="weddingPlanner" id="weddingPlanner">
                                        <option value="Non">Non</option>
                                        <option value="Oui">Oui</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nbInvite">Quel est le nombre d’invités (enfants compris) ?</label>
                                    <input type="number" class="form-control" id="nbInvite" name="nbInvite" placeholder="Entrez votre nombre d'invités">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="message" rows="5" class="form-control" placeholder="Entrez votre message"></textarea>
                            </div>
                            <div class="form-group">
                                <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                                <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-9ehkt9g6lqr8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M&amp;co=ZmlsZTo.&amp;hl=en&amp;v=9pvHvq7kSOTqqZusUzJ6ewaF&amp;size=normal&amp;cb=8sao0pdkri5a"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                            </div>
                            <input type="hidden" name="contacter" value="true"/>
                            <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('demande').addEventListener('change', function() {
            var additionalInputs = document.getElementById('additionalInputs');
            if (this.value === 'Devis') {
                additionalInputs.classList.remove('hidden');
            } else {
                additionalInputs.classList.add('hidden');
            }
        });

        function debounce(func, wait) {
            let timeout;
            return function(...args) {
                const context = this;
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(context, args), wait);
            };
        }

        function fetchSuggestions(query) {
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${query}`)
                .then(response => response.json())
                .then(data => {
                    const suggestionsContainer = document.getElementById('autocomplete-suggestions');
                    suggestionsContainer.innerHTML = '';
                    data.forEach(place => {
                        const suggestion = document.createElement('div');
                        suggestion.classList.add('autocomplete-suggestion');
                        suggestion.textContent = place.display_name;
                        suggestion.addEventListener('click', function() {
                            document.getElementById('lieu').value = place.display_name;
                            suggestionsContainer.innerHTML = '';
                        });
                        suggestionsContainer.appendChild(suggestion);
                    });
                });
        }

        document.getElementById('lieu').addEventListener('input', debounce(function() {
            const query = this.value;
            if (query.length > 2) {
                fetchSuggestions(query);
            }
        }, 300));

    </script>
<?php require_once "include/footer.php"; ?>