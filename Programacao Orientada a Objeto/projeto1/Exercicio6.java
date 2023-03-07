package projeto1;

import java.util.Locale;
import java.util.Scanner;

public class Exercicio6 {
    public static void main(String[] args){
        
        Scanner scan = new Scanner(System.in); 
        scan.useLocale(Locale.US);
        Locale.setDefault(Locale.US);
        int alunos = scan.nextInt();
        
        float[][] semestre = new float[alunos][3]; 
        
        for(int coluna = 0; coluna < alunos; coluna++){
            for (int linha = 0; linha < 3; linha++){
                semestre[coluna][linha] = scan.nextFloat();
                
                if (semestre[coluna][0] > 30){semestre[coluna][0] = 30;}
                else if (semestre[coluna][1] > 35){semestre[coluna][1] = 35;}
                else if (semestre[coluna][2] > 35){semestre[coluna][2] = 35;}
            }
            
        }
        for(int coluna = 0; coluna < alunos; coluna++){
                System.out.println(String.format("%.2f", semestre[coluna][0] + semestre[coluna][1] + semestre[coluna][2]));
        }
}
}