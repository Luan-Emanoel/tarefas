/*
Crie uma classe Cliente, considerando que esta deva possuir :
Construtor: O Construtor da classe deve possuir como parâmetro somente o
código do Cliente
Atributos
• Código do Cliente
• Nome Completo
Métodos
• Inserção do nome do cliente
• Retorna do nome do cliente
• Retorna Código do Cliente
 */
package tarefa5;

public class ClienteTeste {
    public static void main(String[] args){
    Cliente cliente1 = new Cliente(366331);
    Cliente cliente2 = new Cliente(364105);

    System.out.println(cliente1.getNomeCliente());
    System.out.println(cliente2.getNomeCliente());

    cliente1.setNomeCliente("Tyler Martins");
    cliente2.setNomeCliente("Leonardo Lopez Perez");

    System.out.println(cliente1.getNomeCliente());
    System.out.println(cliente2.getNomeCliente());
    }
}
