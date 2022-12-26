<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng ký tài khoản</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default rounded borders and increase the bottom margin */
            .navbar {
            margin-bottom: 50px;
            border-radius: 0;
            }
           
            /* Remove the jumbotron's default bottom margin */
            .jumbotron {
            margin-bottom: 0;
            }
       
            /* Add a gray background color and some padding to the footer */
            footer {
            background-color: #f2f2f2;
            padding: 25px;
            }
 
        </style>
    </head>
 
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="https://suno.vn/blog/wp-content/uploads/2019/03/4-xu-huong-cong-nghe.jpg" style="width: 30px;">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Trang chủ</a></li>
                        <li><a href="#">Sản phẩm</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="glyphicon glyphicon-user"></span> Tài khoản
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://localhost/miscuahang/dang_nhap.php">Đăng nhập</a></li>
                                <li><a href="http://localhost/miscuahang/dang_ky.php">Đăng ký</a></li>              
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 
        <div class="container">
            <form method="POST" name="register" id="registration" 
            onsubmit="return checkForm()" method='post' action='thuc_hien_dang_ky.php'>>
                <div class="col-md-6 col-md-offset-3">
                    <h1 style="text-align: center">Đăng kí tài khoản</h1>
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="ten_nguoi_dung" id="username" type="text" />
                        <label style="color:RGB(179 187 187); font-size:10px;">Tên đăng nhập có thể là chữ hoặc số không bao gồm khoảng trắng</label>
                    </div>
 
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" id="email" type="text" placeholder="admin" />
                        <label style="color:RGB(179 187 187); font-size:10px;">Nhập địa chỉ email bạn thường dùng</label>
                    </div>
 
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input class="form-control" name="mat_khau" id="password" type="password" />
                        <label style="color:RGB(179 187 187); font-size:10px;">Mật khẩu bao gồm ít nhất 4 kí tự</label>
                    </div>
 
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input class="form-control" name="nl_mat_khau" id="passwordnl" type="password" />
                        <label style="color:RGB(179 187 187); font-size:10px;">Vui lòng nhập lại mật khẩu</label>
                    </div>
 
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Đăng ký" />
                    </div>
                </div>
            </form>
        </div>
        <script>
function checkForm()
{
     var username = document.forms['register']["username"].value;
     var password = document.forms['register']["password"].value;
     var confirmPassword = document.forms['register']["passwordnl"].value;
     var email = document.forms['register']["email"].value;
     
     if(username == '')
     {
        alert('Bạn phải nhập đầy đủ thông tin người dùng');
        document.forms["register"]["username"].focus();
        return false;
     }
     else if(password == '')
     {
        alert('Bạn phải nhập mật khẩu');
        document.forms["register"]["password"].focus();
        return false;
     }
     else if(email == '')
     {
        alert('Bạn phải nhập email');
        document.forms["register"]["email"].focus();
        return false;
     }
     else if(password != passwordnl)
     {
        alert('Mật khẩu xác nhận chưa khớp !');
        return false;
     }
     else return true;  
}
</script>
 
        <footer class="container-fluid text-center">
            <div>
                <p>Online Store Copyright</p>  
                <form class="form-inline">Get deals:
                    <input type="email" class="form-control" size="50" placeholder="Email Address">
                    <button type="button" class="btn btn-danger">Sign Up</button>
                </form>
            </div>
        </footer>
    </body>
</html>
