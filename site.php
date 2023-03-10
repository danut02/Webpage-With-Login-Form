<!DOCTYPE html>
<html>

<head> 

 
     <link rel="stylesheet" type="text/css" href="style_php.php"/> 
</head>
<br> </br>
<img src="cr7_1.png" id="cr7"></image>
       <div id="square"> </div>   
       <br> </br>    
       
<h1 id="titlu_mare">
     BINE AI VENIT !
</h1>

<body>

  <h3 id="score">  </h3>
    

        <p>
             Contorizare apasari de buton :
        
        </p>
        <button id='jos'> Informatii </button>
  <br> </br>

    <div id="text" class="ala_mare">
        AICI SE SCRIE
        
   </div>
 
   <div class="ala_mare">
    <button class="button_mare" id="butonu">
            Apasa butonul meu
    </button>
   
    <button class="button_mare" id="buton2">
            Reset

    </button>
   </div>

<style>
   
    ul{  
      
      
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      position: relative;
      left:120px;
      color:goldenrod;
      box-shadow: 6px 10px 27px 25px #ffcc99;
      margin-right: 450px;
      padding-left: 400px;
      margin-left: 200px;
      
    }

  </style>

   
  

  <form style=" width: 100vw; margin-left : 45vw;"/>       
 <input type="text" name="text_box" id="text_box" placeholder="Cum te numesti?" onblur="func_text()">
 

     </input>
    
    <br>  <input type="hidden" onclick="func_text()">

   

   <input type="submit" id="submit" class="buton_invizibil" onclick="return false">
   
          </input> </br>  
     </form>
     <br> </br>

     <br> </br>

 <form style=" width: 100vw; margin-left : 45vw;">
  <br> </br>
 <input type="file" name="poza" class="the_input" onchange="previewFile()"><br>
  ALEGE O FOTOGRAFIE DE PROFIL 
 </br>
 </input>  

 </form>
      <img id = "img_procesata" src="" height="200">
     </img>
</body>
<style
>

</style>
 


<img id="obiect" src="images.png" >  </img>
 
<br> </br>
<span id="ceas"> Cat e ceasul? </span>
<br> </br>



<h3 id='fix'>  </h3>


<div id="time_js"> 

<?php
     if(isset($_POST["poza"]))
{
    $id=$_POST['text_box'];
    $orig_file=$FILES[$id]["name"];
    $target_dir='test_img/';
    $file=$target_dir.basename($FILES["text_box"]["name"]);
    move_uploaded_file($orig_file,$file);
  exit();
}

?>

<script>


let ora_fixa=document.getElementById('fix');

ora_fixa.style.color='#5FF7B4';


ora_fixa.style.backgroundColor='#BE1B51';
setInterval(function() {

    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    var currentSeconds = currentTime.getSeconds ( );
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
    if(currentMinutes==0)
       ora_fixa.innerHTML="E fix";
       
     else
        ora_fixa.innerHTML="";  
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    document.getElementById("time_js").innerHTML = currentTimeString;
}, 1000);

</script>
</div>
<br> </br> 

<br> </br><br> </br><br> </br>
<ul id='ul'>  Utilizatori noi 
<br> </br>


<?php 
 

  
  
  $baza_date=mysqli_connect('localhost','root','','baza_date');
  $id='SELECT id from users';
  $res=mysqli_query($baza_date,$id);

  $lista=array("");
  while($row = $res->fetch_assoc()){

  array_push($lista,$row["id"]);
    
  }
  for($i=count($lista)-1;$i>=count($lista)-5;$i--)
  
      
               echo "<br> <li id='li'> $lista[$i] </li> </br>";
             
  
  mysqli_free_result($res);
  mysqli_close($baza_date);
  
  ?>
</ul>

     <br> </br> 
     <br> </br> 
       
       <br> </br> <br> </br> 
       
       
     <br> </br>
     <div id="desc"> Descarca Dangerous Corners chiar acum! </div>
     <br> </br>
     <a href="dangerous_corners.rar" download> <button id="download_button"> CLICK AICI </button>
     
     </a>

     <style>
      #desc{
             color:chocolate;
             position: relative;
             left: 590px;
             font-family:cursive;
             font-weight:900;
      }
      
      #download_button{
    animation-name : download;
    position:relative;
    width : 300px;
    height: 40px;
    left: 600px;
    background-color : purple;
    border-radius : 15px;
    border-width:6px;
    border-color:indianred;
    animation-iteration-count: infinite;
    animation-duration:0.6s;
    
}
#download_button:hover{
    border-color :chartreuse;
    border-width: 10px;
    animation-duration: 0.2s;

}
#download_button:active{
        height : 60px;
        width: 350px;
        left : 600px;
}

@keyframes download {
    25%  {background-color:forestgreen}
50%  {background-color:coral }
75%  {background-color :crimson}
100% {background-color:burlywood}


}


</style>
     <br> </br>  <br> </br>
     <br> </br>  <br> </br>
     <br> </br>

    

<h2 align="center">
        INFORMATII UTILE:
</h2>
<script >
       

         let score=document.getElementById("score");       
         var a=document.getElementById("butonu");
         var b=document.getElementById("text");
         var reset = document.querySelector("#buton2");
         var square=document.getElementById("square");
         var cr7=document.getElementById("cr7");
         var submit=document.getElementById("submit");
         var obiect_joc=document.getElementById("obiect");
         var titlu=document.getElementById("titlu_mare");
      
         function previewFile() {
            var preview = document.getElementById('img_procesata');
         
            
            var file    = document.querySelector('input[type=file]').files[0];
            var reader  = new FileReader();
          
            reader.onloadend = function () {
              preview.src = reader.result;
            }
            
            
            if (file) {
              alert("Fotografie actualizata");
              reader.readAsDataURL(file);
            } else {
              preview.src = "";
            }
          }
          
         let done=0;
          
          function func_text(){
                    var text_box=document.getElementById('text_box').value;
                    console.log(text_box);
                    for(let i=0;i<text_box.length;i++)
                    if(text_box=="" || text_box==" "){
                     titlu.innerHTML= "BINE AI VENIT !";}
                    for(let i=0;i<text_box.length;i++)  {
                   if(text_box[i]>='a' && text_box[i]<='z' || text_box[i]>='A' && text_box[i]<='Z' 
                   || text_box[i] ==' '||text_box[i]=='_')
                    titlu.innerHTML= "BINE AI VENIT, " + text_box + "!"; 
                    
                    else{
                       alert("Nu folosi caractere speciale sau cifre!");
                       titlu.innerHTML= "BINE AI VENIT !";}
                    }
                    return text_box;
          }
         
        
          let k=0;
         let cnt_btn=2.0;
         let steps=100;
         let dim1=20;
         a.onclick=function(){
         
           
         
           if(func_text()=="" || func_text()==" "){
               alert("Te rog sa iti scrii numele !");  
               b.innerHTML=0; }
            else { 
             var dim_ball=dim1+'px';  
              square.style.width=dim_ball;
              square.style.height=dim_ball;
              dim1+=5;
              if((k+1)%2!=0){
                   if(k==4)
                   cnt_btn-=0.5;
                   if(k==12)
                   cnt_btn-=0.5;
                   if(k==18)
                   cnt_btn-=0.6;
                   if(k==24)
                   cnt_btn-=0.3;
              cr7.style.animation="cr7_anim " + cnt_btn.toString()+ "s steps(" + steps.toString() +") infinite";
              steps+=10;
             
              
           }
              else{
                cr7.style.animation="cr7_anim2 " + cnt_btn.toString()+ "s steps(" + steps.toString() +") infinite";
                steps+=10;
               }    
              
             cr7.style.opacity='1';
          
             b.innerHTML=k+1;
             a.innerHTML="Pressed !"; 
             k++;
             if(k%2===0){
               b.style.background='coral';
               document.body.style.background=null;
             }
             else{
                b.style.background='rosybrown';
                document.body.style.textAlign=top;
                
             }
             if(k>=1)
                a.style.background='violet';
             if(k>=20){
                a.style.background='red';
                a.innerHTML='Warning';
             }
             if(k==25){
        let alert_nivel=
      'Felicitari. Ai terminat primul nivel, acum du-te in partea dreapta a paginii web si foloseste W,A,S,D pentru miscare ' +
       'si tasta E pentru a elimina fundalul caracterului ';
        alert(alert_nivel);
               
             
              done=1;  
             b.innerHTML='DONE';
             a.innerHTML='Done';
             a.style.background='yellow';
          
            
             a.remove();
             window.scroll(1230,550);

             window.addEventListener('scroll',(event)=> {
            window.scroll(1230,550);

      })
        
             score.innerHTML= "SCOR MAXIM!";
             
            }
             if(k===0){
               cnt_btn=2.0;
               steps=100;
               
             a.style.visibility='visible';
             }
         
            }
          }
            let movement=15;
          
          window.addEventListener("load",(event)=>{
              
               obiect_joc.style.position='absolute'; 
                 obiect_joc.style.top='700px';
                obiect_joc.style.left='-300px';
               
              });
                  
      
         window.addEventListener("keyup",(event) => {
          
                 switch(event.key){
                  
                   case 'w': if(done==1){ obiect_joc.style.top = parseInt(obiect_joc.style.top)-movement + 'px';
                   obiect_joc.style.backgroundColor='limegreen';}

                   break;
                   case 'ArrowUp': obiect_joc.style.top = parseInt(obiect_joc.style.top)-movement + 'px';
                   break;
                   case 's':if(done==1){ obiect_joc.style.top = parseInt(obiect_joc.style.top)+movement + 'px';
                            obiect_joc.style.backgroundColor='yellow';
                            obiect_joc.style.margin='80px';
                          }
                   break;
                   case 'ArrowDown': obiect_joc.style.top = parseInt(obiect_joc.style.top)+movement + 'px';
                   break;
                   case 'a': if(done==1) obiect_joc.style.animation="anim2_obj 0.6s steps(20) infinite";
                          
                   break;
                   case 'ArrowLeft': obiect_joc.style.left = parseInt(obiect_joc.style.left)-movement + 'px';
                   break;
                     case 'd':  if(done==1) obiect_joc.style.animation="anim_obj 0.6s steps(20) infinite";
                                
                   break;
                   case 'ArrowRight': obiect_joc.style.left = parseInt(obiect_joc.style.left)+movement + 'px';
                   break;
                   case 'e':
                        obiect_joc.style.backgroundColor='';
                   break;

                 }
             
                
            
             }); 
         
         
           
       
         
         reset.onclick=function(){
               
               k=0;
               cnt_btn=2.0;
               cr7.style.opacity='0.5';
               cr7.style.animation="";
               a.style.background='aqua';
               b.innerHTML=k;
                 b.style.background='violet';
                 document.body.style.background=null;
                 a.innerHTML="Apasa butonul meu";
                 dim1=20;
                 var dim_ball=dim1+'px';  
                 square.style.width=dim_ball;
                 square.style.height=dim_ball;
             }

             let jos = document.getElementById('jos');
jos.onclick=()=>{
 
  paragraph.style.display="none";

       window.scroll(0,1950);

     
       

};
   
        
                 </script>

         
<button id="buton_jos" onclick="myFunc()" > Arata </button>
<div id="par2">
    
   
    
            </div>
<script>
  let buton_jos = document.getElementById("buton_jos");
   let paragraph = document.getElementById("par2");
   paragraph.style.display='none';
   function myFunc(){
    
     paragraph.innerHTML="  Aceasta pagina web a fost creata in mod independent. <br> Site-ul a fost creat in "+
   "  mod special a testa sistemul de login/sing-up prin intermediul bazei de date din MySQL dar si pentru alte activitati. </br> " +
    "<br> Pentru mai multe detalii va rog sa ma contactati.</br> " +
     "<br> O zi buna iti doresc !! </br>"
     + "<br> </br> <br> </br>";
        if(paragraph.style.display == "none"){
          paragraph.style.display="block";
          buton_jos.innerHTML="Ascunde";}
       else{
          paragraph.style.display="none";   
          buton_jos.innerHTML="Arata";}
  }   


    </script>

</html>