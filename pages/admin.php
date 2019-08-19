


<div class="row">
    
    <form class="col s12" method="POST" action="elements/handling/addcar.php" enctype="multipart/form-data">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="name">
                <label for="first_name">Nom du produit</label>
            </div>

            <div class="input-field col s6">
                <input id="last_name" type="text" class="validate" name="price">
                <label for="last_name">Prix</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="desc" type="text" class="validate" name="desc">
                <label for="desc">Description</label>
            </div>
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <input id="img" type="file" class="validate" name="img">
            </div>
        </div>

        <div class="row">
            <button type="submit">Envoyer</button>
        </div>
               
    </form>
</div>
