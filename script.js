var inputQuantity = document.getElementsByClassName("inputquantity");
var plusMinus = document.getElementsByClassName("plusMinus");
var options = document.getElementsByClassName("free-label four col");
var checked = document.querySelectorAll(".form .plan input:checked + label, .form .payment-plan input:checked + label, .form .payment-type input:checked + label");
var pizzaAtribute = document.getElementsByClassName("extendedAttribute");
var koszyk = document.getElementById("koszyk");
var productsBasket = new Map();
var menu = LoadMenu("./menu.json");
koszyk.addEventListener("click", KoszykClicked);
//AddListeners();
class Product
{
    options_element = Array();
    checked_option_element;
    input_Quantity;
    attribute;
    i;
    option_count;
    whickOptionChecked;
    plus;
    minus;
    constructor(i)
    {
        let inputQuantity = document.getElementsByClassName("inputquantity");
        this.input_Quantity = inputQuantity[i];//tutaj albo i albo i+1
        let options = document.getElementsByClassName("free-label four col");
        let atribute = document.getElementsByClassName("extendedAttribute"); 
        this.i = i;

        options = [...options];
        this.option_count = new Array();
        options.forEach(element => {
            if(element.getAttribute("pmi") == this.i)
            {
                element.addEventListener("click", this.SelectOption);
                this.options_element.push(element);
                this.option_count.push(0);
            }
        });

        var checked = document.querySelectorAll(".form .plan input:checked + label, .form .payment-plan input:checked + label, .form .payment-type input:checked + label");
        checked = [...checked];
        checked.forEach(element => {
            if(element.getAttribute("pmi") == this.i)
                this.checked_option_element = element;
        });

        atribute = [...atribute];
        atribute.forEach(element => {
            if(element.getAttribute("pmi") == this.i)
            {
                this.attribute = element;
                this.attribute.addEventListener("input", this.ChangedAttrubute);
            }
        });

        this.plus = document.getElementsByClassName("PlusMinus")[this.i*2];
        this.minus = document.getElementsByClassName("PlusMinus")[this.i*2 + 1];
        this.plus.addEventListener("click", this.PlusMinus);
        this.minus.addEventListener("click", this.PlusMinus);
        this.UpdateChecked();
    }
    ChangedAttrubute = e =>
    {
        if(this.option_count[this.whichOptionChecked] == 0)
            this.input_Quantity.value = 0;
        else
        {
            let v = this.option_count[this.whichOptionChecked].get(this.attribute.value);
            if(v != undefined)
                this.input_Quantity.value = this.option_count[this.whichOptionChecked].get(this.attribute.value);
            else
                this.input_Quantity.value = 0;
        }
    }
    UpdateChecked = () => 
    {
        var checked = document.querySelectorAll(".form .plan input:checked + label, .form .payment-plan input:checked + label, .form .payment-type input:checked + label");
        checked = [...checked];
        checked.forEach(element => {
            if(element.getAttribute("pmi") == this.i)
            {
                this.checked_option_element = element;
                for(let i=0;i<this.options_element.length;i++)
                {
                    if(this.checked_option_element == this.options_element[i])
                        this.whichOptionChecked = i;
                }
            }
        });
    }
    PlusMinus = e =>
    {
        this.UpdateChecked();
        var value = parseInt(this.input_Quantity.value);
        e.target.textContent == "<" ? value-- : value++;
        if(e.target.textContent == "<" && value < 0)
            return 0;
        this.input_Quantity.value = value;
        //console.log(this.attribute);
        if(this.attribute)
        {
            for(let i=0;i<this.attribute.length;i++)
            {
                if(this.attribute[i].value == this.attribute.value)
                {
                    this.attribute[i].setAttribute("count", value);
                    if(this.option_count[this.whichOptionChecked] == 0)
                        this.option_count[this.whichOptionChecked] = new Map();
                    this.option_count[this.whichOptionChecked].set(this.attribute.value, value);
                    break;
                }
            }
        }
        else
        {
            this.checked_option_element.setAttribute("count", value);
            this.option_count[this.whichOptionChecked] = value;
        }
        var a = "";
        if(this.attribute)
            a = this.attribute.value;
        this.input_Quantity.value = value;
        productsBasket.set(this.checked_option_element.getAttribute("for").slice(2, 6) + a, value);
        UpdateProductsDiv(productsBasket);
    }
    SelectOption = e => 
    {
        var clicked = e.target;
        if(clicked.nodeName == "SPAN")
            clicked = clicked.parentElement;
        this.checked_option_element = clicked;
        for(let i=0;i<this.options_element.length;i++)
        {
            if(clicked == this.options_element[i])
                this.whichOptionChecked = i;
        }
        if(this.attribute)
        {
            //console.log(this.whichOptionChecked);
            if(this.option_count[this.whichOptionChecked] == 0)
                this.input_Quantity.value = 0;
            else
            {
                let v = this.option_count[this.whichOptionChecked].get(this.attribute.value);
                if(v != undefined)
                    this.input_Quantity.value = this.option_count[this.whichOptionChecked].get(this.attribute.value);
                else
                    this.input_Quantity.value = 0;
            }
        }
        else
            this.input_Quantity.value = parseInt(this.option_count[this.whichOptionChecked]);
        document.getElementsByClassName("plusMinusContainer")[this.i].style.display = "block";
    }
}
var ProductsTab = CreateProductsTab();
function CreateProductsTab()
{
    var tab = new Array();
    var inputQuantity = document.getElementsByClassName("inputquantity");
    for(let i=0;i<inputQuantity.length;i++)
        tab.push(new Product(i));
    return tab;
}
function KoszykClicked()
{
    Fetching(productsBasket, 0);
}
function Fetching(productsBasket, i)
{
    let prod = [...productsBasket];
    /*if(prod.length == 0)
        return 0;*/
    //console.log(prod);
    if(prod.length != 0)
    {
        var key = prod[i][0];
        var value = prod[i][1];
        var get = "?";
        if(key.length > 4)
        {
            get = get + "add-to-cart=" + key.slice(0, 4) + "&quantity=" + value;
            get = get + "&attribute_5-element-do-wyboru=" + key.slice(4, key.length);
        }
        else
            get = get + "add-to-cart=" + key + "&quantity=" + value;
        //console.log(get);
    }
    var jsonProducts = JSON.stringify(prod);
    fetch("http://localhost/Gondola/koszyk.php", {method: 'post', body : jsonProducts, contentType: "application/json; charset=utf-8",
    dataType: "json"})
    .then(function(response) {
        return response.text();
      })
      .then(function(text) {
        //document.getElementById("body").innerHTML = "abc";
        console.log(text);
      });
    //.then((res) => {console.log(res)});//document.getElementById("body").innerHTML = res;
    //.then(() => location.href = "./koszyk.php");
    /*fetch("./koszyk.php" + get)
    .then(() => {if(i != prod.length-1) Fetching(productsBasket, i+1); else location.href = "./koszyk.php";});*/
}
function UpdateProductsDiv(productsBasket)
{
    menuTable = Object.values(menu);
    let container = document.getElementById("productDivContainer");
    container.innerHTML = "";
    var keysProductsBasket = productsBasket.entries();
    keysProductsBasket = [...keysProductsBasket];
    for(let i=0;i<keysProductsBasket.length;i++)
    {
        if(keysProductsBasket[i][1] <= "0")
        {
            productsBasket.delete(keysProductsBasket[i][0]);
        }
    }
    productsBasket.forEach((value, key) =>
    {
        for(let i=0;i<menuTable.length;i++)
        {
            for(let k=0;k<menuTable[i].length;k++)
            {
                for(let j=0;j<menuTable[i][k][1].length;j+=3)
                {
                    if(menuTable[i][k][1][j] == key.slice(0, 4))//zamiast 0 pozniej rozmiary odpowiednie
                    {
                        let productDiv = document.createElement("div");
                        productDiv.classList.add("productBasket");
                        productDiv.textContent =  menuTable[i][k][0][1];
                        productDiv.textContent = productDiv.textContent + " " + menuTable[i][k][1][j+1];
                        let plusMinusContainer = document.createElement("div");
                        let plus = document.createElement("div");
                        plus.textContent = "+";
                        let input = document.createElement("input");
                        input.value = value;
                        let minus = document.createElement("div");
                        minus.textContent = "-";
                        plus.classList.add("plusMinusKoszyk");
                        minus.classList.add("plusMinusKoszyk");
                        input.classList.add("inputquantityKoszyk");
                        plusMinusContainer.appendChild(minus);
                        plusMinusContainer.appendChild(input);
                        plusMinusContainer.appendChild(plus);
                        plusMinusContainer.classList.add("plusMinusContainerKoszyk");
                        productDiv.appendChild(plusMinusContainer);
                        //productDiv.textContent = productDiv.textContent + " - " + value;
                        if(key.length > 4)
                        {
                            productDiv.textContent = productDiv.textContent + " " + key.slice(4, key.length);
                        }
                        container.appendChild(productDiv);
                        //container.textContent += menuTable[i][k][0][1];
                    }
                }
            }
        }
    });
}
function LoadMenu(url)
{
    fetch(url, {mode: 'no-cors'})
    .then(response => response.json())
    .then(data => {
        menu = {...data};
    });
}
