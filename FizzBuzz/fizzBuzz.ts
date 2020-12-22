'use strict';

function fizzBuzz(n) {
    // Write your code here
    let i =1
     let tiga =3
     let lima =5
    let arr = []
    while (i <= n){
       
        if(i == tiga && i == lima){
             arr.push('FizzBuzz')  
            tiga =tiga + 3  
            lima =lima +5 
        }else if(i == tiga){
            arr.push('Fizz')  
            tiga =tiga + 3       
        }else if(i == lima){
            arr.push('Buzz')
            lima =lima +5
        }else{
            arr.push(i)
        }
        i++;
    }
    let d =0
    while(d < arr.length){
        console.log(arr[d])
        d++;
    }
}

