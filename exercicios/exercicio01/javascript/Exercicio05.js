function getMaiorEMenorElemento(array) {
    const retorno = {
        maior: array[0],
        menor: array[0]
    };

    array.forEach(elemento => {
        if(elemento > retorno.maior) {
            retorno.maior = elemento;
        }

        if(elemento < retorno.menor) {
            retorno.menor = elemento;
        }
    });

    return retorno;
}