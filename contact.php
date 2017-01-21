<?php
$page_title = "Frizerski salon Pretty";
include('includes/header.html');
?>



    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><strong>kje nas lahko najdete</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2764.074842152707!2d14.599435015855482!3d46.14925577911491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47653437e57e5ab5%3A0x4f102170646bbd6!2s%C4%8Cebelarstvo+Zupanek!5e0!3m2!1ssl!2ssi!4v1483353136792" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                <div class="col-md-4">
                                        
                  <p>Telefon:
                        <strong>031 375 666</strong>
                    </p>
                    <br />
                    <p>Email:
                        <strong><a href="mailto:name@example.com">cebelarstvo@zupanek.si</a></strong>
                    </p>
                    <br />
                    <p>Naslov:
                        <strong>Trdinova 5 
                            1230 Domžale</strong>
                                            
                          

       
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Vaša vprašanja</strong>
                    </h2>
                    <hr>
                    <p>V primeru, da na naši spletni strani niste našli odgovorov, ki ste jih želeli, vas prosimo, da nam vprašanje zastavite v spodnjem obrazcu..</p>
                    <p>Na vaše vprašanje bomo odgovorili takoj, ko bo mogoče.</p>
                      <br>
                    <form method="POST" action="sendmail.php" role="form">
                        <div class="row">
                            <div class="form-group col-lg-3">
                                <label>Ime in priimek:</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Email naslov:</label>
                                <input name="email" type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Telefonska številka:</label>
                                <input name="phonenum" type="tel" class="form-control">
                            </div>
                           
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Vaše vprašanje: </label>
                                <textarea class="form-control" rows="6" name="message"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Pošlji</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>

    </div>
    <!-- /.container -->
<?php
include('includes/footer.php');
?>

   