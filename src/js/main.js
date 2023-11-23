function viewAdd() {
	document.getElementById("blockAdd").style.display = "block";
};

function invisAdd() {
	document.getElementById("blockAdd").style.display = "none";
};

function personInfo() {
	document.getElementById("shopId").style.display = "none";
	document.getElementById("personId").style.display = "block";
	document.getElementById("personBtn").style.color = "#2563EB";
	document.getElementById("shopBtn").style.color = "#000";
};

function shopInfo() {
	document.getElementById("shopId").style.display = "block";
	document.getElementById("personId").style.display = "none";
	document.getElementById("personBtn").style.color = "#000";
	document.getElementById("shopBtn").style.color = "#2563EB";
};

function viewProduct() {
	document.getElementById("mainProduct").style.display = "block";
	document.getElementById("listProduct").style.display = "none";
};
