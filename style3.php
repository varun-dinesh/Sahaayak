body{

padding : ;
background-color: #efefef;
margin: ;

}

.head{
font-family: 'Times New Roman', Times, serif;
font-size : 3.5em;
color:  #009688;
text-align: center;
width : 650px;
position : absolute;
left : 545px;

padding : 12px;
border-radius: 17px;
}

.out_sect{
background-color: ;
padding : 10px;
}

.query{
background-color:  ;
font-size : 30px;
line-height : 50px;
padding : 5px 10px;
font-family: 'Shadows Into bold', cursive;
text-align : left;
padding-left : 20px; 
position:absolute;
  top: ;
  right: ;
  left: ; 
  height: ;
  width:;
  border : ;
  border-radius: 20px;
  width : 500px;
  color:   #00b3a1;
  
}

.in-sect{
    padding: 10px;
    width : 1000px;
   
     margin: auto;
     display: block;
    left: 280px;
    z-index : ;
}
.ans{
    font-size: 25px;
position: absolute;
left : 320px;
display : inline;
color :  black;
}


.services{
    background-color : #fff;
    position:relative;
    left: 320px;
    width: 600px;
    font-family: 'Shadows Into bold', cursive;
    font-size: 20px;
    padding-left : 10px ;
    paddin-bottom :10px;
    padding-right:10px;
    margin-top : -10px;
    border-radius : 20px;
}


.sign{
    position : absolute;
    left : -10px;
    display : inline;
}


.ans_box{
    width: 600px;
    background-color : #fff;
    padding : 12px 10px ;
    height:300px;
    border-radius: 7px;
    
}


.img_display{
    
    height:200px;
    width:200px;
    border-radius:100px;
    postion:absolute;
    left:800px;
}

.sidenav {
    height: 100%; 
    width: 0; 
    position: fixed; 
    z-index: 1; 
    top: 0; 
    right: 0;
    background-color: white; 
    overflow-x: hidden; 
    padding-top: 50px; 
    transition: 0.5s; 
  }
  

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: ##008073;
    display: block;
    transition: 0.3s;
  }
  

.sidenav a:hover {
    color: #3719df;
  }
  

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
  }

.sid{
      margin-left: 1400px;
      margin-top: 20px;
      padding-top: 30px;
      box-sizing: border-box;
      position: absolute;
      cursor: pointer;
  }


  #footer{
    padding: 100px 100px 20px;
    background: #efefef;
  /*background: black;*/
    font-family: Poppins;
    position: relative;
   color: white;
}
.footer-row{
    width: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.footer-left,.footer-right{
    flex-basis: 45%;
    padding: 10px;
    margin-bottom: 20px;
}
.footer-right{
    text-align: right;
}
.footer-row h1{
    margin: 10px 0;
}
.footer-row p{
    line-height: 35px;
}

.footer-left .fa,.footer-right .fa{
    font-size: 20px;
    color: #dc3545;
    margin: 10px

}
.footer-img{
    max-width: 370px;
    opacity: 0.1;
    position: absolute;
    left: 50%;
    top: 35%;
    transform: translate(-50%,-50%);
}
.social-links{
    text-align: center;

}
.social-links .fa{
    height: 40px;
    width: 40px;
    font-size: 20px;
    line-height: 40px;
    border: 1px solid #dc3545;
    margin: 40px 5px 0;
    color: #dc3545;
    transition: 0.5s;
}
.social-links .fa:hover{
    background: white;
    color: black;
    transform: translateY(-7px);
}
.social-links p{
    font-size: 12px;
    margin-top: 20px;
}
@media screen and (max-width: 770px){
    .footer-left,.footer-right{
        flex-basis: 100%;
        font-size: 14px;
        
    }
    .footer-img{
        top: 25%;
    }
}


.title-text{
    font-size: 40px;
    text-align: center;
    padding-bottom: 70px;
    font-family: Poppins;
}
.title-text p{
    margin: auto;
    
    color: #009688;
    font-weight: bold;
    position: relative;
    z-index: 1;
    display: inline-block;

}
.title-text p::after{
    content: '';
    width: 50px;
    height: 35px;
    background: linear-gradient(#019587,#fff);
    position: absolute;
    top: -20px;
    left: 0;
    z-index: -1; 
    transform: rotate(10deg);
    border-top-left-radius: 35px;
    border-bottom-right-radius: 35px;
}
.title-text h1{
    font-size: 50px;
}