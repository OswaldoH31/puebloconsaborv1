<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Merienda:wght@700&family=Open+Sans+Condensed:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Merienda:wght@700&family=Open+Sans+Condensed:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Merienda:wght@700&family=Open+Sans+Condensed:wght@300&display=swap');    
        * {
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #0B0B3B;
            font-family: 'Lobster', cursive;
            font-weight:280;
        }
        #title {
            text-align:center;
            font-size:25px;
            margin-top:0;
            margin-bottom:-5px;
            position:relative;
            color:#0B0B3B;
            }
        #contenedor{
            width: 100%;
            overflow: hidden;
        }
        #caja1{
            width: 100%;
            height: 115px;
            background-color: transparent;
            
        }
        #caja2{
            width: 35%;
            height: 450px;
            background-color:#fff;
            float: left;
            overflow: hidden;
        }
        #caja3{
            width: 65%;
            height: 450px;
            float: right;
            background-color: #fff;
            overflow: hidden;
        }
        #caja3-1{
            width: 60%;
            height: 450px;
            float: left;
            background-color:#fff;
            overflow: hidden;
        }
        #caja3-2{
            width: 40%;
            height: 450px;
            float: right;
            background-color: #fff;
            overflow: hidden;
        }
        #caja4{
            width: 100%;
            height: 250px;
            background-color: transparent;
        }
        .container{
        right: 30px;
        overflow: hidden;
        }
        .message{
        font-family:'Lobster', cursive;
        font-size: 45px;
        color: #0b0b3b;
        font-weight: 500;
        top: 230px;
        left: 40px;
        overflow: hidden;
        }
        .message2{
        font-family: 'Merienda', cursive;
        font-size: 24px;
        color: #0b0b3b;
        font-weight: 300;
        width: 360px;
        top: 280px;
        left: 40px;
        overflow: hidden;
        }

        .neon{
        text-align: center;
        width: 300px;
        margin-top: 30px;
        margin-bottom: 10px;
        font-family: 'Varela Round', sans-serif;
        font-size: 90px;
        color: #5BE0B3;
        letter-spacing: 3px;
        text-shadow: 0 0 5px #fc4893;
        animation: flux 2s linear infinite;
        
        }
        .trash{
        width: 170px;
        height: 220px;
        background-color: #585F67;
        top: 300px;
        }
        .can{
        width: 190px;
        height: 30px;
        background-color: #6B737C;
        border-radius: 15px 15px 0 0;
        }
        .door-frame {
        height: 495px;
        width: 295px;
        border-radius: 90px 90px 0 0;
        background-color: #0b0b3b;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .door{
        height: 450px;
        width: 250px;
        border-radius: 70px 70px 0 0;
        background-color: #A0AEC0;
        }

        .eye{
        top: 15px;
        left: 25px;
        height: 5px;
        width: 15px;
        border-radius: 50%;
        background-color: #0b0b3b;
        animation: eye 7s ease-in-out infinite;
        position: absolute;
        }
        .eye2{
        left: 65px;
        }

        .window{
        height: 40px;
        width: 130px;
        background-color: #EEBA48;
        border-radius: 3px;
        margin: 80px auto;
        position: relative;
        }

        .leaf{
        height: 40px;
        width: 130px;
        background-color: #0B0B3B;
        border-radius: 3px;
        margin: 80px auto;
        animation: leaf 7s infinite;
        transform-origin: right;
        }

        .handle {
        height: 8px;
        width: 50px;
        border-radius: 4px;
        background-color: #EBF3FC;
        position: absolute;
        margin-top: 250px;
        margin-left: 30px;
        }

        .rectangle {
        height: 70px;
        width: 25px;
        background-color: #CBD8E6;
        border-radius: 4px;
        position: absolute;
        margin-top: 220px;
        margin-left: 20px;
        }

        @keyframes leaf {
        0% {
            transform: scaleX(1);
        }
        5% {
            transform: scaleX(0.2);
        } 
        70%{
            transform: scaleX(0.2);
        }
        75%{
            transform: scaleX(1);
        }
        100% {
            transform: scaleX(1);
        }
        }

        @keyframes eye {
        0% {
            opacity: 0;
            transform: translateX(0)
        }
        5% {
            opacity: 0;
        }
        15%{
            opacity: 1;
            transform: translateX(0)
        }
        20% {
            transform: translateX(15px)
        }
        35%{
            transform: translateX(15px)
        }
        40%{
            transform: translateX(-15px)
        }
        60%{
            transform: translateX(-15px)
        }
        65% {
            transform: translateX(0)
        }
        }

        @keyframes flux {
        0%,
        100% {
            text-shadow: 0 0 5px #fc4893, 0 0 15px #fc4893, 0 0 50px #fc4893, 0 0 50px #fc4893, 0 0 2px #fc4893, 2px 2px 3px #fc4893;
            color: #f83d8b;
        }
        50% {
            text-shadow: 0 0 3px #adfa87, 0 0 7px #EEBA48, 0 0 25px #FB5B34, 0 0 25px #FB5B34, 0 0 2px #EEBA48, 2px 2px 3px #adfa87;
            color: #fc4893;
        }
        }
    </style>
</head>
<body>
    <div id="contenedor">
        <div id="caja1">
        </div>  
        <div id="caja2">
            <br><br>
           <center>
           <div align="center">
            <img src="https://hidalgo.travel/wordpress/wp-content/uploads/2021/06/logotipo-pueblos-con-sabor.png" class="img-fluid" alt="imagen error 404"  width="250" height="300">
            </div>

           </center> 
           
           
        </div> 
        <div id="caja3">
            <div id="caja3-1">
               <br><br><br>
                <div class="message">Acceso No Autorizado
                </div><br><br><br>
                <div class="message2">Lo Siento No tiene Permiso Para Acceder a Esta Área.</div>
            </div>
            <div id="caja3-2">
                <div class="container">
                    <div class="neon">403</div>
                    <div class="door-frame">
                      <div class="door">
                        <div class="rectangle">
                      </div>
                        <div class="handle">
                          </div>
                        <div class="window">
                          <div class="eye">
                          </div>
                          <div class="eye eye2">
                          </div>
                          <div class="leaf">
                          </div> 
                        </div>
                      </div>  
                    </div>
                  </div>
            </div>
        </div> 
        <div id="caja4">
        </div> 
    </div>
</body>
</html>