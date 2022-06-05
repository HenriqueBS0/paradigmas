function getPosicaoValor(array, valor) {
    for (let index = 0; index < array.length; index++) {
        if(valor == array[index]) {
            return index;
        }
    }

    return "Valor não encontrado"
}