from os import fork


def juntarArray(arrayUm, arrayDois) :
    array = []

    for elemento in arrayUm :
        array.append(elemento)

    for elemento in arrayDois :
        array.append(elemento)

    return array