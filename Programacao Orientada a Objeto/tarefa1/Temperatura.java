/*
Faça um programa que peça a temperatura em graus Fahrenheit, transforme e
mostre a temperatura em graus Celsius.
• C = (5 * (F-32) / 9).
 */
package tarefa1;
import java.util.Scanner;
public class Temperatura {
    public static void main (String[] args){
        Scanner clima = new Scanner(System.in);
        
        System.out.println("escreva sua a temperatura em Fahrenheits");
        float fahrenheit = clima.nextFloat();
        
        System.out.println("a temperatura em celsius é:" + 5*(fahrenheit - 32)/ 9);
    }
}
