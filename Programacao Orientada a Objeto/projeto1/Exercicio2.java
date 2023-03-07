package projeto1;

import java.util.Scanner;

public class Exercicio2 {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        int N = scan.nextInt();
        int[] lista = new int[N];
        
        for ( int i = 0; i < N; i++ ){lista[i] = scan.nextInt();}
        
        for ( int i = 0; i < N; i++ ){
            if (lista[i] < 0){
                System.out.println(lista[i]);
            }
        }
        
}
}
