
 console.log("There are " + trainWhistles + " in each one of all " +totalTrains+ " running thru this station");
 var trainsOperational = 8
 var trainNumber =1;
 while (trainNumber<= trainsOperational){
 	console.log("Train #"+trainNumber+" is running.");
 	trainNumber++;
 };

var totalTrains=12;
for (var trainNumber=1; trainNumber <= trainsOperational; trainNumber++;){
	console.log("Train #" + trainNumber+" is opertional")
};


for (var stoppedTrain= trainsOperational+1; stoppedTrain<= totalTrains; stoppedTrain++){
	console.log)"Trains #" + stoppedTrain+" are not running today");

}


if (trainsOperational>0){
	if (trainsOperational==totalTrains){
		console.log ("All trains are running today!")
	} else{
		for (var trainNumber=1; trainNumber<= totalTrains; trainNumber++){
			console.log ("Train #"+ trainNumber + " is running today")
		}
	}

}else{
	console.log ("No trains are operational today..")
}

var value1=4;
var value2=9;
var value3=3;
var dayOfWeek = "Friday";

if(value2>=value1){
	console.log(value1 + " is less than"+ value2);
}	else if (value2==value1 || value2==value3){
		console.log(value1 + " is equal to" + value2);

} 
	else if(value2==4 && dayOfWeek=="Sunday"){
		console.log ("Train #3 is running");

	}else {
		console.log(value1 +" is more than"+ value2);
}


alert("Hey!");

confirm("Do you want to proceesd?");

prompt("Want to exit?");

var userName = prompt("What is your name?");

confirm("Are you sure you "+userName+"?");


typeof userName


var gotName = false;
while (gotName==false){
	var userName = prompt("What is ur name?");

	if( confirm("Are you sure you are "+userName+"?") ){
		alert("'Sup "+userName+"!");
		gotName = true;
	}
}
