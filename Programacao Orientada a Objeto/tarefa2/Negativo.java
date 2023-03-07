/*
Faça um programa que peça um valor e mostre na tela se o valor é positivo ou
negativo.
 */
package tarefa2;

import java.util.Scanner;

public class Negativo {
    public static void main(String[] args){
        Scanner numero = new Scanner(System.in);
        System.out.println("escreva um numero");
        int valor = numero.nextInt();
        if(valor >0){
        System.out.println("o valor digitado é positivo");
        }
        else if(valor == 0) {
        System.out.println("o valor digitado é neutro");
        }
        else{
        System.out.println("O valor digitado é negativo");
        }
    }
}
