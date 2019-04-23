var id = 0; 
var data = [];
getCookie();
console.log(data);



for (stuff in data) {
	addTask(data[stuff]);
}

function add() {
	var sen = prompt("Please enter your task");

	if (sen.trim() == "") //if string is empty, alert warning.
	{
		alert("You gotta type something!");
		return ; //if this isn't hear, it makes an empty space. 
	}

	//add thing to check if stirng is empty.
	if (sen != null) {
		console.log(data); //add to console
		data.push(sen); //push item to array
		addTask(sen);
		document.cookie = "list=" + data.toString(); 
	}
}

function getCookie() {
	var cookie = document.cookie.split(';');
	for (c in cookie) //scan every cookie.
	{
		var key = cookie[c].split('=');
		if (key[0].trim() == "list") {
			if (key[1] != "") {
				d = key[1].split(',');
				for (t in d) {
					data.push(d[t]);
				}
			}
		}
	}
}

function addTask(sen) {
	var ft_list = document.getElementById("ft_list"); //find list in html
	var div = document.createElement('div'); //create div
	div.setAttribute("id", id++); //give id
	div.setAttribute("onclick", "removeTask(this.id)"); //
	div.className = "appearance";  //app the appearance class to it.
	var task = document.createTextNode(sen);
	div.appendChild(task);
	ft_list.insertBefore(div, ft_list.childNodes[0]);
}


function removeTask(id) {
	if (confirm("You sure you wanna get rid of this?") == true)
	{
		var elem = document.getElementById(id);
		data.splice(data.indexOf(elem.textContent), 1);
		elem.parentNode.removeChild(elem);
		document.cookie = "list=" + data.toString();  
	}
}
