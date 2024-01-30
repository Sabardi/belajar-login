<?php
include "database.php";
?>
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <form action="user.php" method="post">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputname" type="text" name="username" placeholder="masukkan username" />
                        <label for="inputname">Username</label>
                    </div>
    
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" />
                        <label for="inputPassword">Password</label>
                    </div>
                        
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" />
                        <label for="email">Email address</label>
                    </div>
    
                    <div class="form-floating mb-3">
                        <select class="form-select" name="level" id="level">
                            <option selected>pilih</option>
                            <option value="admin">admin</option>
                            <option value="member">member</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3 text-center">
                        <button type="submit" name="register" class="btn btn-primary btn-block">Register</button>
                    </div>

                    <div class="form-floating mb-3">
                        <p class="text-center mb-4">Tidak punya akun? |<a href="registrasi.php">Daftar</a></p>
                    </div>
                </form>

               </div>
            </div>
        </div>
    </div>
</div>



<?php
    include "footer.php";
?>


