import java.util.*;
class Addition{
  public static void main(String[] args){
    Scanner sc=new Scanner(System.in);
    System.out.print("Enter two numbers to be added: ");
    double a=sc.nextDouble();
    double b=sc.nextDouble();
    double sum=a+b;
    System.out.println("the sum is "+sum);
  }
}
