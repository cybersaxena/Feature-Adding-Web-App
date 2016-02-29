

function store_data()
{
	var title, description, client, priority, target, url, area, error=0;

	title = document.getElementById("title").value;
	if(title == ""){
		document.getElementById("tl").innerHTML = "* required";
		error=1;
	}
	description = document.getElementById("description").value;
	if(description == ""){
		document.getElementById("dl").innerHTML = "* required";
		error=1;
	}
	var temp = document.getElementById("client");
	client = temp.options[temp.selectedIndex].value;
	if(client == ""){
		document.getElementById("cl").innerHTML = "* required";
		error=1;
	}
	priority = document.getElementById("priority").value;
	var regex=/^[0-9]+$/;
	if(!priority.match(regex)){
		document.getElementById("p").innerHTML = "";
		document.getElementById("pl").innerHTML = "* required";
		error=1;
	}
	target = $("#datepicker").val();
	if(target == ""){
		document.getElementById("dtl").innerHTML = "* required";
		error=1;
	}
	url = document.getElementById("url").value;
	temp = document.getElementById("area");
	area = temp.options[temp.selectedIndex].value;
	if(area == ""){
		document.getElementById("al").innerHTML = "* required";
		error=1;
	}

	if(error == 1)
		return;

	jQuery.ajax({
		method: "POST",
		url: "saveData.php",
		data: {tl:title, des:description, cl:client, pr:priority, tr:target, ur:url, ar:area},
		success: function(response){ 
				alert(response);
				window.location.reload(true);
			}
	});
}

function getPriority(id)
{
	var temp = document.getElementById(id);
	var client = temp.options[temp.selectedIndex].text;
	jQuery.ajax({
      		url: "getPriority.php",
      		type: "GET",
		data: {client_val:client},
   		success: function(data) {
      				document.getElementById("p").innerHTML = "1=highest priority. Increasing number decreases priority.This client has upto priority "+ data + " found in DB.";
      			},
		error: function() { alert("Error occured while retrieving max priority number for this client."); }
   	}); 
}

function show_feature()
{
	var temp = document.getElementById("select_client");
	var client = temp.options[temp.selectedIndex].value;
	
	if(client==""){
		alert("Please select client");
		return;
	}

	jQuery.ajax({
      		url: "getData.php",
      		type: "GET",
		data: {select_client:client},
   		success: function(data) {
      				document.getElementById("d").innerHTML = data;
      			},
		error: function() { alert("Error occured to retrieve data for this client."); }
   	}); 
}