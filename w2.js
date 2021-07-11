fetch('http://api.openweathermap.org/data/2.5/weather?id=536203&appid=179288fd1aa430264f96b18a0750c2ce')
.then(function (resp) {return resp.json() })
.then(function(data){
	console.log(data);
	document.querySelector('.city2').innerHTML = data.name;
	document.querySelector('.temp2').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
	document.querySelector('.details2').innerHTML = data.weather[0]['main'];


})

.catch(function(){
	//catch any errors
});
