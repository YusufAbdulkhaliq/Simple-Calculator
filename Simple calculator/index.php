<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>
    </head>
    <body>
         <form method="post">
            <input type="text" name="numb1">
            <select name="operator" id="">
               <option>None</option>
               <option>+</option>
               <option>-</option>
               <option>*</option>
               <option>/</option>
               <option>^2</option>
            </select>
            <input type="text" name="numb2">
            <button type="submit" name="submit" value="submit">Calculate</button>
         </form>

      <h1>Your Answer is:

        <?php 
                if (isset($_POST['submit'])) {
                    $result1 = $_POST['numb1'];
                    $result2 = $_POST['numb2'];
                    $operator = $_POST['operator'];
                    switch ($operator) {
                        case 'None':
                            echo "You need to select an operator";
                            break;
                        case 'Add':
                            echo $result1 + $result2;
                            break;
                        case 'Subtract':
                            echo $result1 - $result2;
                            break;
                        case 'Multiply':
                            echo $result1 * $result2;
                            break;
                        case 'Divide':
                            echo $result1 / $result2;
                            break;
                        case 'Square':
                            echo $result1 ** $result2;
                            break;
                    }
                }
          
         ?>
</h1>
    </body>