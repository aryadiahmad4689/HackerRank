function bigSorting(unsorted) {
    unsorted.sort(function(a, b){return a - b});
let jumlah=unsorted.length;  
let data=[];
for(let x=0;x<jumlah;x++) {
    data.push(unsorted[x]);  
}

return data;
}