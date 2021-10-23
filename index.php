<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>zkouška2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

</head>

<body>
    <div id="root"></div>
    <script type="text/babel">
        // Definice React funkce
        function HelloWorld() {
            return <h1>Hello, world!</h1>;
    }

        // Vykreslení instance komponenty do HTML struktury
        ReactDOM.render(
            <HelloWorld />, // Vytvoření komponenty
            document.getElementById('root')  // Připojení do kořene aplikace
        );
    </script>
    <script src="js.js" async defer></script>
</body>

</html>