let global_category = "%";

function switchCategory(category) {

    this.category = category.trim();

    global_category = category.trim();

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mainContent").
                innerHTML = this.responseText;

        }
    };

    xmlhttp.open("GET", "./get_menu.php?q=" + this.category, true);
    xmlhttp.send();

}

function searchCurrentMenu(keyword) {

    this.keyword = keyword.trim();

    if (this.keyword == "") {
        this.keyword = "%";
    }

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("mainContent").
                innerHTML = this.responseText;

        }
    };

    //console.log(this.keyword + " " + global_category);

    xmlhttp.open("GET", "./search.php?q=" + this.keyword +
        "&category=" + global_category, true);
    xmlhttp.send();

}

function removeItem(e) {
    e.srcElement.parentElement.remove();
}

function addToBuyout(item) {

    var naziv = item.parentElement.parentElement.childNodes[1].textContent;
    naziv = naziv.slice(0, 12);

    var cijena = item.parentElement.childNodes[3].textContent;

    var menu = document.getElementById("korpa");

    var liItem = document.createElement("LI");
    var liItemName = document.createTextNode(naziv);
    liItem.setAttribute("class", "nav-item foodItem");

    var spanX = document.createElement("SPAN");
    var spanXText = document.createTextNode("x | ");
    spanX.appendChild(spanXText);
    spanX.setAttribute("class", "text-danger deleteItem");

    spanX.addEventListener("click", removeItem);

    var spanCijena = document.createElement("SPAN");
    var spanCijenaText = document.createTextNode(cijena);
    spanCijena.appendChild(spanCijenaText);
    spanCijena.setAttribute("class", "float-right cijena text-danger");

    liItem.appendChild(spanX);
    liItem.appendChild(liItemName);
    liItem.appendChild(spanCijena);

    menu.appendChild(liItem);

}

