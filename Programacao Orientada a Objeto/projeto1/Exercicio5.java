package projeto1;

import java.util.Scanner;

public class Exercicio5 {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        int numero = scan.nextInt();
    
        while(numero != 0){
            System.out.println(numero * numero);
            numero = scan.nextInt();
    }
}
}
