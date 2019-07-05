
<html>

  <head>

    <title>Lab 3</title>
  </head>

  <body>
    <h2>Greeter </h2>
    <form id="age-frm" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      
      <span class="lbl">Age : </span>
      
      <input type="number" id="age" name="age" required/>

      <button name="salimia" value='yes'>Salimia Me</button>
    </form>
    
    <script type="text/javascript">

      
      document.getElementById('age').onchange = function(){
        
      }


    </script>
  </body>

</html>

<?php

if(isset($_GET['salimia']) && $_GET['salimia'] == 'yes'){

  //let's get the Age
  $age = $_GET['age'];

  $age_message = salimiana($age);

  echo '<br/><marquee style="color:blue;font-size:20px;">'.$age_message.'</marquee>';
}

function salimiana($age){

  //control statements
  if( $age <= 12):
    return 'Child';
  elseif($age >= 13 && $age <= 19):
    return 'Teenie';
  elseif($age >=20 && $age < 30):
    return 'Yout';
  else:
    return 'Mzito';
  endif;

}

?>
