/*
[Programa 2] Um servidor que receba o conteúdo de um arquivo do computador do cliente para o servidor, ou seja, faça o cliente 
ler o conteúdo de um arquivo denominado "arquivo.txt", envie as informações para o servidor e o mesmo grave o conteúdo recebido em 
um arquivo denominado "recebido.txt". (Alterar código do exemplo 2)
*/

package ClienteServidor;
import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.SocketException;

public class ServidorUDP {
	
    public static void main(String args[]) {
    	
        DatagramSocket s = null;
        
        try {
            s = new DatagramSocket(6789); // cria um socket UDP
            
            byte[] buffer = new byte[1000];
            
            System.out.println("\n\n*** Servidor aguardando request");
            
            // cria datagrama para recepcionar solicitação do cliente
            DatagramPacket req = new DatagramPacket(buffer, buffer.length);
            
            s.receive(req);
            
            System.out.println("*** Request recebido de: " + req.getAddress()+":"+req.getPort());
            
            // envia resposta
            DatagramPacket resp = new DatagramPacket(req.getData(), req.getLength(),req.getAddress(), req.getPort());
            s.send(resp);
            
        } catch (SocketException e) {
            System.out.println("Erro de socket: " + e.getMessage());
        } catch (IOException e) {
            System.out.println("Erro envio/recepcao pacote: " + e.getMessage());
        } finally {
            if (s != null) s.close();
        }
    }
}