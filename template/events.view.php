<?php  include_once("template/_partials/_header.php") ?>

        <section style="padding: 20px; margin-bottom:80px;margin-top: 117px;">
            <div class="container margin-top: 117px;">
                <div class="row">
                    <section class="choice_area p_120" style="padding-top:0;">
                        <div class="container">
                            <div class="main_title2">
                                <h2>Tous Nos Evenements</h2>
                            </div>
                            <div class="row choice_inner">
                                <?php foreach($data as $dt): ?>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="choice_item">
                                            <img class="img-fluid" src="img/blog/choice/choice-1.jpg" alt="">
                                            <div class="choice_text">
                                                <div class="date">
                                                    <a class="gad_btn" 
                                                    href="event.php?id=<?= $dt->id ?>">Details</a>
                                                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <?= $dt->date_event ?>
                                                    </a>
                                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
                                                </div>
                                                <a href="event.php?id=<?= $dt->id ?>"><h4> <?= $dt->title ?></h4></a>
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
        </section>

        
<?php  include_once("template/_partials/_footer.php") ?>
