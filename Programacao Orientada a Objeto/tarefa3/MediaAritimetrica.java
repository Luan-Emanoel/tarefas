/*
Faça um programa que calcule o mostre a média aritmética de N
notas.
 */
package tarefa3;

import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class MediaAritimetrica {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        List<Integer> list = new ArrayList<>();
        int parar = 0;
        int nota;
        int soma = 0;
        int media = 0;
        do{
        
        System.out.println("digite uma nota");
        nota = scan.nextInt();
        list.add(nota);
        media ++;
        System.out.println("deseja parar o processo? s = 1 n = 0");
        parar = scan.nextInt();
        }while(parar == 0);
        for (int i : list){
            soma += i; 
        }
        System.out.println("a media aritimetica das notas é: " +  (soma / media));
    }
}
