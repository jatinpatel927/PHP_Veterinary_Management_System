<?php require 'database/connect.php';
   if(isset($_POST['submit']))
   {
    // echo "hell";
     $animal = trim($_POST['animal']);
     $a_id = $_POST['a_id'];
     if($animal == !"")
     {
        $animal_query = "INSERT INTO `treatment` (`d_id`,`syt_id`,`c_animal_name`, `date`) VALUES ('$a_id','$animal', current_timestamp())";
        $animal_run = mysqli_query($con,$animal_query);
        if($animal_run)
        {
            echo "<script>alert('One Animal Category Add')</script>";
            ?>
            <script>
                window.location.href='animal_category.php';
            </script>
            <?php
        }
        else
        {
            echo "<script>alert('Animal Category not Add')</script>";
            ?>
            <script>
                window.location.href='add_animal_c.php';
            </script>
            <?php
        }
    }
    else
    {
        echo "<script>alert('Animal Category Name Is Empty')</script>";
    }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php require 'header.php'; ?>
    <h1>Add Animal</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Animal Category</label>
            <input type="text" class="form-control" name="animal" id="exampleFormControlInput1" placeholder="Animal Category">
        </div>
        <div class="mb-3">
              <select class="form-select" name="a_id" aria-label="Default select example">
                <option value="0">Open this select menu</option>
                <?php
                echo $s_co_id;
                  $co_query = "SELECT id,animal_name FROM animal";
                  $co_run = mysqli_query($con,$co_query);
                   
                  if(mysqli_num_rows($co_run) > 0)
                  {
                  
                    while($co_row = mysqli_fetch_assoc($co_run))
                    {
                       if($a_id == $co_row['id'])
                       {
                         echo '<option selected value='.$co_row['id'].'>'.$co_row['animal_name'].'</option>';

                       }
                       else
                       {
                        echo '<option value='.$co_row['id'].'>'.$co_row['animal_name'].'</option>';
                       }
                      }
                  }

                 ?>
<!--                 
                <option value="2">Two</option>
                <option value="3">Three</option> -->
              </select>
            </div>
        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-warning">Add</button>
        </div>
    </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>