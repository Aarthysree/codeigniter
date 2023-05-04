<?php $this->load->view("onview/header"); ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h2>Add Category</h2>
    <form id="form" method="POST">
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="name">
        </div><br>
       <b>status</b><br>
       <input type="radio" name="active" value="active">
       <label>Active</label><br>
     
       <input type="radio" name="active" value="active">
       <label>Inactive</label><br><br>
        <button type="submit" id="submit"  class="btn btn-primary">Add Category</button>

    </form>
</main>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>

            $('#form').submit(function (e) {
                e.preventDefault();
               
                   
                    $.ajax({
                        url: "<?php echo base_url('index.php/category/addcategory_post'); ?>",
                        type: "POST",
                        data: $(this).serialize(),
                        cache: false,
                        success: function (data) {
                            
                                alert('Data added successfully !');
                                window.location.href = '<?php echo base_url("index.php/category/viewcategory"); ?>';
                          
                            
                        },
                        error: function(){
                            console.log(data);
                            alert("error");
                        }
                    });
                
               
            });
      
    </script>
