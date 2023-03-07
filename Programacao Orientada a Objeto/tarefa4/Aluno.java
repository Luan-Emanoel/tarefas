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

public class Aluno {
    String nome;
    String matricula;
    String curso;
    
    String disciplina1;
    String disciplina2;
    String disciplina3;
        
    int[] notadisciplina1 = new int[3];
    int[] notadisciplina2 = new int[3];
    int[] notadisciplina3 = new int[3];
        
    int media(int[] disciplina){
        int notafinal = 0;
        for (int i = 0; i < disciplina.length; i++){notafinal += disciplina[i];}
        notafinal = notafinal /3;
        
        return notafinal; 
}
    String resultado (int media){
    String resultado = "reprovado";
    if(media >= 7){resultado = "aprovado";}
    return resultado;
}   
}
