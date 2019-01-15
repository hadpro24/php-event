<?php  include_once("template/_partials/_header.php") ?>
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
                    <?php if(isset($_SESSION['registration'])): ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_SESSION['registration'] ?> <br>
                        </div>
                    <?php endif; ?>
                    <h3>Accéder à votre compte et ajouter vos evenements</h3>
                    <form method="POST" style="background-color:#f7f8fb; padding:20px;">
                
                    <div class="form-group">
                        <label for="email">Identifiant (email ou telephone)</label>
                        <input type="text" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email ou telephone">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                    </div>
                    <input type="submit" class="btn btn-primary" name="login" value="Se connecter" style="cursor:pointer;">
                </form>
                    </div>
                </div>
            </div>
        </section>

        
<?php  include_once("template/_partials/_footer.php") ?>
