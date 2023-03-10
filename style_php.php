<?php
   header('Content-type:text/css; charset:UTF-8');
?>
body {
    background-image: url(./site_img.jpg);

}

#buton_jos{
       margin-left:700px; 
       background-color:#52D017;
       height : 50px;
       width : 80px;
       border-radius: 40%;
       border-color : indianred;
       border-width : 4px;

}



#fix{
      text-align: center;
      margin-left:500px;
      margin-right:500px;
     }
#obiect{
  
       position: relative;
       left:-600px;
       animation-iteration-count: infinite;
       animation-duration: 0.5s;
}
@keyframes anim_obj{
      from{
        
          left:1400px;
      }
      to{
          left:2500px;


      }


}
@keyframes anim2_obj{
     from{
                    
           left:2500px;
     }
     to{
         left:1400px;


     }

}

#ceas{
       
       position:relative;
       left:675px;
       font-size:x-large;
       color:rgba(246, 159, 33, 0.8);
       text-shadow: 6px 3px 2px rgb(251, 33, 159), 0 0 15px rgb(124, 26, 66), 0 0 5px rgb(21, 110, 10);
       padding:10px;

}

#time_js{
    font-size: x-large;
    position:absolute;
    left: 655px;
    color:darkred;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-image: linear-gradient(to right,red,aqua,coral, gold);
    padding-right:50px;
    padding-left:50px;
} 

#score{
     font-size: x-large;
     color: rgba(11, 4, 9, 0.701);
     text-shadow: 4px 2px 3px rgb(251, 0, 0), 0 0 25px rgb(16, 26, 66), 0 0 5px rgb(214, 110, 110);
     position: relative;
     left:1250px;
    
}
#jos{

     background-color:#FE50D1;
     border-radius: 30%;
   border-color: green;
     border-width : 6px;
     opacity:0.6;
}
#jos:hover{
    
    opacity:1;
    color : white;
    
}
#img_procesata{
   
   border-radius: 20px;
   margin-left: 640px;
   border: 5px;
   border-style: outset;
   border-color:  #FF00E4 #ff0000 #75F323 ;
   position: relative;
   height: 100px;
   width : 85px;
   left: -600px;
   top : -400px;


}
#img_procesata:hover{
     
    animation-duration:3s;
    animation-iteration-count: infinite;
    animation-name:rotate_img;

}

@keyframes rotate_img{

    from{

        transform:rotate(0deg);
    }
    to{

        transform:rotate(360deg);
    }
}
#cr7{
    opacity: 0.3;
    
    width: 200px;
    height: 160px;
    position: relative;
 
    animation-duration: 4s;
    animation-iteration-count: infinite;

}
#text_box{
    position: absolute;
    box-shadow: 25px 10px 15px red;
   font-family: fantasy;
   
   font-size: large;
   left: 44% ;
}
@keyframes cr7_anim {
       from{
           left: -35px;
           
       }
       to{
           left: 10px;
         
       }
}
@keyframes cr7_anim2 {
  
       from{
        -webkit-animation: animation 2s ease-in-out;
     

           top:30px;
        
       } 
       to{
     
       top:-40px;
}
}

.buton_invizibil{
      font-size: medium;
      background-color: crimson;
      border-radius: 15px;
      border-color:darkviolet;
      border-width: 7px;
      position: absolute;
      top:720px; 
      left : 720px;
}
.the_input{
     text-align: center;
     color: chartreuse;
     text-decoration: underline;
     
}
#par2{
     font-size: larger;
     text-decoration: solid;
     text-shadow: 10px;
     color: gold;
     font-style: italic;
     position: absolute;
     left: 60px;
}
h2{
    
    background: linear-gradient(90deg, rgba(255,0,244,.8), rgba(255,0,0,0) 70.71%),
    linear-gradient(127deg, rgb(43, 255, 223), rgba(0,255,0,0) 70.71%),
    linear-gradient(336deg, rgba(195, 104, 20, 0.8), rgba(0, 0, 255, 0.156) 70.71%);
}

#square{
       animation-name: anim_sqr; 
       height: 20px;
          width: 20px;
          background-color: #555;
         position: absolute;
         animation-duration: 3s;
         animation-iteration-count: infinite;
         border-radius: 200px;
         left : 170px;
         top : 100px;
         
        
}
@keyframes anim_sqr{

    
 70%{transform : translateX(1300px);}  
   
25%  {background-color:darkkhaki}
50%  {background-color:coral }
75%  {background-color :orchid}
100% {background-color:red}
}




@keyframes animatia {
    25%  {color:yellow; left:200px; top:0px;}
    50%  {color:blue; left:200px; top:200px;}
    75%  {olor:green; left:0px; top:200px;}
    100% {color:red; left:0px; top:0px;}
    
}




h1{
    
    font-weight: bold;
    font-size: x-large;
    color: darkorange;
    animation-name: animatia;
    animation-duration:6s;
    animation-direction: alternate;
    animation-iteration-count: infinite;

}

.ala_mare{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    text-align: center;
    text-rendering: optimizeSpeed;
    font-size: larger;
    
   background: rgba(255, 251,0,0.6);
   backdrop-filter:blur (10px) ;
   color:darkred;
   animation-name:animatia_div;
   animation-duration: 2s;
   animation-iteration-count: infinite; 
  
}

P{
    font-size: large;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    text-align: center;
 color:darkslategray;
      background-color: chartreuse;

}
.button_mare{
        text-align: center;
        border-radius: 10cm;
        border-width: 5px;
        background-color :aqua;
        margin-top: 5cm;
        padding-left: 5px;
        padding-top: 10px;
        border-color: orange;
        margin-block-end: 15px;
}