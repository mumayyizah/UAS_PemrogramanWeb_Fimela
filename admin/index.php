<?php
@session_start();
include "inc/koneksi.php";
if(@$_SESSION['Admin']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIMELA || Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../fontawesomefree/css/all.css">
    <link rel="stylesheet" href="../DataTables/datatables.css">
</head>
<body>
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-light shadow p-3 mb-5 rounded" style="background:white;">
        <?php 
            if(@$_SESSION['Admin']){
                $user_login = @$_SESSION['Admin'];
            }

            $sql_user = $conn->query("SELECT * FROM tb_user WHERE id='$user_login'") or die(mysqli_error());
            $profil = mysqli_fetch_array($sql_user);
        ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">FIMELA</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="margin-left:50px;">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="../admin">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Master Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?page=beauty">Beauty</a>
                        <a class="dropdown-item" href="?page=fashion">Fashion</a>
                        <a class="dropdown-item" href="?page=relationship">Relationship</a>
                        <a class="dropdown-item" href="?page=celebrity">Celebrity</a>
                        <a class="dropdown-item" href="?page=lifestyle">Lifestyle</a>    
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Juts Read
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?page=fimelahood">Fimelahood</a>
                        <a class="dropdown-item" href="?page=personality">Personality</a>
                        <a class="dropdown-item" href="?page=zodiak">Zodiak</a>
                        <a class="dropdown-item" href="?page=parenting">Parenting</a>
                        <a class="dropdown-item" href="?page=foto">Foto</a>
                        <a class="dropdown-item" href="?page=video">Video</a>    
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=user">User</a>
                </li>
            </ul>
            <span style="margin-right:10px;">Selamat Datang <b><?php echo $profil['nama_lengkap'];?></b></span>
            <a href="inc/logout.php" class="btn btn-info"><span class="fas fa-sign-out-alt"></span></a>
        </div>
    </nav>

    <div class="container" style="margin-top:80px;">
        <?php
            if(@$_GET['page']==""){
                include "views/views.php";
            }else if(@$_GET['page']=="fashion"){
                if(@$_GET['act']==""){
                    include "views/d.fashion.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.fashion.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.fashion.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.fashion.php";
                }
            }else if(@$_GET['page']=="beauty"){
                if(@$_GET['act']==""){
                    include "views/d.beauty.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.beauty.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.beauty.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.beauty.php";
                }
            }else if(@$_GET['page']=="relationship"){
                if(@$_GET['act']==""){
                    include "views/d.relationship.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.relationship.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.relationship.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.relationship.php";
                }
            }else if(@$_GET['page']=="celebrity"){
                if(@$_GET['act']==""){
                    include "views/d.celebrity.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.celebrity.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.celebrity.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.celebrity.php";
                }
            }else if(@$_GET['page']=="lifestyle"){
                if(@$_GET['act']==""){
                    include "views/d.lifestyle.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.lifestyle.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.lifestyle.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.lifestyle.php";
                }
            }else if(@$_GET['page']=="user"){
                if(@$_GET['act']==""){
                    include "views/d.user.php";
                }else if(@$_GET['act']=="add"){
                    include "inc/add.user.php";
                }else if(@$_GET['act']=="upd"){
                    include "inc/upd.user.php";
                }else if(@$_GET['act']=="del"){
                    include "inc/del.user.php";
                }
            }else if(@$_GET['page']=="fimelahood"){
                if(@$_GET['act']==""){
                    include "views/d.fimelahood.php";
                }
            }else if(@$_GET['page']=="personality"){
                if(@$_GET['act']==""){
                    include "views/d.personality.php";
                }
            }else if(@$_GET['page']=="zodiak"){
                if(@$_GET['act']==""){
                    include "views/d.zodiak.php";
                }
            }else if(@$_GET['page']=="parenting"){
                if(@$_GET['act']==""){
                    include "views/d.parenting.php";
                }
            }else if(@$_GET['page']=="foto"){
                if(@$_GET['act']==""){
                    include "views/d.foto.php";
                }
            }else if(@$_GET['page']=="video"){
                if(@$_GET['act']==""){
                    include "views/d.video.php";
                }
            }
        ?>
    </div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../DataTables/datatables.js"></script>
<script>
	$(document).ready(function (){
		$('#myTable').DataTable();
	});
</script>  
</body>
</html>
<?php
}else{
	header("location:login.php");
} 
?>