<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ana Sayfa</h1>

    <div>
          <form method="post">
              @csrf
              <input type="text" name="name"><br><br>
              <input type="email" name="email"><br><br>
              <input type="submit" value="Kaydet">
          </form>
      </div>
  </body>
</html>
