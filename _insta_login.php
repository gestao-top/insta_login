<!DOCTYPE html>

<html lang="pt-BR">

   <head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>APP DIZ AÍ - Integração com Instagram</title>

   </head>

   <body style="padding: 50px;">

      <form action="https://api.instagram.com/oauth/authorize">

         <h3>APP DIZ AÍ</h3>

         <h3>AUTORIZAR INSTAGRAM</h3>

         Clique para autorizar o nosso APP a realizar postagens em seu Instagram:<br><br>

         <input type="hidden" name="client_id" value="1018697403337532">
         <input type="hidden" name="redirect_uri" value="https://www.gestaotop.com/instaLogin.php">
         <input type="hidden" name="scope" value="user_profile,user_media">
         <input type="hidden" name="response_type" value="code">

         <button type="submit">AUTORIZAR INSTAGRAM</button>

      </form>

   </body>

</html>
