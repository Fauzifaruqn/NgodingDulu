function lestCommonMultiple(x,y){
    return (x*y)/greatestCommon(x,y);
}
function greatestCommon(x, y){
    if (y === 0) return x;
    return greatestCommon(y, x%y);
}
function smallestMultiple(n){
    let maxLCM = 1;
    for (let i = 2; i <= n; i++){
      maxLCM = lestCommonMultiple(maxLCM, i);
    }
    return console.log(maxLCM);
}
smallestMultiple(5);