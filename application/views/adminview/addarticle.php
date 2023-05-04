<?php $this->load->view("adminview/header"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Add Article</h2>
    <form enctype="multipart/form-data" action="<?php echo base_url('index.php/admin/article/addarticle_post'); ?>" method="POST">
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="title">
        </div><br>
        <div class="form-group">
        <textarea name="description" class="form-control" cols="10" rows="10" placeholder="description"></textarea>
        </div><br>
        <div class="form-group">
            <input type="file" name="image" class="form-control" placeholder="image">
        </div><br>
        <button type="submit" class="btn btn-primary">Add article</button>

    </form>
</main>



<?php $this->load->view("adminview/footer.php"); ?>
<script type="text/javascript">
    <?php 
    if(isset($_SESSION['inserted'])){
        if($_SESSION['inserted']=="yes"){
            echo "alert('Data inserted done');";
        }
       
    }
    else{
        echo "alert('not done');";
    }
    ?>

</script>
