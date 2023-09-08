package SortPuzSolver;

import java.sql.Array;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class Solver {
   List<Tube> allTubes;
   boolean cleared = false;
   
   public Solver(String[][] originalColors){
      // originarValues reserve the original setter for the tubes.
      int matrixSize = originalColors.length - 1;
      boolean legalMove = false;

      List<Tube> tubeList = new ArrayList<Tube>();
      for (int i = 0; i < matrixSize; i++) {
         tubeList.add(new Tube("tube" + Integer.toString(i), originalColors[i]));
      }

      String[][] movesHeader = new String[][]{{"Move From ", "Move To"}, {" ------- ", " ------- "}};
      List<String[][]> listOfMoves = new ArrayList<String[][]>();
      listOfMoves.add(movesHeader);
      // TODO New solving algo
      // 1. Find non-clear tube (Has at least 1 color).
      int indexColor = -1;
      for(int i = 0; i < matrixSize; i++){
         if(!tubeList.get(i).checkEmpty()) indexColor = i;
      }
      // 2. Find a clear tube (First legal move).
      int indexFree = -1;
      for(int i = 0; i < matrixSize; i++){
         if(tubeList.get(i).checkEmpty()) indexFree = i;
      }
      tubeList.get(indexColor).moveTo(tubeList.get(indexFree));
      
      // 3. Iterate over every other tubes to find legal moves.

      // 4. Repeat until no legal moves are with current tubes&colors.
      // 5. Repeat but change tube from step 2.

      System.out.println("---------------------------------------------\n");
      for(int i = 0; i < listOfMoves.size(); i++){
         System.out.println("| " + listOfMoves.get(i)[i][0] + " | " + listOfMoves.get(i)[i][1]);
      }
      System.out.println("---------------------------------------------\n");

   }
}