<?php  include_once("template/_partials/_header.php") ?>

        <section style="padding: 20px; margin-bottom:80px;margin-top: 117px;">
            <div class="container margin-top: 117px;">
                <div class="row">
                    <div class="col-md-6 offset-md-1">
                        <?php foreach($data as $dt): ?>
                            <h3><?php echo $dt->title ?></h3>
                            <p>
                                <p>Date de l'évenement : <Strong><?= $dt->date_event ?></Strong></p>
                                <p>Lieu de l'évenement : <Strong><?= $dt->adresse_event ?></Strong></p>
                                <p>Nombre de place reservé : <Strong><?= $nombre ?> </Strong></p>
                            </p>
                            <p>
                                <strong>Description : </strong><br>
                                <?= $dt->contenu ?>
                            </p>
                        <?php endforeach; ?>
                    </div>
                    <?php if(!isset($_SESSION['user_id'])): ?>
                        <div class="col-md-5">
                            <?php if(isset($errors) && !empty($errors)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php foreach($errors as $error): ?>
                                        <?= $error ?> <br>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <?php if(isset($success)): ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $success ?> <br>
                                </div>
                            <?php endif; ?>
                            <h3>Reservé votre place</h3>
                            <form method="POST">
                                <div class="form-group">
                                    <label for="nom">Nom complet *</label>
                                    <input type="text" class="form-control" name="name" id="nom" placeholder="Votre nom Complet">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Adresse mail">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Commentaire( Optionnel )</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
                                </div>
                                <input type="submit" class="btn btn-primary" name="reserver" value="Réservé votre place" style="cursor:pointer;">
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        
<?php  include_once("template/_partials/_footer.php") ?>
