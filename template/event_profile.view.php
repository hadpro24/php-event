<?php  include_once("template/_partials/_header_profile.php") ?>
<div id="main-wrapper">
		<div class="main-content">
			<section id="welcome">
				<div class="content-header" style="margin-top:0;">
					<h1>Tous vos evenements</h1>
				</div>
			</section>
            
            <section class="choice_area p_120" style="padding-top:0;">
                <div class="container">
                    <div class="row choice_inner">
                        <?php foreach($data as $dt): ?>
                            <div class="col-lg-3 col-md-6" style="margin-top:20px;">
                                <div class="choice_item">
                                    <img class="img-fluid" src="img/blog/choice/choice-1.jpg" alt="">
                                    <div class="choice_text">
                                        <div class="date">
                                            <a class="gad_btn" href="event.php?id=<?= $dt->id ?>/detail">Details</a>
                                            <a href="#" class="dt_e"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?= $dt->date_event ?>
                                            </a>
                                            <a href="#" class="dt_e"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                        </div>
                                        <a href="event.php?id=<?= $dt->id ?>/detail"><h4> <?= $dt->title ?></h4></a>
                                        <p><?= $dt->contenu ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
			
		</div>
	</div>
	

        
<?php  include_once("template/_partials/_footer_profile.php") ?>
