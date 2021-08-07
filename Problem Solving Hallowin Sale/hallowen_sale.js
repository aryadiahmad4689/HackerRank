function howManyGames(p, d, m, s) {
    // Return the number of games you can buy
    // p = harga game
    // d = pengurangan
    // m = minimal pengurangan
    // s = harga yang di inginka
    let nilai=p;
    let counter=0;
    while(nilai <= s){
         p -= d;
         if(p < m){
            nilai += m
            // console.log(nilai)
        counter++;   
         }else{
            nilai += p    
            // console.log(nilai)            
            counter++;          
         }
         
    }
    return counter

}