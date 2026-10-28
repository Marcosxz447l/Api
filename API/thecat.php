<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button onclick="getCat()">Ver um gato🐈🐈‍⬛</button>
    <div id="cat" class="cat"> </div>
    <link href="style.css">
    <script>
      async function getCat() {
        try{

          const res = await fetch("https://randomfox.ca/images/search");

          const data = await res.json();

          document.getElementById('cat').innerHTML = `<img src="${search[0].images[0]}" width="300"/>`;

   }catch (error){
  alert("Erro ao buscar gato 😿")
 }
 }
    </script>
  </body>
</html>
