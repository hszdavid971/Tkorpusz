
function showEdit(editableObj) {
	console.log('ok')
	$(editableObj).css("background", "#FFF");
}

function save(editableObj, column, id) {
	$(editableObj)
			.css("background", "#FFF url(loaderIcon.gif) no-repeat center right 5px");
	$.ajax({
		url : "../server/elzaras_save_edit.php",
		type : "POST",
		data : 'column=' + column + '&editval=' + editableObj.innerHTML
				+ '&id=' + id,
		success : function(data) {
			$(editableObj).css("background", "#FDFDFD");
			console.log('sikeres adatmodositas')
		}
	});
}

