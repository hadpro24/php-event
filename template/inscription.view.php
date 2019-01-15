<?php  include_once("template/_partials/_header.php") ?>
        
        <!--================Home Banner Area =================-->
        <!-- <section class="home_banner_area" style="margin-top:0">
            <div class="banner_inner d-flex align-items-center" style="margin-top: 50px;">
				<div class="container">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="banner_content text-center">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
									<h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="banner_content text-center">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
									<h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="banner_content text-center">
									<div class="date">
										<a class="gad_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
									</div>
									<h3>Nest Protect: 2nd Gen Smoke + CO Alarm</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section> -->
        <!--================End Home Banner Area =================-->
        
        <!--================Choice Area =================-->
        <!-- <section class="choice_area p_120">
        	<div class="container">
        		<div class="main_title2">
        			<h2>Nos evenements</h2>
        		</div>
        		<div class="row choice_inner">
        			<div class="col-lg-3 col-md-6">
        				<div class="choice_item">
        					<img class="img-fluid" src="img/blog/choice/choice-1.jpg" alt="">
        					<div class="choice_text">
        						<div class="date">
        							<a class="gad_btn" href="#">Gadgets</a>
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
        						</div>
        						<a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
        						<p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="choice_item">
        					<img class="img-fluid" src="img/blog/choice/choice-2.jpg" alt="">
        					<div class="choice_text">
        						<div class="date">
        							<a class="gad_btn" href="#">Gadgets</a>
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
        						</div>
        						<a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
        						<p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="choice_item">
        					<img class="img-fluid" src="img/blog/choice/choice-3.jpg" alt="">
        					<div class="choice_text">
        						<div class="date">
        							<a class="gad_btn" href="#">Gadgets</a>
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
        						</div>
        						<a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
        						<p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="choice_item">
        					<img class="img-fluid" src="img/blog/choice/choice-4.jpg" alt="">
        					<div class="choice_text">
        						<div class="date">
        							<a class="gad_btn" href="#">Gadgets</a>
									<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>March 14, 2018</a>
									<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
        						</div>
        						<a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
        						<p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section> -->

        <section style="padding: 20px; margin-bottom:80px;margin-top: 117px;">
            <div class="container margin-top: 117px;">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                    <?php if(isset($errors) && !empty($errors)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php foreach($errors as $error): ?>
                                <?= $error ?> <br>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <h3>Inscrivez-vous pour créer vos evenements</h3>
                    <form method="POST" style="background-color:#f7f8fb; padding:20px;">
                    <div class="form-group">
                        <label for="nom">Nom Compte</label>
                        <input type="text" class="form-control" name="nom" id="nom" aria-describedby="nom" placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                        <label for="email">Adresse mail</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Télephone</label>
                        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phone" placeholder="Enter phone">
                        <small id="phone" class="form-text text-muted">Numéro de téléphone : 669416210</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Mot de passe de confirmation</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirmation">
                    </div>
                    <!-- <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">En créant votre compte vous accepter
                            les conditions d'utilisations.
                        </label>
                    </div> -->
                    <input type="submit" class="btn btn-primary" name="register" value="Créer mon compte" style="cursor:pointer;">
                </form>
                    </div>
                </div>
            </div>
        </section>

        
<?php  include_once("template/_partials/_footer.php") ?>
