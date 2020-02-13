<style>
    body {
        margin: 0;
        padding: 0;
    }
    input[type = text], input[type = password], input[type = email] {
        border-radius: 0.3em;
        padding: 1em 0.5em;
        border: 1px solid grey;
    }
    input {
        padding: 0.3em 0.5em;
        margin: 1em 0;
    }
    
</style>

<body>
    <nav>
        <a href = 'home'>Home</a>
        <a href = 'login'>Login</a>

    </nav>
    <?= $this->appname ?>! Practically a Personal Assistant.

    <div id = 'page'>
        <?=$contents?>
    </div>

</body>
