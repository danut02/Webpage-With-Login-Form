<html>
   <div>
   <div class="decor"> </div>
   <body style="background-image: linear-gradient(to top,gray,aqua,peru, gold);">
        <form method = "post" >
             
             <input type="text" autocomplete="off"  name = "id" placeholder="id">  </input>
             <input type="password" name = "pass" placeholder="pass">  </input>
            <br> <input type="submit" id='submit1'  name='submit' value="LOGIN"> </br>
             <br> </br>
             <span style="padding-left:50px"> Nu ai cont? Creeaza unul chiar acum.</span>
             <br> </br>
             <input type="submit" name='submit2' id='submit2' value="SIGN UP">

           
    <style>
      .decor{
        border-radius: 80%;
         position:absolute;
        top:80px;
        left:600px;
         width: 180px;
         height: 140px;
         animation:anim1 4s linear infinite;
         
         border-top: 5px solid chartreuse;
      }
       span{
           font-size: larger;
           color:crimson;
           font-family: monospace;
       }
       @keyframes anim1 {
          0%{
              transform: rotate(360deg);
              width : 30px;
              height : 20px;
          }
          100%{
            transform: rotate(0deg);
            width:180px;
            height : 140px;

          }
       }
           form{
              
            padding-left:500px;
            padding-top : 300px;
           }
          #p1{
             padding-left: 590px;
             color :darkred;
             font-size: x-large;
             box-shadow: 55px 15px 20px darkred;
             font-family: fantasy;
          }
          #p2{
            padding-left: 590px;
            color:green;
             font-size: x-large;
             box-shadow: 55px 15px 20px green;
             font-family: fantasy;
          

          }
          #submit1{
             top:15px;
             position: relative;
             left: 140px;
            
               font-size: larger;
               background-image: linear-gradient(to top,darkred,peru, white);
               border-radius: 25px;
               border-top-width: 3px;
               border-bottom-width: 8px;
               border-color:darkviolet;

          }
          #submit2{
           position: relative;
            left: 140px;
            color:darkslategray;
            font-size: medium;
            background-image: linear-gradient(to right,peru, white);
            border-radius: 15px;
            border-width: 3px;
            border-color:black;
          }
            </style>
</input>
        </form>
     </div>
   </body>
<?php 


session_start();
  
 
 
  $baza_date=mysqli_connect('localhost','root','','baza_date');

 

       if($_SERVER['REQUEST_METHOD']=='POST'){
          $id=$_POST['id'];
          
          $password=$_POST['pass'];}
  // if(!empty($id) && !empty($password))
  //  $querry="insert into users (id,Password) values ('$id','$password')";
   // mysqli_query($baza_date,$querry);

    if(isset($_POST['submit']))
    
    {
      
    $querry_2="SELECT * from users where  id='$id' AND Password='$password'";
    $result_2=mysqli_query($baza_date,$querry_2);
   // $row=mysqli_fetch_array($result_2);
   // if($row['id']==$id && $row['Password']==$password)
     if( $result_2 && mysqli_num_rows($result_2)>0)  { 
       echo "<br> <p id='p2'> SUCCESFULLY LOGGED IN! </p>  </br>";
      echo"<script>
      alert('ID-ul tau este $id');
      window.open(
         'http://localhost:3000/work_php/site.php',
         '_blank' 
       );
        </script>";

      
     
    }
   else
       echo "<p id='p1'> WRONG ID OR PASSWORD </p>"; 
    
    }
   
   if(isset($_POST['submit2'])){
    
      header('Location: http://localhost:3000/work_php/sign_up.php');
       
   }


?>



</html>