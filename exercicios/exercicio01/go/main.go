package main

import (
	"fmt"
)

func main() {
	mostraMaiorMenor([]int{1, 2})
}

//Exercicio01
func soma(numeroUm float64, numeroDois float64) float64 {
	return numeroUm + numeroDois
}

//Exercicio02
func desconto(preco float32, percentual float32) float32 {
	return preco * (1 - (percentual / 100))
}

//Exercicio03
func juntarArrays(arrayUm []int, arrayDois []int) []int {
	return append(arrayUm, arrayDois...)
}

//Exercicio04
func retornaPosicao(array []int, valor int) int {
	for i := 0; i < len(array); i++ {
		if array[i] == valor {
			return i
		}
	}

	fmt.Print("Valor não encontrado\n")
	return -1
}

//Exercicio05
func mostraMaiorMenor(array []int) {
	maior := array[0]
	menor := array[0]

	for i := 0; i < len(array); i++ {
		if array[i] > maior {
			maior = array[i]
		}

		if array[i] < menor {
			menor = array[i]
		}
	}

	fmt.Print("Maior: ", maior)
	fmt.Print("\nMenor: ", menor)
}
