<?php $this->load->view("onview/header"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Add Units</h2>
    <form id="data" action="<?php echo base_url('index.php/units/addunits_post'); ?>" method="POST">
        <div class="form-group">
            <input type="text" name="categoryname" class="form-control" placeholder="categoryname">
        </div><br>
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="name" value="">
        </div><br>
        <label for="active">Active</label>
        <input type="radio" name="status" value="1" <?php echo set_radio('status', 'active'); ?>>

        <label for="inactive">Inactive</label>
        <input type="radio" name="status" value="0" <?php echo set_radio('status', 'inactive'); ?>>

        <button type="submit" class="btn btn-primary">Add Units</button>

    </form>
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    $('#data').submit(function (e) {
        e.preventDefault();


        $.ajax({
            url: "<?php echo base_url('index.php/units/addunits_post'); ?>",
            type: "POST",
            data: $(this).serialize(),
            cache: false,
            success: function (data) {

                alert('Data added successfully !');
                window.location.href = '<?php echo base_url("index.php/units/viewunits"); ?>';


            },
            error: function () {
                console.log(data);
                alert("error");
            }
        });


    });

</script>

</script>