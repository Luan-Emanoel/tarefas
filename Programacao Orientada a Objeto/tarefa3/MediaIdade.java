/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package tarefa3;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
public class MediaIdade {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        List<Integer> list = new ArrayList<>();
        int parar = 0;
        int idade;
        int media = 0;
        int soma = 0;
        do{
            System.out.println("digite a sua idade");
            idade = scan.nextInt();
            list.add(idade);
            media ++;
            System.out.println("deseja parar o processo? s = 1 n = 0");
            parar = scan.nextInt();
    }while(parar == 0);
        for (int i : list){
           soma += i;
        }
        if( 0 <=soma / media && soma / media  <= 25){
            System.out.println("a turma é jovem");
        }
            else if( 26 <=soma / media && soma / media  <= 60){
            System.out.println("a turma é jovem");
        }
        else if(soma / media  > 60){
            System.out.println("a turma é idosa");
        }
    }
}
