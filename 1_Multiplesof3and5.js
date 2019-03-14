var sum = 0;
function multiplesOf3and5(number) {
  // Good luck!

  for(var i = 1; i < number; i++){
    if((i % 3 === 0 )||(i % 5 === 0)||(i % 3 === 0 && i % 5 === 0)){
      sum = sum + i;
    }
  }
  return console.log(sum);
}

multiplesOf3and5(1000);