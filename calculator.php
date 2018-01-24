<!DOCTYPE html>
<html>
    <head>
        
        <title>CALCULATOR</title>
    </head>
    <body>
        <form>
            <input type="text" name="num1" placehoder="number 1">
            <input type="text" name="num2" placehoder="number 2">
            <select name="operator">
                <option>None</option>
                <option>Add</option>
                <option>Subtract</option>
                <option>Multiply</option>
                <option>Divide</option>
            </select>
            <br>
            <button type="submit" name="submit" value="submit">CALCULATE</button>

        </form>
        <P>THE ANSWER IS:</P>
        <?php
            if(isset($_GET['submit'])){
                $result1 = $_GET['num1'];
                $result2 = $_GET['num2'];
                $operator = $_GET['operator'];
                switch($operator){
                    case'None':
                    echo "Error. No operation chosen";
                        break;

                    case'Add':
                    echo $result1 + $result2;
                        break;

                    case'None':
                    echo $result1 - $result2;
                        break;

                    case'None':
                    echo $result1 * $result2;
                        break;

                    case'None':
                    echo $result1 / $result2;
                        break;
                }
            }
        ?>
    </body>
</html>