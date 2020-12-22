function camelcase(s) {
    let huruf = s.split('');
    let i = 0;
    let jumlah =0;
    
    while(i < s.length){
        if(huruf[i] == huruf[i].toUpperCase()){
            jumlah++;
        }
        i++
    }
    return jumlah+1;
}
