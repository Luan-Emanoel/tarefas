/*
[Programa 1] Um servidor que atenda aos clientes invertendo a string recebida
(peça para o cliente digitar a mensagem que será invertida)  (Alterar código do exemplo 1)
*/

package ClienteServidor;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.OutputStream;
import java.io.PrintStream;
import java.net.Socket;
import java.net.UnknownHostException;
import java.util.Scanner;

public class ClienteTCP {

	public static void main(String[] args) throws UnknownHostException, IOException {
		
		Socket cliente = new Socket("127.0.0.1", 12345);
		
		System.out.println("O cliente se conectou ao servidor!");

		Scanner teclado = new Scanner(System.in);
		
		PrintStream saida = new PrintStream(cliente.getOutputStream());
                FileInputStream fr = new FileInputStream("./arquivo.txt");
                byte b[] = new byte [2002];
                fr.read(b,0,b.length);
                OutputStream os = cliente.getOutputStream();
                os.write(b,0,b.length);
		saida.close();
		teclado.close();
	}
}



