package projeto1;

import java.util.Scanner;

public class Exercicio4 {
    public static void main(String[] args){
          Scanner scan = new Scanner(System.in);
          int[] N = new int[10];
          int V = scan.nextInt();
          
          if (V <= 50){
              for(int i = 0; i < N.length; i++){
                  N[i] = V;
                  V *= 2;
              }
            for(int i = 0; i < N.length; i++){
                System.out.println("N[" + i + "] = " + N[i]);
            }
          }
}
}
