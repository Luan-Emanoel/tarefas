/*
Escreva uma classe para representar um Aluno. Adicione
atributos relacionados às características de um Aluno, como
nome, matricula, curso que está matriculado, nome de 3
disciplinas que está cursando e as notas dessas 3 disciplinas.
Desenvolva um método para verificar se o aluno está aprovado
(nota maior ou igual a 7) em uma determinada disciplina.
Escreva um programa para testar essa classe, que pede as
informações do aluno ao usuário e ao final informa o nome
das disciplinas, mostra as notas e mostra se o aluno foi
aprovado ou não. 
 */
package tarefa4;

import java.util.Scanner;

public class TreinoClasses {
    public static void main(String[] args){
        Scanner scan = new Scanner(System.in);
        Aluno aluno = new Aluno();
        
        System.out.println("Digite seu nome");
        aluno.nome = scan.next();
        System.out.println("digite o numero da matricula");
        aluno.matricula = scan.next();
        System.out.println("digite seu curso");
        aluno.curso = scan.next();
        
        System.out.println("digite a primeira disciplina");
        aluno.disciplina1 = scan.next();
        System.out.println("digite a segunda disciplina");
        aluno.disciplina2 = scan.next();
        System.out.println("digite a terceira disciplina");
        aluno.disciplina3 = scan.next();
        
        System.out.println("digite as três notas de "+ aluno.disciplina1);
        for (int i = 0; i < aluno.notadisciplina1.length; i++){aluno.notadisciplina1[i] = scan.nextInt();}
        System.out.println("digite as três notas de "+ aluno.disciplina2);
        for (int i = 0; i < aluno.notadisciplina2.length; i++){aluno.notadisciplina2[i] = scan.nextInt();}
        System.out.println("digite as três notas de "+ aluno.disciplina3);
        for (int i = 0; i < aluno.notadisciplina3.length; i++){aluno.notadisciplina3[i] = scan.nextInt();}
        
        System.out.println("\nVerificando a nota do aluno "+ aluno.nome +" da matricula \""+ aluno.matricula +"\" cursando "+ aluno.curso+ "\n");
        System.out.println("A nota final de "+ aluno.disciplina1 +" é: "+ aluno.media(aluno.notadisciplina1) +" fazendo o aluno "+ aluno.resultado(aluno.media(aluno.notadisciplina1)) +" na materia");
        System.out.println("A nota final de "+ aluno.disciplina2 +" é: "+ aluno.media(aluno.notadisciplina2) +" fazendo o aluno "+ aluno.resultado(aluno.media(aluno.notadisciplina2)) +" na materia");
        System.out.println("A nota final de "+ aluno.disciplina3 +" é: "+ aluno.media(aluno.notadisciplina3) +" fazendo o aluno "+ aluno.resultado(aluno.media(aluno.notadisciplina3)) +" na materia");
}
}
