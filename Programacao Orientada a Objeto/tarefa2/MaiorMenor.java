/*
Faça um programa que leia três números e mostre o maior e o menor deles.
 */
package tarefa2;

import java.util.Scanner;

public class MaiorMenor {
    public static void main(String[] args){
    Scanner numero = new Scanner(System.in);
    System.out.println("por favor digite o primeiro numero :");
    int primeiro = numero.nextInt();
    System.out.println("por favor digite o segundo numero :");
    int segundo = numero.nextInt();
    System.out.println("por favor digite o terceiro numero :");
    int terceiro = numero.nextInt();
    int maior = maior(primeiro, segundo, terceiro);
    int menor = menor(primeiro, segundo, terceiro);
    System.out.printf("o maior entre os tres numeros %d, %d, e %d é : %d %n", primeiro, segundo, terceiro, maior);
    System.out.printf("o menor entre os tres numeros %d, %d, e %d é : %d %n", primeiro, segundo, terceiro, menor);
    }
public static int maior(int primeiro, int segundo, int terceiro) {
    int max = primeiro;
    if (segundo > max) {
        max = segundo;
    }   
    if (terceiro > max) { 
        max = terceiro;
    }   return max;
}
public static int menor(int primeiro, int segundo, int terceiro) {
    int min = primeiro;
    if (segundo < min) {
        min = segundo;
    }   
    if (terceiro < min) { 
        min = terceiro;
    }   return min;
}
}
