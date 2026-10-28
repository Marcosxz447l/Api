<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button onclick="getAnime()">Ver‍</button>
    <div id="anime" class="cat"> </div>
    <link href="style.css">
    <script>
      async function getAnime() {
        try{

          const res = await fetch("https://dattebayo-api.onrender.com/akatsuki");

          const data = await res.json();

          document.getElementById('anime').innerHTML = `<img src="${data.akatsuki[0].images[0]}" width="300"/>`;

   }catch (error){
  alert("Erro ao buscar gato 😿")
 }
 }
    </script>
  </body>
</html>
