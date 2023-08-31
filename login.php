<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="section">
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <img src="images/Demon-Slayer-Emblem.png" alt="" width="80%" height="80%">
                    <h2>LOGIN</h2>
                    <div class="underline-title"></div>
                </div>
                <form method="post" class="form" action="login_process.php">
                    <label for="user-username" style="padding-top:13px">
                        &nbsp;username
                    </label>
                    <input id="user-username" class="form-content" type="username" name="username" autocomplete="on"required>
                    <div class="form-border"></div>

                    <label for="user-password" style="padding-top: 22px;">&nbsp;Password</label>
                    <input id="user-password" class="form-content" type="password" name="password" required>
                    <div class="form-border"></div>
                    <input id="submit-btn" type="submit" name="submit" value="LOGIN">
                </form>
            </div>
        </div>
        <div class="bg-video">
            <video src="images/Abstract Wave Background Video, Blue Background Video Loop | Free Stock Footage.mp4" autoplay loop muted width="100%"></video>
        </div>
    </div>
</body>
</html>