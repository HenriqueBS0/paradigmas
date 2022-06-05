public class Exercicio04 {
    public static int getPosicaoValor(String[] array, String valor) {
        for (int i = 0; i < array.length; i++) {
            if(array[i] == valor) {
                return i;
            }
        }

        System.out.println("Valor não encontrado");
        return -1;
    }
}
