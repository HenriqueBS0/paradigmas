def getPosicaoValor(array, valor):

    posicao = 0

    for elemento in array :
        if valor == elemento :
            return posicao 
        
        posicao =+ 1

    return "Valor não encontrado"