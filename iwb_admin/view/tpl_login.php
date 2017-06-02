       <div class="user_admin_page">
         <div class="user_admin_center col-xs-11 col-sm-7 col-lg-5 col-md-5"> 
          <h1>Log in</h1>
            <form data-toggle="validator" role="form" id="familyloginForm" action="login.php" method="post">

              <div class="form-group">
                <label for="inputEmail" class="control-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="username" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="control-label">Password</label>
                  <input type="password" data-minlength="" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
              </div>
            <div class="form-group">
                 <a href="#" data-target="#pwdModal" data-toggle="modal">Forgot password</a>
            </div>
              <div id="user_submint" class="form-group">
                <button id="user-submint_button" type="submit" class="btn btn-primary" name="login">Submit</button>
              </div>
            </form>
          </div>  
       </div> 

<script>
$(document).ready(function()
{
                
                $("#familyloginForm").ajaxForm
                ({
                    
                    success:function(data)
                    {
                       
                         
                         if(data == 'true')
                         {
                            window.location.href ='<?php echo $_CONFIG["base_url"];?>';
                            //alert("true");
                         }
                         else if(data == 'false')
                         {
                            alert("login failed");
                           
                         }
                    }
                });
});
       
</script>