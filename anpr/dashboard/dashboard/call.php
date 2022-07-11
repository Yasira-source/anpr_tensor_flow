<!DOCTYPE html>
<html>
<head>
<script type='text/javascript' src='https://code.jquery.com/jquery-3.5.1.min.js'></script>

</head>
<body>

<h2>Demo JavaScript in Head</h2>

<p id="demo">A Paragraph.</p>

<button type="button" onclick="myFunction()">Try it</button>
<script>
function myFunction() {


/* to create a multipart/form-data encoded request body, you have to use javascript FormData class */
var formData = new FormData(); 

/* append the location of your device, not required, but can speed up the recognition process */
formData.append('location', 'HUN'); 

/* append the maximum number of recognitions, not required, but if you want us to return more license plates per one image, than increase this number */
formData.append('maxreads', 1); 

/* append the name of the service, can be 'anpr' or 'mmr', it is set to 'mmr' by default */
formData.append('service', 'mmr'); 

/* an image file selected from your computer by clicking the browse button of a form */
formData.append('image', 'http://localhost/anpr_web/dashboard/assets/np/Number-Plates.jpg'); 

/* set up the request */
var settings = {
	async: true,
	crossDomain: true,
	url: 'https://api-eu.anpr-cloud.com/free/afr',
	method: 'POST',
	processData: false,
	headers: {
		'X-Api-Key': 'thinsrBZtw14ZQC4g57bL6TsSd7rYibTIgkSo2Lh'
	},
	contentType: 'multipart/form-data',
	data: formData
};

/* make the call */
try {
	var req = $.ajax(settings);
	// working...
	req.done(function (response) {
		// done, response received
		console.log('Response received: ' + JSON.stringify(response));
	});
	req.fail(function( jqXHR, textStatus) {
		// error occured (e.g. invalid api key specified)
		console.log('Request failed: '+jqXHR.responseText);
	});
}
catch (e) {
	// error handling
	console.log(e);
}

}
</script>
</body>
</html> 
