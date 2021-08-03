package main

import "math"

func angryProfessor(k int32, a []int32) string {
	// Write your code here
	var trueOrFalse string
	var counter int32
	for i := 0; i < len(a); i++ {
		if math.Signbit(float64(a[i])) == true || a[i] == 0 {
			counter++
		}
	}

	if counter < k {
		trueOrFalse = "YES"
	} else {
		trueOrFalse = "NO"
	}

	return trueOrFalse

}
