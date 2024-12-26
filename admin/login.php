<?php include('header.php'); ?>

<?php 


include('../server/connection.php');

if(isset($_SESSION['admin_logged_in'])){
    header('location: index.php');
    exit;
}

if(isset($_POST['login_btn'])){


    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT admin_id,admin_name, admin_email, admin_password FROM admins WHERE admin_email = ? AND admin_password = ? LIMIT 1");

    $stmt->bind_param('ss',$email,$password);

    if($stmt->execute()){
        $stmt->bind_result($admin_id,$admin_name,$admin_email,$admin_password);
        $stmt->store_result();

        if($stmt->num_rows() == 1){
            $stmt->fetch();
           
            $_SESSION['admin_id'] = $admin_id;
            $_SESSION['admin_name'] = $admin_name;
            $_SESSION['admin_email'] = $admin_email;
            $_SESSION['admin_logged_in'] = true;

            header('location: index.php?login_success=logged in successfully');



        }else{
            header('location: login.php?error=could not verify your account');
        }

    }else{
        //error
        header('location: login.php?error=something went wrong');

    }


}






?>


<div class="container">
    <div class="row justify-content-center login-container">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Admin Login</h5>
                    <form id="login-form" enctype="multipart/form-data" method="POST" action="login.php">
                        <p style="color: red;"><?php echo isset($error_message) ? $error_message : ''; ?></p>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" id="product-username" name="email"
                                   placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="product-desc" name="password"
                                   placeholder="Password" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" name="login_btn">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>