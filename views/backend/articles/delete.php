<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numArt = $_GET['numArt'];
$libTitrArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];

?>
<style> 
h1{
    color:white;
}
label{
    color:white;
}</style>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Status</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numArt">Numéro de l'article</label>
                    <input id="numArt" class="form-control" type="text" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly">
                    <label for="libTitrArt">Titre de l'article</label>
                    <input id="libTitrArt" class="form-control"  type="text" name="libTitrArt" value="<?php echo($libTitrArt) ?>" readonly="readonly">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                </div>
            </form>
        </div>
    </div>
</div>