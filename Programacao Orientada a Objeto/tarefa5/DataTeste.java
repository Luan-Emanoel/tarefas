/*
 Crie uma classe em Java chamada Data que inclui três informações
como variáveis de instância:
• mês (int),
• dia (int) e
• ano (int).
A classe deve ter métodos get e set para cada variável e um construtor
que inicializa as variáveis e assume que os valores fornecidos são
corretos. Forneça um método displayData que exibe o dia, o mês e o ano
separados por barras normais ( / ). Escreva um aplicativo de teste
chamado DataTeste que demonstra as capacidades da classe Data.
 */
package tarefa5;

public class DataTeste {
    public static void main(String[] args){
        Data data = new Data(20, 07, 2021);
        data.displayData();
    }
}
