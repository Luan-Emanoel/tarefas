/*
[Programa 2] Um servidor que receba o conteúdo de um arquivo do computador do cliente para o servidor, ou seja, faça o cliente 
ler o conteúdo de um arquivo denominado "arquivo.txt", envie as informações para o servidor e o mesmo grave o conteúdo recebido em 
um arquivo denominado "recebido.txt". (Alterar código do exemplo 2)
*/
package ClienteServidor;
import java.io.IOException;
import java.net.DatagramPacket;
import java.net.DatagramSocket;
import java.net.InetAddress;
import java.net.SocketException;

public class ClienteUDP {
	public static void main(String args[]) {

		DatagramSocket s = null;

		try {

			String servidor = "localhost";

			int porta = 6789;

			String msg = "MENSAGEM TESTE";

			if (args.length > 0) servidor = args[0];
			if (args.length > 1) porta = Integer.parseInt(args[1]);
			if (args.length > 2) msg = args[2];

			byte[] m = msg.getBytes(); // transforma arg em bytes

			InetAddress serv = InetAddress.getByName(servidor);

			s = new DatagramSocket(); // cria um socket UDP

			System.out.println("* Socket criado na porta: " + s.getLocalPort());

			DatagramPacket req = new DatagramPacket(m, msg.length(), serv, porta);

			s.send(req); // envia datagrama contendo a mensagem m

			System.out.println("* Datagrama enviado...: " + msg);

			byte[] buffer = new byte[1000];

			DatagramPacket resp = new DatagramPacket(buffer, buffer.length);

			s.setSoTimeout(10000); // timeout em ms

			s.receive(resp); // aguarda resposta do servidor - bloqueante

			System.out.println("* Resposta do servidor: " + new StringBuilder(new String(resp.getData(), 0, resp.getLength())).reverse().toString());

		} catch (SocketException e) {
			// timeout, erro na criação
			System.out.println("! Erro socket: " + e.getMessage());
			
		} catch (IOException e) {
			System.out.println("! Erro envio/recepcao do pacote: " + e.getMessage());
			
		} finally {
			if (s != null) s.close();
		}
	}

}