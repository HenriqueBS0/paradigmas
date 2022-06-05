def getMaiorEMenorValor(array):
    maior = array[0]
    menor = array[0]

    for elemento in array:
        if elemento > maior:
            maior = elemento

        if elemento < menor:
            maior = maior

    print(maior)
    print(menor)