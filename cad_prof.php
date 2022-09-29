<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    *{
      margin: 0%;
      box-sizing: border-box;
    }
    header{
      background: black;
      padding:  30px;
    }
    main{
      height: 100vh;
      background: rgb(50, 100, 150);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    h1{
      text-align: center;
      color: white;
      font-weight: 600;
    }

    .box {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 5px 10px;
      background: rgba(0, 0, 0, .5);
      padding: 40px;
      border-radius: 15px;
      color: orange;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    }
  </style>
</head>
<body>
  <header>  <h1>CADASTRO DE PROFESSORES</h1></header>
  <main>
    <section>
      <div class="box">
        <form action="cad_prof.php" name="POST">
          <label for="">NOME</label>
          <input type="text" name="nome"><br><br>
          <label for="">NIVEL</label>
          <input type="text" name="nivel"><br><br>
          <label for="">DATA</label>
          <input type="date" name="data"><br><br>
          <label for="">GENERO</label>
          <input type="radio" name="genero" value="m"><label for="m">M</label>
          <input type="radio" name="genero" value="f"><label for="f">F</label>
          <input type="radio" name="genero" value="others"><label for="others">OTHERS</label><br><br>
          <label for="">DISCIPLINA</label>
          <input type="text" name="disciplina"><br><br>
          <button type="submit" name="submit" value="">CADASTRAS</button>
        </form>
      </div>
    </section>
  </main> 
</body>
</html>