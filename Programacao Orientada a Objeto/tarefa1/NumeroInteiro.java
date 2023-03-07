/*
Faça um programa que peça 2 números inteiros e um número real. Calcule e
mostre:
a) o produto do dobro do primeiro com metade do segundo .
b) a soma do triplo do primeiro com o terceiro.
c) o terceiro elevado ao cubo. 
 */
package tarefa1;
import java.util.Scanner;
public class NumeroInteiro {
    public static void main(String[] args){
    Scanner numero = new Scanner(System.in);
    
        System.out.println("escreva um numero inteiro");
        int inteiro1 = numero.nextInt();
        System.out.println("escreva outro numero inteiro");
        int inteiro2 = numero.nextInt();
        System.out.println("escreva um numero real");
        double real = numero.nextDouble();
        
        System.out.println("o produto do dobro do primeiro com metade do segundo: " + (inteiro1*2) * (inteiro2/2) );
        System.out.println("a soma do triplo do primeiro com o terceiro: "+ (inteiro1*3) + real );
        System.out.println("o terceiro elevado ao cubo: "+ (real * real * real) );
    }
}
