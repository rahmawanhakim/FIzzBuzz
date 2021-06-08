<html>
 <head>
  <title>FizzBuzz Challenge</title>

  <style>
      body{
        background:#f0f0f0;
      }
    .fizzbuzzstyle {
        height: 40px;
        width: 80px;
        background-color: #129D08;
        color:#FFFF;
        border-radius: 50%;
        display: inline-block;
        padding:5px; 
        text-align: center;  
        margin:3px;
        font-weight: bold;
    }
    .fizzstyle{
        height: 30px;
        width: 30px;
        background-color: #FFFF;
        color:#1A19EE;
        border-radius: 50%;
        display: inline-block;
        padding:5px; 
        text-align: center;  
        border: 1px solid #1A19EE;
        margin:3px;
        font-weight: bold;
    }.buzzstyle{
        height: 30px;
        width: 30px;
        background-color: #FFFF;
        color:#DA0101;
        border-radius: 50%;
        display: inline-flex;
        padding:5px; 
        text-align: center;  
        border: 1px solid #DA0101;
        margin:3px;
        font-weight: bold;
    }.normalstyle{
        height: 30px;
        width: 30px;
        background-color: #FFFF;
        color:#6D6D6D;
        border-radius: 50%;
        display: inline-block;
        padding:5px; 
        text-align: center;  
        border: 1px solid #6D6D6D;
        margin:3px;
        font-weight: bold;
     
    }
   </style>

 </head>
 <body>
  <?php echo '<h1><p>FizzBuzz Generator - Challenge accepted by Rahmawan Hakim</p></h1>'; ?>
  <?php echo '<p>Input a number between 1 - 100 then click the "Generate" button </p>'; ?>
  <form method="post">
    <tr>
        <td>
            <input type="text" name="number"/>
            <input type="submit" name="submit" value="Generate"/>
        </td>
    </tr>
  </form>

  <?php 
    if(isset($_POST['submit'])) {
        $var = $_POST["number"];

        for ($x = 1; $x <= $var; $x++) {
            if($x%15===0){
                echo '<span class="fizzbuzzstyle""> FizzBuzz </span>';
            }else if($x%3===0){
                echo '<span class="fizzstyle""> Fizz </span>';

            }else if($x%5===0){
                echo '<span class="buzzstyle""> Buzz </span>';

            }else{
                echo '<span class="normalstyle""> '.$x. ' </span>' ;

            }
            
            
        }
    }
   ?>


 </body>
</html>