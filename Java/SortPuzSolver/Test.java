package SortPuzSolver;

public class Test {
   public static void main(String[] args){
      // Set values of colors in a 2D array.
      String[][] aColors = {
         {"clear",   "clear",    "clear"},
         {"Blue",    "Red",      "Blue"},
         {"Red",     "Blue",     "Red"}
      };
      
      // Set values to a respective Tube instance.
      System.out.println("---------------------------------------------\n");

      // Call solver.
      Solver solverBruteForce = new Solver(aColors);
   }
}
