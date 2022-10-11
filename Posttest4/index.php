<?php
    session_start();
    
    if(isset($_SESSION['user'])==TRUE) {
        session_destroy();
    } else {
        ?>
        <div class="login">
            <center>
                <h1>Login</h1>
                <form action="./checklog.php" method="post">
                    <input type="user" name="user" placeholder="Email" alt="email" required="required"/><br/><br>
                    <input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/>
                    <input type="submit" name="submit" value="Submit" alt="submit"/>
                </form><br/>
            </center>
        </div>
<?php } ?>
