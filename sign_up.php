<html>
<body style=" background-image: linear-gradient(to right, crimson , gold);">
<form method = "post">
    <input type="text" autocomplete="off" name = "id" placeholder="id">  </input>
    <input type="password" name = "pass" placeholder="pass">  </input>
    <br> </br>
    <input type="submit" id='submit' name='submit' value="SIGN UP">

<style>
     form{
            padding-left:500px;
            padding-top : 300px;
           }
    #submit{
          position: relative;
          left: 130px;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
          border-radius:30px;
          background-color:cornflowerblue;
          border-width:5px;
          border-color:deeppink;
          

    }  

    #buton{
        position: relative;
          left: 120px;
         border-radius:10px;
         background-image: linear-gradient(to left, yellow , green) ; 
     border-style:double;
     border-color:darkkhaki;
     border-width:4px;


    }
    p{
       position: relative;
       left: -200px;
       border: 1px solid #000000;
       padding-left:110px;
       font-size:large;
       font-style: oblique;
       font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    </style>
    </body>
<?php
    session_start();

    $baza_date=mysqli_connect('localhost','root','','baza_date');
    
    if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $id=$_POST['id'];
        $password=$_POST['pass'];
    }
if(!empty($id) && !empty($password)  ){
   $exist="SELECT * FROM users WHERE id='$id'";
   $valid =mysqli_query($baza_date,$exist);
  
  $querry="INSERT INTO users(id,Password) VALUES ('$id','$password')";
  if(mysqli_num_rows($valid)==0)
     {
        mysqli_query($baza_date,$querry);
         echo "<br> <p> FELICITARI, CONTUL A FOST CREAT! APASA PE BUTON PENTRU A TE INTOARCE SI PENTRU A TE LOGA. </p> </br>";
         echo " <input type='button' id='buton' name='buton' value='LOGIN PAGE' onclick='save()'>";
         echo "<script>
        function save(){ alert('VEI FI REDIRECTIONAT CATRE PAGINA INITIALA');
            window.open(
                'http://localhost:3000/work_php/proiect.php',
                '_blank' 
              );
        }
    </script>";
      
      
     }
else
echo "<script>alert('Username already taken') </script>";
}
else


echo"<br> Failed to sign up </br>";
}
    

?>


</html>