function searchRanked(arr,search, length){
    if(arr[length-1] != search){
       if(search > arr[length-1]){
          return searchRanked(arr,search,length-1)
      }else{
          return length +1
      }  
    }else{
        return length
    }
     
}

function climbingLeaderboard(ranked, player) {
        var unique = ranked.filter((v, i, a) => a.indexOf(v) === i);

        let countRanked = unique.length
        let countPlayer = player.length
        let data=[]
        for(let j=0; j<countPlayer; j++){
            data.push(searchRanked(unique,player[j],countRanked))
        }
        return data 
}
