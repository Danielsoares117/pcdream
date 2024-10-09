<html>
<html lang="en">  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Razer Blade 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">  
    <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #1a1a1a;
      color: #fff;
    }

    header {
      background-color: #000;
      padding: 10px;
      text-align: center;
    }
    .image-container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
      padding: 20px;
    }

    .pc {
      position: relative;
      max-width: 300px; /* Largura máxima da descrição */
      margin: 20px;
    }

    .image-container img {
      max-width: 95%;
      height: auto;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
    .options {

        justify-content: space-around;
        flex-wrap: wrap;
        border-radius: 25px;
        background: #4d4d4d;
        padding: 20px;
        width: 400px;
        height: 50px;
        
    }



  </style>
</head>
<body>
<div class="container-fluid">
    <form action="">
        <div class="row">

            <!--Lado Direito -->
            
            <div class="col-9">
                <div><h1>Razer Blade 14</h1></div>
                <br><br>
                <div>
                    <h3>Choose color:</h3>
                </div>
                <div class="options">

                    <input type="radio" id="Mercury" name="colorpc" value="Mercury">
                    <label for="Mercury">Mercury</label>
                    
                    <input type="radio" id="Black" name="colorpc" value="Black">
                    <label for="Black">Black</label>
                    
                </div>
                <br>
                <div>
                    <h3>Choose graphics:</h3>
                </div>
                <div class="options">

                    <input type="radio" id="4060" name="graphicspc" value="4060">
                    <label for="4060">GeForce RTX 4060</label>
                    
                    <input type="radio" id="4070" name="graphicspc" value="4070">
                    <label for="4070">GeForce RTX 4070</label>
                    
                </div>
                <br>
                <div>
                    <h3>Choose operative system:</h3>
                </div>
                <div class="options">

                    <input type="radio" id="instaled" name="os" value="instaled">
                    <label for="instaled">Instaled</label>
                    
                    <input type="radio" id="notinstaled" name="os" value="notinstaled">
                    <label for="notinstaled">Not instaled</label>
                    
                </div>
                <br>
                <div>
                    <h3>Choose warranty:</h3>
                </div>
                <div class="options">

                    <input type="radio" id="no" name="warranty" value="no">
                    <label for="no">No warranty</label>
                    
                    <input type="radio" id="yes" name="warranty" value="yes">
                    <label for="yes">3 years warranty</label>
                    
                </div>
                <br>
            </div>


            <?php

    $preco = 0;



    //-----------------preço do pc-----------------

    $preco = $preco + 2199;

    //-----------------graficas-----------------

    $GraficasVal = $_POST["graphicspc"];


    if($GraficasVal == "4060")
    {
        //adicionar preço da grafica 1
        $preco = $preco + 0;
    }   
    else if ($GraficasVal == "4070")
    {
        //adicionar preço da grafica 2
        $preco = $preco + 350;
    }


    //-------------sistema-operativo-------------

    $OSVal = $_POST["os"];


    if($OSVa == "instaled")
    {
        //adicionar preço da grafica 1
        $preco = $preco + 100;
    }   
    else if ($OSVa == "notinstaled")
    {
        //adicionar preço da grafica 2
        $preco = $preco + 0;
    }


    //-----------------garantia-----------------
    
    $GarantiaVal = $_POST["warranty"];


    if($GarantiaVal == "no")
    {
        //adicionar preço da grafica 1
        $preco = $preco + 0;
    }   
    else if ($GarantiaVal == "yes")
    {
        //adicionar preço da grafica 2
        $preco = $preco + 50;
    }



?>
            <!--Lado Esquerdo -->

            <div class="col-3">
                <div class="image-container">
                    <div class="pc">
                        <img src="https://assets2.razerzone.com/images/pnx.assets/df55b8678b4404b48cb85675772298c5/thumb-blade14.webp" width="100%">
                    </div>
                </div>
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>
    <br><hr><br>
    <div>
        <h3>Total price: <?php echo $preco;?></h3>
    </div>
    <br>
    <div>
      
    </div>
</div>








<?php
?>

</body>
</html>