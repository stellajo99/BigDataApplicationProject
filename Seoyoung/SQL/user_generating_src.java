 import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
 
public class users {
    public static void main(String[] args){
        try{
          
            File file = new File("C:\\Users\\stell\\Desktop\\users.txt");
            
            FileReader filereader = new FileReader(file);
            
            BufferedReader bufReader = new BufferedReader(filereader);
            String line = "";
            int i = 0;
            while((line = bufReader.readLine()) != null){            	
            	String[] user = line.split("\\s");
                System.out.printf("INSERT INTO user (username, pwd) VALUES ('%s', '%s');\n", user[0], user[1]);
                i++; 
                
            }
                  
            bufReader.close();
        }catch (FileNotFoundException e) {
            // TODO: handle exception
        }catch(IOException e){
            System.out.println(e);
        }
    }
}