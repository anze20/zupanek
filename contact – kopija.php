<?php
$page_title = "Frizerski salon Pretty";
include('includes/header.html');
?>



    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Kje nas lahko najdete
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.8570808621103!2d14.313543415859115!3d46.27294447911894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477ab8fe00ab1eed%3A0x5b83e969b3a2881d!2sGlavna+cesta+24%2C+4202+Naklo!5e0!3m2!1ssl!2ssi!4v1480264150507" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-4">
                    <p>Telefon:
                        <strong>040 646 222</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">klara@salon.si</a></strong>
                    </p>
                    <p>Naslov:
                        <strong>Glavna cesta 24 - nad Pošto Slovenije
                            <br>4202 Naklo</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>naročite se</strong>
                    </h2>
                    <hr>
                    <p>Cenjene stranke naprošamo, da se za storitev naročite preko spodnjega obrazca, saj imajo naročene stranke prednost pred nenaročenimi.</p>
                    
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
                            <div class="form-group col-lg-3">
                                <label>Željeni termin</label>
                                <input name="datetime" id="datetimepicker7" type="text" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Sporočilo (vpišite, če imate kakšne posebne želje npr.slavnostne pričeske,...): </label>
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

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Frizerski salon Pretty 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->

    jQuery('#datetimepicker').datetimepicker();

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/build/jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

var logic = function( currentDateTime ){
	if (currentDateTime && currentDateTime.getDay() == 6){
		this.setOptions({
			minTime:'15:00'
		});
	}else
		this.setOptions({
			minTime:'14:00'
		});
};
$('#datetimepicker7').datetimepicker({
	onChangeDateTime:logic,
	onShow:logic
});

</script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

