/*
Faça um programa que faça 5 perguntas para uma pessoa sobre um crime. As
perguntas são: .
• "Telefonou para a vítima?"
• "Esteve no local do crime?"
• "Mora perto da vítima?"
• "Devia para a vítima?"
• "Já trabalhou com a vítima?"
O programa deve no final emitir uma classificação sobre a participação da pessoa no crime.
Se a pessoa responder positivamente a 2 questões ela deve ser classificada como "Suspeita",
entre 3 e 4 como "Cúmplice" e 5 como "Assassino". Caso contrário, ele será classificado como
"Inocente".
 */
package tarefa2;

import java.util.Scanner;


public class Crimes {
   public static void main(String[] args){
    Scanner numero = new Scanner(System.in);
    System.out.println("Estamos fazendo uma investigação criminal, favor responder as perguntas com 1 para sim e 0 para não \n");
    System.out.println("Telefonou para a vítima?");
    int res1 = numero.nextInt();
    System.out.println("Esteve no local do crime?");
    int res2 = numero.nextInt();
    System.out.println("Mora perto da vítima?");
    int res3 = numero.nextInt();
    System.out.println("Devia para a vítima?");
    int res4 = numero.nextInt();
    System.out.println("Já trabalhou com a vítima?");
    int res5 = numero.nextInt();
    int resultado = res1 + res2 + res3 + res4 + res5;
    
    if (resultado < 2){
        System.out.println("Inocente");
    }
    else if (resultado == 2){
        System.out.println("Suspeita");
    }
    else if (3 <= resultado && resultado <= 4){
        System.out.println("Cúmplice");
    }
    else if (resultado >= 5){
        System.out.println("Asssassino");
    }
} 
}
