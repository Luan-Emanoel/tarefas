import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.Socket;

public class ConexaoServidor implements Runnable {
    private Socket servidor;
    private BufferedReader in;
    
    public ConexaoServidor(Socket s) throws IOException{
        servidor = s;
        in = new BufferedReader(new InputStreamReader(servidor.getInputStream()));        
    }
    
    @Override
    public void run(){
        
            try {
                while(true){
                 
                String respostaServidor = in.readLine();
                if (respostaServidor == null) break;
                System.out.println("Servidor:" + respostaServidor);
                }
                
            } catch (IOException e) {
                e.printStackTrace();
            }finally{
                try{
                in.close();
                }catch(IOException e){
                    e.printStackTrace();
                }
            }
            
        }
    }
    

