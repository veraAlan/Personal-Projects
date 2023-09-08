package SortPuzSolver;

import java.util.ArrayList;
import java.util.List;

class Tube {
   private List<String> content = new ArrayList<>();
   private int size = 3;
   private final String order;
   private final String novalue = "clear";

   // Constructor method
   /*
    * Create instance with n-color and a way of naming the tube.
    * Should be equal as content cardinal length.
    */
   public Tube(String tubeName, String[] colors){
      if(size == colors.length){
         // Define colors for the object of Tube.
         for(int i = 0; i < colors.length; i++){
            content.add(colors[i]);
         }

         this.order = tubeName;
         // Debug creation of tubes
         System.out.println("Tube created:" + getStringContent());
      } else {
         throw new IllegalArgumentException("Size must be equal or one less than Tube max length. (Length: " + size + ")");
      }
   }

   // Get methods
   private List<String> getContent(){
      return content;
   }

   private String getOrderName(){
      return order;
   }

   private int getFreeSpace(){
      int freeSpace = size - getContent().indexOf(novalue);

      return freeSpace;
   }

   public String getStringContent(){
      String string = order + " ( "; 
      for(int i = 0; i < size; i++){
         string += content.get(i) + " ";
      }

      string += ")";

      return string;
   }

   // Set methods
   private void setNewSubContent(String newColor, int startIndex, int endIndex){
      for(int i = startIndex; i < endIndex; i++){
         content.set(i, newColor);
      }
   }

   // Other methods
   // Get only the right-most side color indexes, for easier finding for replacing.
   private int[] getUpperColor(){
      int index = content.size() - 1;
      int lowerIndex = --index;
      if(content.contains(novalue)){
         index = content.indexOf(novalue);
         lowerIndex = index;
         if(content.get(index) != novalue) lowerIndex = --index;
      }

      while(lowerIndex > 0 && content.get(index - 1) == content.get(lowerIndex - 1)) lowerIndex--;

      int[] indexes = {lowerIndex, index};
      return indexes;
   }

   // Check if all colors of tube are the same color.
   public boolean checkColor(){
      boolean allSameColor = true;
      if(content.indexOf(novalue) == -1){
         int i = 0;
         String firstColor = content.get(0);
         while(allSameColor && i < content.size()) {
            if(firstColor != content.get(i)) allSameColor = false;
            i++;
         }
      }
      return allSameColor;
   }

   public boolean checkEmpty(){
      return content.get(0) == novalue;
   }

   // Move right-side color/s to another instance of tube.
   public boolean moveTo(Tube recieverTube){
      int[] colorIndexes = getUpperColor();
      int[] recieverColorIndexes = recieverTube.getUpperColor();
      List<String> repeatedColors = content.subList(colorIndexes[0], colorIndexes[1]);
      int recieverFreeSpace = recieverTube.getFreeSpace();

      if(recieverTube.content.get(recieverColorIndexes[0]) == novalue){
         if(recieverFreeSpace >= repeatedColors.size() && repeatedColors.size() > 0){
            List<String> recieverContent = recieverTube.getContent();
            int recieverClearIndex = recieverContent.indexOf(novalue);

            // TODO Check this function.
            recieverTube.setNewSubContent(repeatedColors.get(0), recieverClearIndex, colorIndexes[1] - colorIndexes[0]);
            this.setNewSubContent(novalue, 2, 3);

            // Show transaction.
            System.out.println("New Tubes: \n\tSender: " + getOrderName() + " : " + getStringContent());
            System.out.println("\tReciever: " + recieverTube.getOrderName() + " : " + recieverTube.getStringContent());
         }
         return true;
      } else {
         System.out.println("Illegal move. Trying to move " + content.get(colorIndexes[0]) + " to " + recieverTube.content.get(recieverColorIndexes[0]));
         return false;
      }
   }
}