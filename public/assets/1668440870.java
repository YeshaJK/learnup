/*
 Pc no.:SRKI_060
 Enrollment no.:E20110192000310119
 Faculty Name:Dr.Rupal Snehkunj
 Student Name:Nishtha Vaghani
 Class:TYCS(SEM 5)
 Div:A
 Date:03/08/2022
 Assignment:10
 Assignment Aim :Exception Handling
Q-1. Write a program in Java to develop user defined exception for
'Divide by Zero' error.
*/
import java.util.Scanner;
public class ass_101 
{ 
    public static void main(String[] args) 
    {
       int num1 , num2 , result = 0;
       Scanner dis = new Scanner(System.in);
       System.out.println("Enter the first number : ");
       num1 = dis.nextInt();
       System.out.println("Enter the second number : ");
       num2 = dis.nextInt();
       try{
          result = num1/num2;
          System.out.println("The result is : " +result);
      } 
      catch (ArithmeticException e) {
         System.out.println ("Can't be divided by Zero " + e);
      } 
    }
    
}
