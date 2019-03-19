function palindrom(number){
    let max = +[...Array(number)].reduce((a, c) => a+9,"");
    let min = (max+1)/10;
    let res = [];

    for(let i = max ; i >= min ; i--){
        for(let j = max;j>=min;j--){
            let num = i*j;
            let numRevers = [...String(num)].reverse().join('');
            if(num == numRevers){
                res.push(num);
                break;
            }
        }
    }
    return console.log(Math.max(...res));
}
palindrom(3);