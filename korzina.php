<?php include 'temp/header.php'; ?>

<div class = "main_content">

    <div class = "text_up">
            <h1>ВАША КОРЗИНА</h1>
            Товары регестрируются на определенное время 
    </div>

    <div class = "center_main_cont">

        <div class = "name_center_main_cont">

            <div class = "left_main_center">ФОТО НАИМЕНОВАНИЕ</div>
    
            <div class = "right_main_center">РАЗМЕР КОЛИЧЕСТВО СТОИМОСТЬ УДАЛИТЬ</div>

        </div>

        <div class = "shmot_main_center">
            <img src = "images/catalog/1.jpg" class = "odejda"> 
            <div class="name_shmot">
                <h5  >КУРТКА СИНЯЯ</h5>
                арт.123412
            </div>

            <div class="right_name_shmot">
                39
                <input type="number" style = "width:45px; margin-left: -20px;"> 
                    3800руб.
                <img src = "images/icons/krest.png" style = "margin-right: 30px; float: right; width: 25px;height: 25px;">
            </div>
        </div>

        <div class = "shmot_main_center">
            <img src = "images/catalog/7.jpg" class = "odejda"> 
            <div class="name_shmot">
                <h5>КЕДЫ</h5>
                арт.123345
            </div>
            <div class="right_name_shmot">
                M
                <input type="number" style = "width:45px; margin-left: -20px;"> 
                5200руб.
                <img src = "images/icons/krest.png" style = "margin-right:30px; float:right;width: 25px;height: 25px;">
            </div>
        </div>

        <div class = "shmot_main_center">
            <img src = "images/catalog/12.jpg" class = "odejda"> 
            <div class="name_shmot">
                <h5 >ДЖИНСЫ</h5>
                арт.123411
            </div>
            <div class="right_name_shmot">
                S
                <input type="number" style = "width:45px; margin-left: -16px;"> 
                3500руб.
                <img src = "images/icons/krest.png" style = "margin-right:30px; float:right;width: 25px;height: 25px;">
            </div>
        </div>

        <div style = "text-align:right; word-spacing: 20px; padding-top:20px; font-size:20px; color: orange;margin-top:5px; width:99.4%; background-color: rgba(172, 172, 172, 0.301); height: 50px;">
            <b style = "color:black;"> Итого: </b> 12500руб.
        </div>

    </div>

    <div style = "margin:auto; text-align: center;height:100px;">

        <img src = "images/lin.png" style = " width: 200px; height: 100px;">

    </div>

        <div class = "addres_main">

            <div class = "name_addres_main">
            <h1 style = "color:black; font-style:normal;">АДРЕС ДОСТАВКИ</h1>
            Все поля обязательны для заполнения
            </div>
            <div class = "zapolnenie">
            ВЫБЕРИТЕ ВАРИАНТЫ ДОСТАВКИ<br><br>
            <select style = "height: 50px; width: 100%;">
                <option>Курьерская служба - 500 руб.</option>
            </select>
<br><br>
            <div style = "word-spacing: 330px;">ИМЯ ФАМИЛИЯ</div>
            <br>
            <input type = "text"  style = "height: 40px; width: 45%;">
            
            <input type = "text"  style = "height: 40px; width: 45%; margin-left: 50px;">
<br><br>
            АДРЕС 
            <br>
            <br>
            <input type="text" style = "height: 40px; width: 98%;">
<br><br>
            <div style = "word-spacing: 315px;">ГОРОД ИНДЕКС</div>
            <br>
            <input type = "text" style = "height: 40px; width: 45%;">
             
            <input type="text" style = "height: 40px; width: 45%; margin-left: 50px;">
<br><br>
           <div style = "word-spacing: 285px;"> ТЕЛЕФОН E-MAIL</div>
            <br>  
            <input type = "text" style = "height: 40px; width: 45%;">
             
            <input type="text" style = "height: 40px; width: 45%; margin-left: 50px;">
            </div>


        </div>



        <div style = "margin:auto; text-align: center;height:100px;">


            <img src = "images/lin.png" style = " width: 200px; height: 100px;">


        </div>

        
        <div class = "addres_main">

            <div class = "name_addres_main">
            <h1 style = "color:black; font-style:normal;">ВАРИАНТЫ ОПЛАТЫ</h1>
            Все поля обязательны для заполнения
            </div>

            <div class = "oplata">
                <div style = "float:left; width:50%; text-align: right;"> 
               <b> Стоимость:</b><br>
               <b>Доставка:</b><br>
               <b style = "color:orange;"> Итого:</b>
                </div>
               <div style = "float:right; width:42%; text-align: left;">     
                12500руб.<br>
                500руб.<br>
               <b style = " color:orange;">13000руб.</b>
               </div>
            </div>

            <div class = "oplata1"> 
           <h4 style="text-align:left;"> ВЫБЕРИТЕ СПОСОБ ОПЛАТЫ </h4><br>
            <select style = "height: 50px; width: 100%;">
                <option>Банковская карта</option>
            </select>
            </div>
            

            
        <button type="button" class="btn btn-warning" style="margin-top: 150px;">ЗАКАЗАТЬ</button>

        </div>

    </div>

<?php include 'temp/footer.php'; ?>