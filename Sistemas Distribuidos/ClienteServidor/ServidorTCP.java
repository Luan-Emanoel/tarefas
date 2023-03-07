/*
[Programa 1] Um servidor que atenda aos clientes invertendo a string 
recebida (peça para o cliente digitar a mensagem que será invertida)  (Alterar código do exemplo 1)
*/
package ClienteServidor;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.Scanner;

public class ServidorTCP {

	public static void main(String[] args) throws IOException {

		ServerSocket servidor = new ServerSocket(12345);

		System.out.println("Porta 12345 aberta!");

		Socket cliente = servidor.accept();
                Scanner entrada = new Scanner(cliente.getInputStream());
                byte []b = new byte[20002];
                InputStream is = cliente.getInputStream();
                FileOutputStream fr = new FileOutputStream("./recebido.txt");
                is.read(b, 0, b.length);
                fr.write(b, 0, b.length);
                entrada.close();
		servidor.close();
	}
}

