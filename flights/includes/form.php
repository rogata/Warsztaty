<!doctype html>
<html>
    <body>
        <form action="pdf.php" method="post">
            <select name="start">
                <option>Departure airport:</option>
                <?php 
                    for($i=0; $i<count($airports); $i++){
                        echo '<option>'.$airports[$i]['name'].'</option>';
                    }
                ?>
            </select><br>
            <select name="end">
                <option>Arrival airport:</option>
                <?php 
                    for($i=0; $i<count($airports); $i++){
                        echo '<option>'.$airports[$i]['name'].'</option>';
                    }
                ?>
            </select><br>
            <input type="datetime-local" name="date" value="" placeholder="DD-MM-YYYY, hh:mm:ss"><br>
            <input type="number" name="length" min="0" step="1" placeholder="Flight length"><br>
            <input type="number" name="price" min="0" step="0.01" placeholder="Flight price"><br>
            <button type="submit">Buy ticket</button>
        </form>
    </body>
</html>


