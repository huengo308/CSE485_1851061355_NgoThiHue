<!doctype html>
<html lang="en">
  <head>
    <title>Quên mật khẩu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <style>
      body{
        background:  rgb(240, 222, 225);
    }
    .btn{
        background: pink
    }
    h1{
        color: pink
    }
    .has-error{
        color: red
    }
  </style>

  <?php
    if(isset($_POST['']))
  ?>
  <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title mt-5">
                    <a class="btn btn-success" href="login.php"><i class="fas fa-undo"></i> Trở lại</a>
                    <h1 class ="text-center py-3"> Quên mật khẩu </h1>
                    <div class="card-body">
                    <form action="" method ="post">
                        <div class="form-group">
                            <label for="email">Địa chỉ email:</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="email">
                            <div class="has-error">
                                <span> <?php echo (isset($err["email"]))? $err["email"]:''  ?> </span>
                            </div>
                        </div>
                        <button name ="send" type="submit" class="btn btn-success">Gửi</button>
                        <p>Bạn chưa có tài khoản? <a href="register.php">Đăng ký.</a></p>
                        <p>Bạn đã có tài khoản? <a href="login.php">Đăng nhập.</a></p>
                    </form>
                    </div>
                    </div>   
                 </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>