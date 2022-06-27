<?php include 'include_header.php'; ?>
<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contactez nous</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="handler_contact-form.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Votre Nom" name="data-username" id="name" required data-validation-required-message="Merci d'entrer votre nom!">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Votre email" name="data-email" id="email" required data-validation-required-message="Merci d'entrer votre email!">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="phone" class="form-control" placeholder="Votre téléphone" name="data-phone" id="phone" required data-validation-required-message="Merci d'entrer votre numéro de téléphone!">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="data-message" id="message" class="form-control" placeholder="Votre message!" required data-validation-required-mesage="Merci d'entrer votre message ici!"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'include_footer.php'; ?>