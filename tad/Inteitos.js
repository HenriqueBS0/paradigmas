class Inteiros {
    
    numeros = [];

    inserir(numero) {
        this.numeros.push(parseInt(numero));
    }

    remover(callback) {
        this.numeros = this.numeros.filter(callback);
    }
    
    unir(numeros) {
        this.numeros.concat(numeros);
    }
    
    
}