$(document).ready(function() {  //checks if page is
var data = [];
getCookie();
console.log(data);

for (t in data) {
	addTask(data[t]);
}

function getCookie() {
	var cookie = document.cookie.split(';');
	for (c in cookie) {
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

function addCookie() {
	document.cookie = "list=" + data.toString();
}

function addTask(t) {
	$('#ft_list').prepend("<div class=\"task\">" + t + "</div>");
	

	/*
	const div = document.createElement("div");
	div.className="box";
	di.innerText = t;
	const list = document.getElementById("ft_list");
	list.appendChild(div);
	*/


}

$('div .task').click(function(del) {
	if (confirm("You sure you wanna get rid of this?") == true) {
		$(del.target).remove();
		data.splice(data.indexOf(del.target.innerHTML), 1);
		addCookie();
	}
});

$('#add').click(function add() {
	var sen = prompt("Please enter your task");
	
	if (sen.trim() == "")
	{
		alert("You gotta type something!");
		return ;
	}


	if (sen != null) {
		data.push(sen);
		addTask(sen);
		addCookie();
	}
});

});

//run:   python -m SimpleHTTPServer 8000
