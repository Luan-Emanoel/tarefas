/*
 Faça um programa que peça para o usuário informar uma
quantidade de números e quais são esses numeros. Imprima a soma
dos números informados pelo usuário.
 */
package tarefa3;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Numeros {
    public static void main (String[] args){
        Scanner scan = new Scanner(System.in);
        List<Integer> list = new ArrayList<>();

        int parar = 0;

        int numero;
        int soma = 0;
        System.out.println("digite quantos numeros devem ser somados: ");
        int parar2 = scan.nextInt();
        do{
            System.out.println("digite um numero a ser somado: ");
            numero = scan.nextInt();
            list.add(numero);
            parar ++;
        }while (parar != parar2);
            for (int i : list){
                   soma += i;
            }
            System.out.println("a soma dos numeros é: "+ soma);
        }
}
