<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["fname"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["lname"]))  
      {  
           $error = "<label class='text-danger'>Enter Password</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'un'               =>     $_POST['un'],  
                     'pass'          =>     $_POST["pass"],
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Submit Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>LOGIN</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">                
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> 
                     <fieldset>
                     <legend><h4>LOGIN</h4></legend>
                     <label>User Name</label>
                     <input type="text" name = "un" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />

                     <input type="submit" name="submit" value="Submit" class="btn btn-info" />                     
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>
                    
    		
		</fieldset>
        </body>
</html>