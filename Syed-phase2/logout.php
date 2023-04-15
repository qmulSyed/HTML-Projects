<!DOCTYPE html>
    <html>
        <?php
                
            session_destroy(); // End  session upon logout
            header("Location: Home.html");

        ?>
    </html>