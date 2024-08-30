abstract class M
{
     abstract void sum();
   
}
 class Main extends M
 {
     void sum()
     {
         System.out.println("summm");
     }
     public static void main(String args[])
     {
         Main ob = new Main();
         ob.sum();
     }
 }