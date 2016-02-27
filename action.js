function store_data()
{
	
	jQuery.ajax({
		method: "POST",
		url: "saveData.php",
		success: function(response){ 
				alert(response);
			}
	});
}