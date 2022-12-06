<?php include("db.php");?>
<?php include("include/header.php");?>


<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task Titulo" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Descripcion"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btnblock" name="save_task" value="Guardar">
                </form>
            </div>

        </div>


        <div class="col-md-8">

        </div>


    </div>




</div>




   
<?php include("include/footer.php")?>

