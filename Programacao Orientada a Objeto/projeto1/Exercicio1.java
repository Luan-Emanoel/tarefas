package projeto1;

import java.util.Scanner;

public class Exercicio1 {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        int idade = scan.nextInt();
        float total = 0;
        int media = 0;

        if (idade < 0){System.out.println("impossivel calcular");}

        while (idade >= 0){
            total += idade;
            media ++;
            idade = scan.nextInt();
        }
        if (media >= 1){System.out.println(total/media);}
}
}
