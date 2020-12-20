function timeConversion(s) {
    /*
     * Write your code here.
     * 
     */
    let jamS = s.substring(0,2);
    let jam =0; 
    if(s.substring(8) == "PM"){
        if(jamS == "12"){
            return s.substring(0,8)
        }
        jam = parseInt(jamS) + 12;
        return jam+s.substring(2,8)    
    }else if(s.substring(8) == "AM"){
        if(jamS == "12"){
            return "00"+s.substring(2,8)   
        }
        return s.substring(0,8);
    }
}
