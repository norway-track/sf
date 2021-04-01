<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 8 </title>
    <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
	
	 <div class="header">     
               <?php include 'logo.php' ?>         
               <?php include 'nav.inc.php' ?>	   
        </div>  
    
    <div class="container">

            
     
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                

                <div class="aboutme">
	                <h1>Обо мне</h1>
                    <p> Меня зовут 
                    <?php echo $fname, ' ', $sname . '<br>'; 
                          echo 'мой город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>

                </div>
                
                <div class="knowledge">
                                   
                    <?php  
	                    
	                    include 'knowledge.php';   ?>                  
	                    <h1>О вас :)</h1>
                    <p> Ваш IP
                    <?php echo get_ip(). '<br>';  get_ua() ?>  
	                    
	     
            </div>
             
          
            
         

        
        </div>

          
    </div>

  <?php include 'footer.php' ?>

</body>
</html>