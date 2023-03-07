import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;


public class Cliente {
    private static final String SERVER_IP = "127.0.0.1";
    private static final int SERVER_PORT = 9090;
    public static void main(String[] args) throws IOException {
        Socket socket = new Socket(SERVER_IP, SERVER_PORT);
        
        ConexaoServidor conServ = new ConexaoServidor(socket);
        BufferedReader teclado = new BufferedReader(new InputStreamReader(System.in));
        PrintWriter out = new PrintWriter(socket.getOutputStream(), true);
        
        new Thread(conServ).start(); 
        while (true){
            System.out.println(">");
            String comando = teclado.readLine();
            if (comando.equals("sair")) break;
            out.println(comando);
        } 
        
        socket.close();
        System.exit(0);
        
}}