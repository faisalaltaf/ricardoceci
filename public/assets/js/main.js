async function ajax(url,type='get',data = '')
{
	let result;
	var processData;
	var contentType;
	if(typeof(data) !== 'string'){
		processData = false;
		contentType = false;
	}
	try {
		result = await $.ajax({
			// headers: {
			// 	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
			// },
			processData: processData,
			contentType: contentType,
			url: url,
			type: type,
			data: data
		});
		return result;
	} catch (error) {
		console.error(error);
	}
}

