<?php
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        .nawigacjaBut {
            box-sizing: unset;
        }

        .produkt {
            box-sizing: unset;
        }

        body {
            background-color: #f7f4f3;
            height: 3000px;
            margin: 0;
            padding: 0;
            /* padding-top: 150px; */
        }

        a {
            text-decoration: none;
        }

        #all {
            /* border: 1px solid red; */
            width: 100%;
            display: flex;
            justify-content: center;
            overflow: hidden;
            background-color: white;
            border-top: 1px solid #ededed;
            overflow-x: auto;
            overflow-y: hidden;
            z-index: 1000;
        }

        #overAll {
            display: flex;
            justify-content: center;
            background-color: white;
            /* border: 1px solid red; */
            z-index: 1000;
        }

        #overAllcontainer {
            width: 1300px;
            display: flex;
            /* justify-content: left; */
            /* border: 1px solid red; */
        }

        #overLogo {
            /* border: 1px solid red; */
            width: 50%;
        }


        nav {
            /* border: 1px solid red; */
            position: relative;
            display: relative;

            width: 50%;
        }

        #nawigacja {
            /* border: 1px solid red; */
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .nawigacjaBut {
            /* border: 1px solid red; */
            padding: 20px;
            padding-right: 20px;
            padding-left: 20px;
            height: 30px;
            float: left;
            text-align: center;
            font-size: 15px;
            font-family: sans-serif;
            font-weight: 700;
            font-variant: small-caps;
            text-transform: uppercase;
            line-height: 30px;
            color: #1c1210;
        }

        .nawigacjaBut:hover {
            color: #CE0A06;
        }

        @media screen and (max-width: 1350px) {
        #overAllcontainer {
            width: 1300px;
            display: unset;
            /* justify-content: left; */
            /* border: 1px solid red; */
        }

        #overLogo {
            /* border: 1px solid red; */
            width: 100%;
        }


        nav {
            /* border: 1px solid red; */
            position: relative;
            display: relative;

            width: 100%;
        }

        #nawigacja {
            /* border: 1px solid red; */
            position: unset;
            bottom: 0;
            right: 0;
            display: flex;
        }

        .nawigacjaBut {
            padding: 15px;
            float: none;


        }

        #nawigacja > :nth-child(1) {
            flex-grow: 1;
        }

        #nawigacja > :nth-child(2) {
            flex-grow: 1;
        }

        #nawigacja > :nth-child(3) {
            flex-grow: 1;
        }

        #all {
            justify-content: left;
        }
        }

        .allDanie {
            /* border: 1px solid #1c1210; */
            float: left;
            /* padding: 5px; */
            background-color: white;
            padding-bottom: 5px;
            padding-top: 0px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 15px;
            display: flex;
            justify-content: center;
        }

        .allDanie:hover {
            border-bottom: 3px solid #CE0A06;
            padding-bottom: 12px;
            background-color: #EEEEEE;
        }

        .danie {
            float: left;
            width: 100px;
            height: 100px;
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: center;
            display: flex;
            justify-content: center;
            /* border-radius: 150px; */
        }

        .nazwa {
            font-family: sans-serif;
            font-size: 11px;
            font-weight: 700;
            /* letter-spacing: 3px; */
            font-variant: small-caps;
            color: #868686;
            margin-top: 85%;
            text-transform: uppercase;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #CE0A06 !important;
            // margin-top: 40;
        }

        .displayNone {
            height: 30px;
            background-image: none !important;
        }

        .displayNoneDanie {
            margin-top: 15%;
            color: white;
        }

        .displayNoneAllDanie {
            background-color: #CE0A06;
            border-right: 1px solid #d32723 !important
        }

        .displayNoneAllDanie:hover .displayNoneDanie {
            color: #1c1210 !important;
        }

        .displayNoneAllDanie:hover {
            border-bottom: 3px solid #EEEEEE;
        }

        .sticky+.content {
            padding-top: 60px;
        }

        #logo img {
            height: 119px;
        }

        .kotwica
        {
            font-size: 50px !important;
            margin: 0 auto;
            display: table;
            // margin-top: 130px;
        }

        @media screen and (max-width: 1350px) {
        .kotwica
        {
            margin-top: 200px;
        }
        }
    </style>



    <div id="overAll">
        <div id="overAllcontainer">
            <div id="overLogo">
                <div id="logo"><img src="https://egondola.pl/wp-content/uploads/2020/05/logo-kwadrat.png" alt="logo Gondola"
                        height="119"></div>
            </div>

            <nav>
                <div id="nawigacja">
                    <a href="#"><div class="nawigacjaBut">menu</div></a>
                    <a href="#"><div class="nawigacjaBut">koszyk</div></a>
                    <a href="#"><div class="nawigacjaBut">płatność</div></a>
                </div>

            </nav>
        </div>
    </div>

    <div id="all">
        <a href="#pizza">
            <div class="allDanie">
                <div class="danie"
                    style="background-image: url('.'https://egondola.pl/wp-content/uploads/2020/05/pizza.png'.')">
                    <div class="nazwa">Pizza</div>
                </div>
            </div>
        </a>
        <a href="#salatki">
            <div class="allDanie">
                <div class="danie"
                    style="background-image: url('.'https://egondola.pl/wp-content/uploads/2020/05/salatki.jpg'.')">
                    <div class="nazwa">Sałatki</div>
                </div>

            </div>
        </a>
        <a href="#makarony">
            <div class="allDanie">
                <div class="danie"
                    style="background-image: url('.'https://egondola.pl/wp-content/uploads/2020/05/pasta.jpg'.')">
                    <div class="nazwa">Makarony</div>
                </div>
            </div>
        </a>
        <a href="#lasagne">
            <div class="allDanie">
                <div class="danie"
                    style="background-image: url('.'https://egondola.pl/wp-content/uploads/2020/06/lasagne-1.jpg'.')">
                    <div class="nazwa">Lasagne</div>
                </div>
            </div>
        </a>
        <a href="#zupy">
            <div class="allDanie">
                <div class="danie" style="background-image: url('.'https://egondola.pl/wp-content/uploads/2020/06/zupy.jpg'.')">
                    <div class="nazwa">Zupy</div>
                </div>
            </div>
        </a>
        <a href="#obiady">
            <div class="allDanie">
                <div class="danie"
                    style="background-image: url('.'https://egondola.pl/wp-content/uploads/2020/06/obiady.jpg'.')">
                    <div class="nazwa">Obiady</div>
                </div>
            </div>
        </a>
        <a href="#risotto">
            <div class="allDanie">
                <div class="danie"
                    style="background-image: url('.'https://egondola.pl/wp-content/uploads/2020/06/risotto.jpg'.')">
                    <div class="nazwa">Risotto</div>
                </div>
            </div>
        </a>
        <a href="#dodatki">
            <div class="allDanie">
                <div class="danie" style="background-image: url('.'https://egondola.pl/wp-content/uploads/2020/06/sosy.jpg'.')">
                    <div class="nazwa">Dodatki</div>
                </div>
            </div>
        </a>
    </div>

    <script>
        window.onscroll = function () { myFunction() };

        var all = document.getElementById("all");
        var displayNone = document.getElementsByClassName("danie");
        var displayNoneDanie = document.getElementsByClassName("nazwa");
        var displayNoneAllDanie = document.getElementsByClassName("allDanie");
        console.log(displayNone);
        var sticky = all.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                all.classList.add("sticky")
                for (i = 0; i < 8; i++) {
                    displayNone[i].classList.add("displayNone");
                    displayNoneDanie[i].classList.add("displayNoneDanie");
                    displayNoneAllDanie[i].classList.add("displayNoneAllDanie");
                }

                if (window.innerWidth < 1350) document.getElementById("listaZakupow").setAttribute("class", "to-clone div-test-remove sticky");

            } else {
                all.classList.remove("sticky");
                for (i = 0; i < 8; i++) {
                    displayNone[i].classList.remove("displayNone");
                    displayNoneDanie[i].classList.remove("displayNoneDanie");
                    displayNoneAllDanie[i].classList.remove("displayNoneAllDanie");
                }

                if (window.innerWidth < 1350) document.getElementById("listaZakupow").setAttribute("class", "to-clone div-test-remove");
            }
        }
    </script>';



    $pmi = 0;
    // $array = (array) json_decode(file_get_contents("./menu.json"));
    $array = (array) json_decode(file_get_contents("./menu.json"));

    $style = '
    ';
    // echo '<link rel="stylesheet" href="./style.css">';
    echo '<link rel="stylesheet" href="./style.css">';

    $script = '
    ';
    // echo "<script src='./script.js' defer>" .  "</script>";
    echo "<script src='./script.js' defer>" .  "</script>";

    echo '<div id="calaStrona" class="test-cnt"><div id="menuLista"><div id="menuListaUnder">';
    echo '<div>';
    global $kategorie_all;
    $kategorie_all = Array("pizza","salatki","makarony","lasagne","zupy","obiady","risotto","dodatki");
    global $kot;
    $kot = 0;
    function CreateProductList($array)
    {
        global $kategorie_all;
        global $kot;
        $nazwaKotwicy = $kategorie_all[$kot];
        $kot+=1;
        $result = "";
        $result .= '<a class="kotwica" name="';
        $result .= $nazwaKotwicy;
        $result .= '" >';
        $result .= strtoupper($nazwaKotwicy);
        $result .= "</a>";
        //$option = '<input type="radio" name="radio1" id="free" value="free"><label class="free-label four col" for="free">30cm - 25zl</label>';
        $optionArray = array('<input type="radio" name="radio1" id="',
        '"><label class="free-label four col" for="',//onclick="SelectedRadioButton()"
        ' zł</span></label>');
        $product = array
        (
            '<div class="produkt"> <div style="background-image: url(' . "'",
        "'" . ');" alt="',//zamiast id alt byl
        '" class="ProductPhoto"></div><div class="gradient"></div><div class="title"><b>',//width="20%" height="100vh"
        '</b>
        </div>
        <div class="container-radio-button">
            <form class="form cf">
                <section class="plan cf">',//ROZMIAR cena Warianty pizzy doklejam
        '</section>
        </form>
    </div>
    <div class="plusMinusContainer" style="display: none;">
        <div class="plusMinus">&#60;</div>
        <input type="number" disabled class="inputquantity" value="0" min="0">
        <div class="plusMinus">&#62;</div>
    </div>
    <div class="skladniki">',
    '</div>
    </div>'
        );
        for($k = 0; $k < count($array); $k++)
        {
            $thisProduct = array($array[$k][0][3], $array[$k][0][1] . " photo", $array[$k][0][1], "", $array[$k][0][2], "<br>");
            for($i = 0; $i < count($thisProduct); $i++)
            {

                $result = $result . $product[$i];
                $result = $result . $thisProduct[$i];
                if($thisProduct[$i] == "")
                {
                    $result .= CreateOptions($array, $optionArray, $k);
                }
            }
        }
        return $result;
    }
    function CreateOptions($array, $optionArray, $i)
    {

        /*$optionArray = array(<input type="radio" name="radio1" id="',
        '><label class="free-label four col" for="',//onclick="SelectedRadioButton()"
        '</label>');*/
        $result = "";
        $countOptions = $array[$i][0][4];
        for($k = 0; $k < $countOptions * 3; $k+=3)
        {
            //Tworzy input i label
            $result .= $optionArray[0];

            $result .= "id";
            $result .= $array[$i][1][$k];

            $result .= $optionArray[1];

            $result .= "id";
            $result .= $array[$i][1][$k];
            $result .= '" pmi="' . $GLOBALS['pmi'] . '"';
            $result .= '">';

            $result .= $array[$i][1][$k+1];
            if($countOptions != "1") $result .= '<br><span class="cenaChoose" pmi="' . $GLOBALS['pmi'] .'" >';//=-=-
            $result .= $array[$i][1][$k+2];

            $result .= $optionArray[2];
        }
        if(isset($array[$i][2]))
        {
            $result .= '<select class="extendedAttribute" pmi="';
            $result .= $GLOBALS['pmi'];
            $result .= '" >';
            for($k = 0;$k < count($array[$i][2][0]); $k++)
            {
                /*$k == 0 ? $result .= '<option selected="selected">' : */
                $result .= '<option value="';
                $result .= $array[$i][2][0][$k];
                $result .= '" >';
                $result .= $array[$i][2][0][$k];
                $result .= "</option>";
            }
            $result .= '</select>';
        }
        $GLOBALS['pmi']++;
        //$pmi++;
        return $result;
    }
    echo CreateProductList($array['pizza']);
    echo CreateProductList($array['salatki']);
    echo CreateProductList($array['makarony']);
    echo CreateProductList($array['lasagne']);
    echo CreateProductList($array['zupy']);
    echo CreateProductList($array['obiady']);
    echo CreateProductList($array['risotto']);
    echo CreateProductList($array['dodatki']);
    // echo '<div><div id="productDivContainer"></div>';
    // echo "<button id='koszyk'>Koszyk</button></div>";
    /*echo '<pre>';
    print_r($array);
    echo '</pre>';*/
    echo '</div></div></div>';



    echo '<div class="test-cnt2"><div id="listaZakupow" class="to-clone div-test-remove"><h3 style="text-align: center; margin-top: -20px">Lista zakupów</h3><div id="productDivContainer"></div>';
    echo '<br><div id="zamowKoszyk"><button id="koszyk">Przejdź do koszyka</button></div></div></div></div>';
?>

<script>

    resizeOn = 0;
    function reportWindowSize() {

        if (resizeOn == 0) {
            if (window.innerWidth < 1350) {
                const el = document.querySelector(".to-clone");

                const cloneEl1 = el.cloneNode(true);
                console.log(cloneEl1);

                const div = document.querySelector(".test-cnt");
                const strong = div.querySelector("div");

                div.insertBefore(cloneEl1, strong);

                const parent = document.getElementsByClassName("div-test-remove")[1];

                parent.remove();
                var koszyk = document.getElementById("koszyk");
                koszyk.addEventListener("click", KoszykClicked);

                resizeOn = 1;
            }
        }

        if (resizeOn == 1) {
            if (window.innerWidth > 1350) {
                const el = document.querySelector(".to-clone");

                const cloneEl1 = el.cloneNode(true);
                console.log(cloneEl1);

                const div = document.querySelector(".test-cnt2");
                const strong = div.querySelector("div");

                div.insertBefore(cloneEl1, strong);

                const parent = document.getElementsByClassName("div-test-remove")[0];

                parent.remove();
                var koszyk = document.getElementById("koszyk");
                koszyk.addEventListener("click", KoszykClicked);

                document.getElementById("listaZakupow").setAttribute("class", "to-clone div-test-remove");
                resizeOn = 0;
            }
        }
    }

    window.onresize = reportWindowSize;

    window.onload = reportWindowSize;




</script>
