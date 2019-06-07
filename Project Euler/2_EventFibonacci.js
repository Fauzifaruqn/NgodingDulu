function fiboEventSum(n){
    let pertama = 1;
    let kedua = 2;
    let sum = 2;
    let fibNum;

    if(n <= 1)
        return sum;
    for(let i = 2 ; i <= n ; i++){
        fibNum = pertama + kedua;
        pertama = kedua;
        kedua = fibNum;
        if(fibNum % 2 == 0)
            sum+=fibNum;
    }


    return console.log(sum);
}

fiboEventSum(10);
