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

public class Data {
    private int dia;
    private int mes;
    private int ano;
    
    public Data (int dia, int mes , int ano){
        this.dia = dia; 
        this.mes = mes;
        this.ano = ano;
    }

    /**
     * @return the dia
     */
    public int getDia() {
        return dia;
    }

    /**
     * @param dia the dia to set
     */
    public void setDia(int dia) {
        this.dia = dia;
    }

     /**
     * @return the mes
     */
    public int getMes() {
        return mes;
    }

    /**
     * @param mes the mes to set
     */
    public void setMes(int mes) {
        this.mes = mes;
    }
    
    /**
     * @return the ano
     */
    public int getAno() {
        return ano;
    }

    /**
     * @param ano the ano to set
     */
    public void setAno(int ano) {
        this.ano = ano;
    }
    public String displayData(){
        System.out.println(dia +"/"+ mes +"/"+ ano);
        
        return "data";
    }
}
