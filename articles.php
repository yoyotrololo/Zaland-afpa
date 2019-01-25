<script>
// product constraction
function shirt(name, size, color, stock, image){
	this.name = name
	this.size = size
	this.color = color
	this.stock = stock
	this.image = image
}

// create new products from the product constructor
var whitetee = new shirt ("Whitetee", "small, medium, large", "White", 50,"https://github.com/ibrahimouachem/e-commerce/blob/master/img/whiteTee.png?raw=true")
var blacktee = new shirt ("Black", "small, large", "Black", 38, "https://github.com/ibrahimouachem/e-commerce/blob/master/img/blackTee.png?raw=true")
var bluetee = new shirt ("Blue", "small, medium, large", "Blue", 55, "https://github.com/ibrahimouachem/e-commerce/blob/master/img/blueTee.png?raw=true")
var greentee = new shirt ("Green", "small, medium, large", "Green", 70, "https://github.com/ibrahimouachem/e-commerce/blob/master/img/greenTee.png?raw=true")
var redtee = new shirt ("Red", "small, medium", "Red", 102, "https://github.com/ibrahimouachem/e-commerce/blob/master/img/redTee.png?raw=true")
var goldtee = new shirt ("Gold", "small, medium, large", "Gold", 140, "https://github.com/ibrahimouachem/e-commerce/blob/master/img/goldTee.png?raw=true")

// create an array to add products to
var shirtArray = new Array

// add products to array of products

shirtArray.push(whitetee, blacktee, bluetee, greentee, redtee, goldtee)

// loop through products array
for(var i = 0; i < shirtArray.length; i++) {
	// creation the element
	var newItem = document.createElement("div")
	var newDiv = document.createElement("div")
	var nameH1 = document.createElement("h1")
	var sizeH4 = document.createElement("h4")
	var colorH4 = document.createElement("h4")
	var stockH4 = document.createElement("h4")
	var btn = document.createElement("button")
	var image = document.createElement("img")

	


	// create dropdown
	var size = document.createElement("select")
	var newOption = document.createElement("option")
	var newSmOption = document.createElement("option")
	var newMdOption = document.createElement("option")
	var newLgOption = document.createElement("option")

	size.appendChild(newOption)
	size.appendChild(newSmOption)
	size.appendChild(newMdOption)
	size.appendChild(newLgOption)

	// create text dropdown
	var tOption = document.createTextNode("Choose your size")
	var tSmOption = document.createTextNode("Small")
	var tMdOption = document.createTextNode("Medium")
	var tLgOption = document.createTextNode("Large")

	newOption.appendChild(tOption)
	newSmOption.appendChild(tSmOption)
	newMdOption.appendChild(tMdOption)
	newLgOption.appendChild(tLgOption)





	// create texte for the element

	var tName = document.createTextNode(shirtArray[i].name)
	var texSize = document.createTextNode("Choose your size")
	var tColor = document.createTextNode("color : " + shirtArray[i].color)
	var tStock = document.createTextNode("In stock : " + shirtArray[i].stock)
	var tButton = document.createTextNode("Buy Now!")

	// update source attribute
	image.src = shirtArray[i].image

	image.className = "img-responsive"
	btn.className = "btn btn-warning btn-lg"
	newItem.className = "col-sm-4"
	newDiv.className = "tshirt shirtName" + [i] + " thumbnail"
	nameH1.className = "newH1"
	size.className = "dropdown"
	tOption.className = "option"

	// add text to elements
	nameH1.appendChild(tName)
	sizeH4.appendChild(texSize)
	size.appendChild(tOption)
	colorH4.appendChild(tColor)
	stockH4.appendChild(tStock)
	btn.appendChild(tButton)

	// add elements to new div
	newDiv.appendChild(nameH1)
	newDiv.appendChild(image)
	newDiv.appendChild(sizeH4)
	newDiv.appendChild(size)
	newDiv.appendChild(colorH4)
	newDiv.appendChild(stockH4)
	newDiv.appendChild(btn)

	// add new div to new item div
	newItem.appendChild(newDiv)

	// add new item to the element with id="shirts"
	document.getElementById("products").appendChild(newItem)
}
    </script>   