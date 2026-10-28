<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button onclick="getCat()">Ver um gato🐈🐈‍⬛</button>
    <div id="cat" class="cat"> </div>
    <button onclick="getDog()">Ver um cão 🐕🦮</button>
    <div id="dog" class="dog"> </div>
    <link href="style.css">
    <script>
      async function getCat() {
        try{

          const res = await fetch("https://api.thecatapi.com/v1/images/search");

          const data = await res.json();

          document.getElementById('cat').innerHTML = `<img src="${data[0].url}" width="300"/>`;

   }catch (error){
  alert("Erro ao buscar gato 😿")
 }
}
async function getDog() {
  try{

    const res = await fetch("https://api.thedogapi.com/v1/images/search");

    const data = await res.json();

    document.getElementById('dog').innerHTML = `<img src="${data[0].url}" width="300"/>`;
  }catch (error){
    alert("Erro ao buscar o cachorro")
  }
}
    </script>
  </body>
</html>
