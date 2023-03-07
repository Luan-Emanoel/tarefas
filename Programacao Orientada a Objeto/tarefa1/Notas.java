/*
Faça um programa que peça as 4 notas bimestrais e mostre a média.
*/
package tarefa1;

import java.util.Scanner;

public class Notas {
  public static void main(String[] args){
    Scanner notas = new Scanner(System.in);
    
    System.out.println("escreva sua primeira nota");
    float nota1 = notas.nextFloat();
    System.out.println("escreva sua segunda nota");
    float nota2 = notas.nextFloat();
    System.out.println("escreva sua terceira nota");
    float nota3 = notas.nextFloat();
    System.out.println("escreva sua quarta nota");
    float nota4 = notas.nextFloat();
    
    System.out.println("a media foi:"+ (nota1+nota2+nota3+nota4) / 4 );
    }  
}
