function largestPrimeFactor(number){

    let prima =2, max = 1;

    while(prima <= number){
        if(number % prima === 0){
            max =  prima ;
            number = number/prima
        }
        else{
            prima++;
        }

    }
    return console.log(max);
}

largestPrimeFactor(7);