import java.io.IOException;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

public class Servidor {
    
private static final int PORT = 9090;

private static ArrayList<GerenciadorDeCliente> clientes = new ArrayList<>();
private static ExecutorService pool = Executors.newFixedThreadPool(10);



public static void main(String[] args) throws IOException {

    while (true){
    ServerSocket ouvinte = new ServerSocket(PORT);
    System.out.println("[SERVIDOR] Esperando a conexão dos clientes...");
    Socket cliente = ouvinte.accept(); 
    System.out.println("[SERVIDOR] Conectado a um cliente!");
    GerenciadorDeCliente conjuntoClientes = new GerenciadorDeCliente(cliente, clientes);
    clientes.add(conjuntoClientes);
    
    pool.execute(conjuntoClientes);
    }
    
}
}

