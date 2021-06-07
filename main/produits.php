
<form action="index.php" method="POST">
    <div class="input-group">
        <button type="button" class="btn btn-outline-secondary" onclick="prev_product()"><</button>
        <input class="form-control" id="id_prod" type="number">
        <button type="button" class="btn btn-outline-secondary" onclick="next_product()">></button>
    </div>
    <div class="input_prod_data">
        
        <button type="submit">Envoyé</button>
    </div>
</form>

<script>
    function next_product() {
        document.getElementById("id_prod").stepUp();
    }
    function prev_product(){
        document.getElementById("id_prod").stepDown();
    }
</script>

</div>