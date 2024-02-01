<?php
session_start();
include('tpl/header.php');
include('tpl/nav.php');
?>
    <body class="body-top">
    <main class="flex">
      <div class="row">
        <div class="col">Наши туры</div>
      </div>
      <div class="container_fluid">
        <div class="row">
          <div class="col">
            <div class="country">
              <img src="img/111.jpg" class="country_img" />
              <p>Это прекрасная возможность отдохнуть всей семьёй</p>
              <button
                type="button"
                class="btn my_btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#myModal"
              >
                Рассчитать стоимость
              </button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="country">
              <img src="img/222.jpg" class="country_img" />
              <p>Море, солнце и горы!</p>
              <button
                type="button"
                class="btn my_btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#myModal"
              >
                Рассчитать стоимость
              </button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="country">
              <img src="img/333.jpg" class="country_img" />
              <p>Незабываемые впечатления!</p>
              <button
                type="button"
                class="btn my_btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#myModal"
              >
                Рассчитать стоимость
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Расчет стоимости тура</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class = "modal-body" style = "max-width: 600px">
                    <form method = "get" action = "#" id = "orderForm">
                        <div class = "point">
                        <label class = "label" for = "name"> Выберите тур:</label>
                            <select id = "inp1">
                                <option value = "Крым" selected>Крым</option> 
                                <option value = "Кавказ">Кавказ</option> 
                                <option value = "Алтай">Алтай</option>
                            </select>
                        <div>
                        <div class = "point">
                            <label class = "label" for = "data">Выберите дату начала:</label>
                            <input type = "date" id = "inp2"> 
                        </div>
                        <div class = "point">
                            <label class = "label" for = "number">Выберите количество участников:</label> 
                            <select id = "inp3">
                                <option value = "1" >1</option>
                                <option value = "2" selected>2</option>
                                <option value = "3">3</option>
                                <option value = "3">4</option>
                            </select>
                        </div>
                        <div class = "point">
                            <label class = "label" for = "email"> Ваш E-mail:</label> 
                            <input type = "email" id = "inp4" class = "input-xlarge" style = "width: 350px;" required = "required"> 
                        </div>
                    </form>

                    <div class="modal-footer">
                        <button type = "button" class = "btn my_btn btn-primary" data-dismiss ="modal">Закрыть</button>
                        <button type = "submit" class = "btn my_btn  btn-primary" id = "submit">Отправить</button>
                </div>
            </div>
        </div>
    </div>
    </main>
    <?php
include('tpl/footer.php');
?>
    <script>
      $('#orderForm').on('submit', function ()
      {
          let tour = $("#inp1").val();
          let date = new Date($("#inp2").val());
          let month = date.getMonth();
          let kol = $("#inp3").val();
          kol = Number(kol);
          let email = $("#inp4").val();
          let stoim = 0;
          if (tour == 'Крым')
          {
              if((month == 5)|| (month == 6)|| (month == 7)|| (month == 8)) 
                  {stoim = kol*500;} 
              else {stoim = kol*300;}
          }
          if (tour == 'Кавказ')
          {
              if((month == 12)|| (month == 1)|| (month == 2)|| (month == 5)|| (month == 6)|| (month == 7)|| (month == 8))
                  {stoim = kol*300;}
              else {stoim = kol*250;}
          }
          if (tour == "Алтай")
          {
              {stoim = kol*1000;}
          }
          alert ( 'Примерная стоимость вашего тура на'+ " " + kol + " " + 'человек составит '+ " " + stoim + ' y.e. Мы свяжемся с ВАМИ!!');
      }
      );
  </script>
    <script src = "js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
  </body>
</html>
