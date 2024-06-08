<?php require_once "include/header.php"; ?>
<?php require_once "include/db.php"; ?>
    <section>
        <div class="container">
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
                                        <option>Question</option>
                                        <option>Devis</option>
                                        <option>Partenariat</option>
                                        <option>Autres</option>
                                        <option>5</option>
                                    </select>
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
<?php require_once "include/footer.php"; ?>