import java.io.BufferedReader;
import java.io.File;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.PrintWriter;
import java.net.Socket;
import java.nio.file.Files;
import java.util.ArrayList;
import javax.swing.JFileChooser;
import javax.swing.filechooser.FileSystemView;


public class GerenciadorDeCliente implements Runnable{
    private Socket cliente;
    private BufferedReader in;
    private PrintWriter out;
    private ArrayList<GerenciadorDeCliente> clientes;
    
    public GerenciadorDeCliente(Socket clientSocket, ArrayList<GerenciadorDeCliente> clientes) throws IOException{
        this.cliente = clientSocket;
        this.clientes = clientes;
        in = new BufferedReader(new InputStreamReader(cliente.getInputStream()));
        out = new PrintWriter(cliente.getOutputStream(), true);
        
    }
@Override
public void run(){
    try {
        while(true){
            String request = in.readLine();
            if (request.contains("escolher arquivo")){
                
                out.println("Indo para o arquivo");
                
                File f = new File("./");
                JFileChooser j = new JFileChooser(f, FileSystemView.getFileSystemView());
                j.showSaveDialog(null);
                out.println("O arquivo que você escolheu foi: " + j.getSelectedFile().getName());
                
                String conteudoA = Files.readString(j.getSelectedFile().toPath());
                int corretas = 0;
                int erradas = 0;

                if (conteudoA.contains("1-FVFF")){
                    corretas ++;
                }else{
                    erradas ++;
                }
                if (conteudoA.contains("2-VVFV")){
                    corretas ++;
                }else{
                    erradas ++;
                }
                if (conteudoA.contains("3-FVFV")){
                    corretas ++;
                }else{
                    erradas ++;
                }
                if (conteudoA.contains("4-VVVV")){
                    corretas ++;
                }else{
                    erradas ++;
                }
                if (conteudoA.contains("5-FFFV")){
                    corretas ++;
                }else{
                    erradas ++;
                }
                       
            out.println("Número de acertos: " +corretas + " Número de erros :" + erradas );        
            }else{
                out.println("digite \"escolher arquivo\" para enviar o seu teste\n por favor lembre-se de enviar no formato \n1-XXXX\n2-XXXX\n3-XXXX\n4-XXXX\n5-XXXX");
            }
        }
    
        }catch (IOException e){
        System.err.println("IO Exception no gerenciador de cliente");
        System.err.println(e.getStackTrace());
    }finally{
        out.close();
        try{
            in.close();
        }catch (IOException e){
            e.printStackTrace();
        }
    }
}}