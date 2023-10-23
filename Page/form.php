

    <form action="" method="post">
        <input type="email" placeholder="vardas" name="name">
        <input type="text" placeholder="comment" name="comment">
        <input type="password" placeholder="password" name="password">
        <button type="submit"> Siusti</button>
    </form>

    <?php
    if (isset($_POST['name']) && isset($_POST['password'])) {
        
            if ($_POST['name'] == 'jonasjonas@gmail.com' && $_POST['password'] == 'admin') {
        echo 'Prisijungei';
      } else {
        echo 'Blogi prisijungimo duomenys!' . "<br>";
      }
      echo $_POST['comment'];
    }

    
    ?>
