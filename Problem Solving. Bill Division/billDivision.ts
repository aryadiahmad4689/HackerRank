function bonAppetit(bill, k, b) {
    let arr =[];
    
    for (let i =0; i<bill.length; i++){
        // console.log(bill[i])
        if(bill[i] != bill[k]){
            // console.log(bill[i]);
            arr.push(bill[i])
        }
        
    }
    
        let totalArr = sum(arr);
        let bayaranAnton = totalArr/2;
        let hasilBayar = b - bayaranAnton;
        
        if(hasilBayar == 0){
            console.log("Bon Appetit");
        }else{
            console.log(hasilBayar);
        }
    
    }
    
    function sum(arr){
        let total =0;
        for(let i=0; i<arr.length;i++){
            total += arr[i];
        }
        
        return total;
    }