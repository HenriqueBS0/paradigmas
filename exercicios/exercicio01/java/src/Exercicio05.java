public class Exercicio05 {
    public static void mostraMaiorEMenorValor(int[] array) {
        int maior = array[0];
        int menor = array[0];

        for (int elemento : array) {
            if(elemento > maior) {
                maior = elemento;
            }

            if(elemento < menor) {
                menor = elemento;
            }
        }

        System.out.println("Maior: " + maior);
        System.out.println("Menor: " + menor);
    }
}
