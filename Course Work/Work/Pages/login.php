<!DOCTYPE html>
<html class="fill">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pe-Pic</title>
  <link rel="stylesheet" href="../Styles/main.css" />
  <link rel="icon" href="../Data/Icons/index.ico" />
</head>

<body class="color-gradient-main fill background-fixed">
  <div class="container-column fill">
    <header class="container-main rounded-one color-light fill-horizontal">
      <h1>
        <a href="./index.php" class="text-style-1 margin-left-medium hover-main">Pe-Pic</a>
      </h1>
    </header>
    <div class="container-column container-center fill">
      <div class="container-column color-sub rounded-all-sub padding-medium margin-medium">
        <div class="container-center">
          <p class="text-style-2 text-light margin-bottom-medium">
            Авторизация
          </p>
        </div>
        <table class="text-right">
          <tr>
            <td>
              <p class="text-bold text-light">Email:</p>
            </td>
            <td>
              <input type="email" name="email" id="email" />
            </td>
          </tr>
          <tr>
            <td>
              <p class="text-bold text-light">Пароль:</p>
            </td>
            <td>
              <input type="password" name="password" id="password" />
            </td>
          </tr>
        </table>
        <div class="container-center margin-top-medium">
          <div class="container-column">
            <button type="submit"
              class="rounded-all-sub border-none padding-small text-style-2 text-light color-main hover-button-simple">
              Войти
            </button>
            <div class="container-center">
              <a href="./registration.php" class="hover-sub text-light margin-top-small">Зарегистрироваться</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>