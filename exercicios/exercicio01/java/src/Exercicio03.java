public class Exercicio03 {
    public static String[] juntarArray(String[] arrayUm, String[] arrayDois) {
        String[] array = new String[arrayUm.length + arrayDois.length];
        
        for (int i = 0; i < array.length; i++) {
            if(i < arrayUm.length) {
                array[i] = arrayUm[i];
            }
            else {
                array[i] = arrayDois[i - arrayUm.length];
            }
        }

        return array; 
    }
}
