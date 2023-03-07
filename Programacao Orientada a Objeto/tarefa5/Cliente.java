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

public class Cliente {
    private int codCliente;
    private String nomeCliente;
    
    public Cliente(int cod){
        this.codCliente = cod;
    }

    /**
     * @return the codCliente
     */
    public int getCodCliente() {
        return codCliente;
    }

    /**
     * @return the nomeCliente
     */
    public String getNomeCliente() {
        return nomeCliente;
    }

    /**
     * @param nomeCliente the nomeCliente to set
     */
    public void setNomeCliente(String nomeCliente) {
        this.nomeCliente = nomeCliente;
    }
}
