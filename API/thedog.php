<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button onclick="getDog()">Ver um cão🐈🐈‍⬛</button>
    <div id="dog"> </div>
    <link href="style.css">
    <script>
      async function getDog() {
        try{

          const res = await fetch("https://api.thedogapi.com/v1/images/search");

          const data = await res.json();

          document.getElementById('dog').innerHTML = `<img src="${data[0].url}" width="300"/>`;

   }catch (error){
  alert("Erro ao buscar cachorro")
 }
 }
   </script>
  </body>
</html>
