
<!-- //capabilities -->
<!-- contact -->
<div class="contact">
    <div class="container">

        <div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
            <h3>Contact Info</h3>
            <div class="strip"></div>
            <ul class="con-icons">
                <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Perum Pondok Lestari Blok C1 No.1-2, <br>Jl. HOS Cokroaminoto, Ciledug Kota Tanggerang 15157</li><br>
                <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>021-5854858</li><br>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>021-7304150</li><br>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>rsmedikalestari@gmail.com</li>
            </ul>
            <ul class="fb_icons">
                <li class="hvr-rectangle-out"><a class="fb" href="https://www.facebook.com/pages/Rs-Medika-Lestari-Ciledug-Tangerang/150404798956936"></a></li>
                <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
            </ul>
            <div class="strip"></div>
        </div>
        <div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
            <h2>Tentang Kami</h2>
            <div class="strip"></div>
            <p class="para">kami memberikan kemudahan dalam hal pelayanan kesehatan bagi masyarakat, dengan moto kami yaitu "KESEMBUHAN ANDA KEBAHAGIAN KAMI"</p>
            <p class="copy-right">©All rights reserved | Design by <a href="http://w3layouts.com/">Medikass</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //contact -->
<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">

                    <div class="login-right">
                        <h3>Login</h3>
                        <form action="session.php" method="post">
                            <div class="sign-in">
                                <h4>Username :</h4>
                                <input type="text" name="username" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                            this.value = 'Type here';}" required="">	
                            </div>
                            <div class="sign-in">
                                <h4>Password :</h4>
                                <input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                            this.value = 'Password';}" required="">
                                <a href="#">Forgot password?</a>
                            </div>
                           
                            <div class="sign-in">
                                <input type="submit" value="SIGNIN" name="login">
                            </div>
                        </form>
                    </div>

                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<!-- login -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login-bottom">
                        <h3>Sign up for free</h3>
                        <form action="input_user.php" method="post">
                            <div class="sign-up">
                                <h4>Username</h4>
                                <input type="text" name="username"  onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                            this.value = 'Type here';}" required="">	
                            </div>
                            <div class="sign-up">
                                <h4>Password :</h4>
                                <input type="password" name="password"  onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                            this.value = 'Password';}" required="">

                            </div>
                            <div class="sign-up">
                                <h4>Re-type Password :</h4>
                                <input type="password" name="" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                            this.value = 'Password';}" required="">
                              <input type="hidden" class='form-control' name="level">
							  <input type="hidden" class='form-control' name="status" value="0">
                            </div>
                            <div class="sign-up">
                                <input type="submit" name="Simpan" value="REGISTER NOW" >
                            </div>

                        </form>
                    </div>
                    <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>

