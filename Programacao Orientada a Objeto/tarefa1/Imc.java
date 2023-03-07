/*
Tendo como dados de entrada a altura de uma pessoa, construa um algoritmo que
calcule seu peso ideal, usando a seguinte fórmula: (72.7*altura) - 58
*/
package tarefa1;

import java.util.Scanner;

public class Imc {
    public static void main(String[] args){
    Scanner imc = new Scanner(System.in);
        
        System.out.println("escreva sua a a sua altura");
        float altura = imc.nextFloat();
        
        System.out.println("seu peso ideal é:" + ((72.7 * altura) - 58));
    }
}
