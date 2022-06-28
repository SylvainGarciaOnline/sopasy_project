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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5404.571530607853!2d5.0470744446361975!3d47.3673408143986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ed623aa0dd4247%3A0xff4c5acfe9c56d3a!2s8c%20Rue%20Jeanne%20Barret%2C%2021000%20Dijon!5e0!3m2!1sfr!2sfr!4v1656341273493!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"><a href="https://www.google.fr/maps/place/8c+Rue+Jeanne+Barret,+21000+Dijon/@47.3673408,5.0470744,16z/data=!4m5!3m4!1s0x47ed623aa0dd4247:0xff4c5acfe9c56d3a!8m2!3d47.3675007!4d5.0492524"></a></iframe>
<?php include 'include_footer.php'; ?>