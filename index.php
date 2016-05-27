<?php
include_once "index.html";
function Pechat_Massiva($arr){
    for ($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr[$i]);$j++){
            echo $arr[$i][$j];
        }
    }
}


$main=array();
$main[0][]='<div id="container">
                <div id="head">
                    <div id="main_info"><h2>Аллагулова Елена Владимировна</h2>
                        <ul>
                            <li class="circl">09.12.1988 (27 лет)</li>
                            <li class="circl">+38(050)4220190; +38(097)0990175;</li>
                            <li class="circl"><a href="mailto:helen.allagulova@gmail.com?subject=about_job">helen.allagulova@gmail.com</a></li>
                            <li class="circl">Украина, г.Киев, Дарницкий р-н, пр-т Григоренко 36</li>
                        </ul>
                    </div>';
$main[0][]='    <div id="foto"><img src="img/foto.jpg"></div>
            </div>';
$main[1][]='<div class="probel"></div>';
$main[2][]='<div class="block">
                <div class="col_1st"> Цель:</div>';
$main[2][]='    <div class="col_2nd"> получить работу web-разработчитка в креативном и ориентированном на результат коллективе</div>
            </div>';
$main[3][]='<div class="probel"></div>';
$main[4][]='<div class="block">
                <div class="col_1st">Образование: </div>';
$main[4][]='    <div class="col_2nd"> Донецкий Национальный Технический Университет (ДонНТУ)<br>
                <ul>
                    <li>2005-2011 Магистр по направлению «Электрические системы и сети» (диплом с    отличием). Электротехнический факультет.</li>
                    <li>2006-2012 Магистр по направлению «Финансы». Факультет экономики и  менеджмента</li>
                </ul>
                PHP Academy - обучаюсь на данный момент
                </div>
            </div>';
$main[5][]='<div class="probel_mini"></div>';
$main[6][]='<div class="block">
        <div class="col_1st">Опыт работы:  </div>';
$main[6][]='<div class="col_2nd"> <b>2007 – 2009гг</b><br>
            Стажировка на предприятия электрических сетей г. Донецка и<br>
            ООО «ДТЭК Высоковольтные сети» ;<br>
            Стажировка в отделении «ПриватБанка» ;<br>
            <b>2010 – 2016гг</b><br>
            Индивидуальный предприниматель «ФЛП Аллагулова». Обязанности:<br>
            <ul>
            <li class="circl">предоставление информационно-консультационных услуг клиентам косметической компании;</li>
            <li class="circl">организация работы с клиентами;</li>
            <li class="circl">ведение клиентской базы;</li>
            <li class="circl">проведение семинаров, вэбинаров и лекций;</li>
            <li class="circl">обучение консультантов, менеджеров;</li>
            <li class="circl">подача отчетности в органы контроля;</li>
            <li class="circl">поддержка клиентов по всей Украине посредством e-mail, sms рассылок;</li>
            <li class="circl">продвижение бренда в социальных сетях;</li>
            <li class="circl">организация рекламных компаний с Google Adwords.</li>
            </ul>
        </div>
    </div>';
$main[7][]='<div class="probel_mini"></div>';
$main[8][]='<div class="block">
        <div class="col_1st">Навыки: </div>';
$main[8][]='<div class="col_2nd">Базовые знания языков программирования С/С++  и Delphi<br>
            Базовые знания в веб-разработке HTML, CSS <br>
            Разработка программного обеспечения «Расстановка опор ВЛЭП» и «Оценка налоговых рисков предприятий» в рамках дипломного проекта и стажировки<br>
            Проведение рекламных компаний с Google Adwords<br>
        </div>
    </div>';
$main[9][]='<div class="probel_mini"></div>';
$main[10][]='<div class="block">
        <div class="col_1st">Дополнительно: </div>';
$main[10][]='<div class="col_2nd">Курсы НЛП практик<br>
            Грамотная устная и письменная речь на украинском и русском языках<br>
            Владение английским языком на уровне Pre-intermediate<br>
            Хобби – фитнес-йога<br>
            Замужем<br>
        </div>
    </div>';
$main[11][]='<div class="probel_mini"></div>';
$main[12][]='<div class="block">
        <div class="col_1st">Личные качества: </div>';
$main[12][]='<div class="col_2nd">способность к быстрому обучению, общительность, энергичность,
            умение согласованно работать в команде, предприимчивость, стрессоустойчивость в конфликтных и нестандартных ситуациях,  добросовестное выполнение поставленных задач, навыки ведения переговоров с клиентами и потенциальными бизнес партнерами
        </div>
    </div>
</div>';
Pechat_Massiva($main);