/**
 * Activity:
 * https://www.codewars.com/kata/5264d2b162488dc400000001
 */

public class SpinWords {
  public static void main(String[] args) {
    // Input
    String sentence = "Stop Spinning My Words!";

    String[] words = sentence.split(" ");
    
    for(int i = 0; i < words.length; i++){
      if(words[i].length() > 5){
        char[] chars = words[i].toCharArray();
        
        String reversed = new StringBuilder(new String(chars)).reverse().toString();
        
        words[i] = reversed;
      }
    }
    
    StringBuilder sb = new StringBuilder();
    for (int i = 0; i < words.length; i++) {
        sb.append(words[i]);
        if (i != words.length - 1) {
            sb.append(" ");
        }
    }
    
    String newSentence = sb.toString();
    
    System.out.println(newSentence);
  }
}