 import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
 
public class review {
    public static void main(String[] args){
        try{
            //파일 객체 생성
            File file = new File("C:\\Users\\stell\\Desktop\\review_content.txt");
            //입력 스트림 생성
            FileReader filereader = new FileReader(file);
            //입력 버퍼 생성
            BufferedReader bufReader = new BufferedReader(filereader);
            String line = "";
            int i = 0;
            while((line = bufReader.readLine()) != null){ 
            	int userid = (int)(Math.random()*151)+1;
            	int restid = (int)(Math.random()*91)+1;
            	int rating = (int)(Math.random()*5)+1;
                System.out.printf("INSERT INTO review (user_id, rest_id, content, rating) VALUES (%d, %d, \"%s\", %d);\n", userid, restid, line, rating);
                i++; 
                
            }
            //.readLine()은 끝에 개행문자를 읽지 않는다.            
            bufReader.close();
        }catch (FileNotFoundException e) {
            // TODO: handle exception
        }catch(IOException e){
            System.out.println(e);
        }
    }
}
