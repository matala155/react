class HelloWorld extends React.Component {
  render() {
    // Vykreslení komponenty
    // Vykreslení vrátí element <h1> s textem "Hello World"
    return React.createElement("h1", null, "Hello World!");
  }
}

// Vykreslení instance komponenty do HTML struktury
ReactDOM.render(
  React.createElement(HelloWorld), // Vytvoření komponenty
  document.getElementById("root") // Připojení do kořene aplikace
);
