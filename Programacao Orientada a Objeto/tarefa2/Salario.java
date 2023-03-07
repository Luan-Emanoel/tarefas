/*
As Organizações Tabajara resolveram dar um aumento de salário aos seus
colaboradores e lhe contrataram para desenvolver o programa que calculará os
reajustes. Faça um programa que recebe o salário de um colaborador e o reajuste
segundo o seguinte critério, baseado no salário atual:
• salários até R$ 280,00 (incluindo) : aumento de 20%
• salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
• salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
• salários de R$ 1500,00 em diante : aumento de 5%
Após o aumento ser realizado, informe na tela:
• o salário antes do reajuste;
• o percentual de aumento aplicado;
• o valor do aumento;
• o novo salário, após o aumento. 
 */
package tarefa2;

import java.util.Scanner;

public class Salario {
    public static void main(String[] args){
        Scanner numero = new Scanner(System.in);

        System.out.println("salário do colaborador: ");
        double salario = numero.nextDouble();
        double percentual;

        if(salario <=280){
            percentual = 20;
        }
        else if (salario <= 700){
            percentual = 15;
        }
        else if (salario <= 1500){
            percentual = 10;
        }
        else {percentual = 5;}
            System.out.println("salario original: R$" + salario);
            System.out.println("percentual: " + percentual + "%");
            percentual = percentual/100;
            double aumento = percentual * salario;
            double novoSalario = salario + aumento;
            System.out.println("aumento: R$" + aumento);
            System.out.println("novo salário: R$" + novoSalario);
    } 
}
