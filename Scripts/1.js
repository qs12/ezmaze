var totalGen = 19;

var totalMW = 0;

var firstFourMW = 62;

var restMW = 124;

 

for (var workingGen=1; workingGen<=totalGen; workingGen++){
  if (workingGen%2=0){
    if(workingGen<=4){
      totalMW+=firstFourMW;
      console.log("Generator #"+workingGen+" is on, adding "+firstFourMW +"MW, for a total of "+totalMW+" MW!");
    }else{
      totalMW+=restMW;
      console.log("Generator #"+workingGen+" is on, adding "+restMW +"MW, for a total of "+totalMW+" MW!");
    }
  }
  else{
      console.log("Generator #"+workingGen+" is off.");
 }
 }
