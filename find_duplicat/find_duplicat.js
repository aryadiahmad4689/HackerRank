function findDuclicat(arr){

    let count = arr.length
    let counter =0;
    for(let i =0; i <count; i++){

        for(j =i+1; j <count; j++){
            console.log(arr[i],arr[j])
            if(arr[j] == arr[i]){
                counter++
            }
        }
    }

    if(counter > 0){
        return true
    }else return false

}

let data = [2,15,26,1];


console.log(findDuclicat(data));


