<?php 

$_page = 'login';
$_css = 'style_login.css';

require_once __DIR__.'/comp_header.php';

?>

<main>
<h1>Login</h1>
<form id="signup_form"  onsubmit="validate(signup); return false";>
    <label for="email">Email:</label>
    <input name="email" type="text" placeholder="email@email.com" data-validate="email">
    <button>Login</button>
</form>


</main>

<script>

    async function signup(){
      const the_form = document.querySelector("#signup_form")
      console.log(the_form)
      const conn = await fetch('bridge_login.php', {
        method : "POST",
        body : new FormData(the_form)
      })
      if( ! conn.ok ){ 
        Swal.fire(
        'Login failed!',
        'No user with that email',   
        'error'
      ).then(function() {
        
      window.location = "view_login.php";
});
      
      }
      const data = await conn.json() // Convert text to JSON
     


      Swal.fire(
        'Welcome '+ data['user_name'] +' '+ data['user_last_name'] ,
        'Login Succesfully!',
        'success'
      ).then(function(data) {
        

   window.location = "view_app.php";
    
});
    }

    
  </script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 

require_once __DIR__.'/comp_footer.php'

?>