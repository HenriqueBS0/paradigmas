function juntarArray(arrayUm, arrayDois) {
    const array = [];
    
    arrayUm.forEach(elemento => {
        array.push(elemento);
    });

    arrayDois.forEach(elemento => {
        array.push(elemento);
    });

    return array;
}