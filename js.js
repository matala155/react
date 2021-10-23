function HelloWorld() {
  return <h1>Hello, world!</h1>;
}

// Vykreslení instance komponenty do HTML struktury
ReactDOM.render(
  <HelloWorld />, // Vytvoření komponenty
  document.getElementById("root") // Připojení do kořene aplikace
);
