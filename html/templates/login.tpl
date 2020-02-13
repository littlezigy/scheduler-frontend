<body>
    <div id = 'page'>

    <p id = 'title'>Login to <?= $appname ?></p>

    <form action = '/login' method = 'POST'>
        <label>
            Username or Email Address<input type = 'text' placeholder = "Username or Email" name = 'username'>
        </label>

        <label>
            Password <input type = 'password' placeholder = 'Password' name = 'password'>
        </label>

        <label><input type = 'checkbox' value = 'rememberme' name = 'rememberme'>   Remember Me</label>

        <input type = 'submit' value = 'Login'>
    </form>

    <a href = '/home'>Home</a>

    </div>
</body>

<style>
body {
    padding-top: 4vh;
    background: #e3e3e3 !important;
}
form {
    border: 1px solid grey;
    min-width: 320px;
    width: fit-content;
    margin: auto;
    padding: 2em;
    background: white; 
}
label, input[type=text], input[type=password] {
    display: block;
}
input[type=submit] {
    text-align: 0;
    margin: auto;
    background: powderblue;
    border: 1px solid grey;
    border-radius: 5px;
    padding: 1em;
    display: block;
}
input[type=checkbox] {
    width: 2em;
    height: 2em;
}
input[type = text], input[type = password], input[type = email] {
    border-radius: 0.3em;
    padding: 1em 0.5em;
    border: 1px solid grey;
    margin: 0 6px 16px 0;
    width: 100%;
}
input {
    padding: 0.3em 0.5em;
    margin: 1em 0;
}
p#title {
    font-size: 3em;
    text-align: center;
}
</style>

