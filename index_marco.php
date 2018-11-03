<html>

<head>
  <title>시공 조아</title>
  <style>
    body {
      background-color: lightgray;
      width: 70%;
      margin: 10px auto;
    }

    .body1 {
      color: white;
      background-color: gray;
      display: block;
      margin-bottom: 10px;
      width: 100%;
      text-align: justify;
    }

    .image1 {
      width: 100%;
      height: auto;
      margin: 0;
    }

    ol {
      list-style: none;
      padding-left: 0;
      padding-bottom: 0;
      margin: 0 3px 3px 3px;
    }

    h2 {
      text-align: center;
      color: black;
      background-color: 33CFCF;
      border: 3px dashed green;
      margin: 3px 0 3px 0;
    }

    .float1 {
      background-color: white;
      color: white;
      border: solid black 4px;
      right: 0;
      bottom: 0;
      position: fixed;
      height: 6rem;
      width: 6rem;
      margin: 0;
    }

    #title {
      color: lightgray;
      background-color: black;
      text-align: center;
    }

    .hots_image {
      width: 6rem;
      height: 6rem;
    }

    .grid1 {
      display: grid;
      grid-template-columns: 200px 1fr;
    }

    div {
      border: 2px solid black;
    }
  </style>
</head>

<body>
  <h1 id="title"><a href="index_marco.php?content=index" style="text-decoration:none;">시공 홍보 페이지</a></h1>

  <div class="grid1" style="border-bottom:0;">

    <div>
      <ul>
        <?php
          $list = scandir('./contents');
          $i = 0;
          while($i < count($list)){
              if($list[$i] != '.'){
                if($list[$i] != '..'){
                if($list[$i] != 'index'){
                  echo "<li><a href=/"index_marco.php?content=$list[$i]/">$list[$i]</a></li>/n";
                }
              }
            }
              $i++;
          }
         ?>
      </ul>
    </div>

    <div>
      <ol>
        <?php
        if(isset($_GET['content'])){
          echo file_get_contents("contents/".$_GET['content']);
        }
        ?>
      </ol>
    </div>

  </div>

  <div>
    <p class="float1"><a href=" https://heroesofthestorm.com/ko-kr/" target="_blank" title="시공조아"><img class="hots_image" src="./marco_image/heroes_of_the_storm.png" alt="시공"></a></p>
  </div>

</body>

</html>
