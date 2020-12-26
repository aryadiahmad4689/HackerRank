function rotLeft(a, d) {

    let i=0;
    while(i < d){
        
        a.push(a[i]);
        if(i == d-1){
            console.log("ok")
        }{
        delete a[i];            
        }
        i++
    }
    let filtered = a.filter(function(el) { return el; });
    return filtered
    
}