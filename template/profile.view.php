<?php  include_once("template/_partials/_header_profile.php") ?>
<div id="main-wrapper">
		<div class="main-content">
			<section id="welcome">
				<div class="content-header" style="margin-top:0;">
					<h1>Créer un evenement</h1>
				</div>
			</section>
			<section id="tmpl-structure" style="margin-bottom : 100px;">
                <h2 class="title">Les informations de votre evenement</h2>
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
				<div class="row">
                    <div class="col-md-6">
                    <form method="POST">
                    <div class="form-group">
                        <label for="nom">Le titre de l'evenement</label>
                        <input type="text" class="form-control" name="title" id="nom" aria-describedby="nom" placeholder="Votre nom">
                    </div>
                    <div class="form-group">
                        <label for="date">Date </label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="phone">Adresse</label>
                        <input type="text" class="form-control" id="phone" name="adresse" aria-describedby="phone" placeholder="Entrer l'adresse">
                        <small id="phone" class="form-text text-muted">Le lieu de l'evenement</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Contenu</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" name="register" value="Créer l'evenement" style="cursor:pointer;">
                </form>
                    </div>
                </div>
				        
			</section>
			
		</div>
	</div>
	

        
<?php  include_once("template/_partials/_footer_profile.php") ?>
